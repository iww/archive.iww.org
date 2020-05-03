<?php
/**
 * @file
 *
 * Confirm the emailing of selected users.
 *
 */

require_once 'advuser_settings.inc';

/**
 * The menu callback function for
 * admin/user/user/advuser/confirm/email
 */
function advuser_multiple_email_confirm(&$form_state) {
  global $user;
  $advuser = &$_SESSION['advuser'];
  $accounts = &$advuser['accounts'];
  $selectall = &$advuser['selectall'];
  $deselected = &$advuser['deselected'];

  $form['accounts'] = array('#prefix' => '<ul>', '#suffix' => '</ul>', '#tree' => TRUE);
  // array_filter returns only elements with TRUE values
  $form['accounts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Selected accounts'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  if ($selectall) {
    $sql = advuser_build_query('name');
    $filter = advuser_build_filter_query();
    $result = db_query($sql, $filter['args']);
    while ($account = db_fetch_object($result)) {
      if (!isset($deselected[$account->uid])) {
        $accounts[$account->uid] = $account->uid;
        $form['accounts'][$account->uid] = array(
          '#type' => 'markup',
          '#value' => check_plain($account->name),
          '#prefix' => '<li>',
          '#suffix' => '</li>',
        );
      }
    }
  }
  else {
    foreach (array_filter($accounts) as $uid => $value) {
      $username = db_result(db_query('SELECT name FROM {users} WHERE uid = %d', $uid));
      $form['accounts'][$uid] = array(
        '#type' => 'markup', 
        '#value' => check_plain($username), 
        '#prefix' => '<li>', 
        '#suffix' => "</li>",
      );
    }
  }
  $form['operation'] = array(
    '#type' => 'hidden', 
    '#value' => 'email'
  );

  $form['variables'] = array(
    '#type' => 'markup', 
    '#prefix' => '<div class="advuser-inset-panel">',
    '#value' => t(
      ADVUSER_SUBSTITUTION_TEXT,
      array('!tokens' => _advuser_get_tokens_list())
    ),
    '#suffix' => '</div>' 
  );

  $from = variable_get("site_mail", "nobody@$_SERVER[SERVER_NAME]");
  if (variable_get('advuser_senders_from_address', FALSE)) {
    $from = $user->mail;
  }
  if (variable_get('advuser_nobody_from_address', FALSE)) {
    $from = "nobody@$_SERVER[SERVER_NAME]";
  }

  $form['mailfrom'] = array(
    '#type' => 'textfield',
    '#title' => t('From'),
    '#value' => $from,
    '#default_value' => $from,
    '#disabled' => TRUE,
  );

  $form['mailsubject'] = array(
    '#type' => 'textfield',
    '#title' => t('Subject'),
    '#required' => TRUE,
  );

  $form['mailbody'] = array(
    '#type' => 'textarea', 
    '#title' => t('Mail body'),
    '#required' => TRUE,
  );

  return confirm_form(
    $form,
    t('Are you sure you want to email these users?'),
    'admin/user/user/advuser',
    t('This action cannot be undone.'),
    t('Email'),
    t('Cancel')
  );
}

/**
 * The submit handler for the Email button.
 */
function advuser_multiple_email_confirm_submit($form, &$form_state) {
  $advuser = &$_SESSION['advuser'];
  $accounts = &$advuser['accounts'];

  if ($form_state['values']['confirm']) {
    foreach ($accounts as $uid => $value) {
      $account = user_load(array('uid' => $uid));
      $from = $form_state['values']['mailfrom'];
      $types = array('user' => $account);
      $mail_subject = token_replace_multiple(
        $form_state['values']['mailsubject'],
        $types,
        ADVUSER_TOKEN_PREFIX,
        ADVUSER_TOKEN_SUFFIX
      );
      $mail_body = token_replace_multiple(
        $form_state['values']['mailbody'],
        $types,
        ADVUSER_TOKEN_PREFIX,
        ADVUSER_TOKEN_SUFFIX
      );
      drupal_mail('advuser', 'advuser-mail', $account->mail, user_preferred_language($account), array('subject' => $mail_subject, 'body' => $mail_body), $from, TRUE);
    }
    drupal_set_message(t('The users have been mailed.'));
  }
  $form_state['redirect'] = 'admin/user/user/advuser';
  advuser_reset_variables();
}

// vim:ft=php:sts=2:sw=2:ts=2:et:ai:sta:ff=unix
