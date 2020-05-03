<?php
/**
 * @file
 *
 * Confirm the delete of selected users.
 *
 */

/**
 * Implement the menu callback function for
 * admin/user/user/advuser/confirm/delete.
 */
function advuser_multiple_delete_confirm() {
  $advuser = &$_SESSION['advuser'];
  $accounts = &$advuser['accounts'];
  $selectall = &$advuser['selectall'];
  $deselected = &$advuser['deselected'];

  $form['accounts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Selected users'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#prefix' => '<ul>', 
    '#suffix' => '</ul>', 
    '#tree' => TRUE
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
    // array_filter returns only elements with TRUE values
    foreach (array_filter($accounts) as $uid => $value) {
      $user = db_result(db_query('SELECT name FROM {users} WHERE uid = %d', $uid));
      $form['accounts'][$uid] = array(
        '#type' => 'markup', 
        '#value' => check_plain($user), 
        '#prefix' => '<li>', 
        '#suffix' => "</li>",
      );
    }
  }
  $form['operation'] = array('#type' => 'hidden', '#value' => 'delete');

  return confirm_form(
    $form,
    t('Are you sure you want to delete these users?'),
    'admin/user/user/advuser', t('This action cannot be undone.'),
    t('Delete all'), 
    t('Cancel')
  );
}

/**
 * Submit handler for the "Delete all" button.
 */
function advuser_multiple_delete_confirm_submit($form, &$form_state) {
  $advuser = &$_SESSION['advuser'];
  $accounts = &$advuser['accounts'];

  if ($form_state['values']['confirm']) {
    foreach ($accounts as $uid => $value) {
      user_delete($form_state['values'], $uid);
    }
    drupal_set_message(t('The users have been deleted.'));
  }
  $form_state['redirect'] = 'admin/user/user/advuser';
  advuser_reset_variables();
}

// vim:ft=php:sts=2:sw=2:ts=2:et:ai:sta:ff=unix
