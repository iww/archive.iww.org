<?php
/**
 * @file
 *
 * This is the part of the form that provides the actions and the list based
 * on the selected filters.
 *
 */

/**
 * Provide the list of filtered users.
 */
function advuser_admin_account(&$form_state) {
  // Get the filters for the user data.
  $filter = advuser_build_filter_query();

  // Get the list of user roles to be displayed.
  $roles = advuser_user_roles();

  // Array used for user profile title and value display in list.
  $ff = array();

  foreach (advuser_profile_fields() as $field) {
    if (isset($field->name)) {
      $ff[] = array('data'=>t($field->title), 'field'=>"$field->name.value");
    }
  }

  $header = array(
    array(),
    array('data' => t('Username'), 'field' => 'u.name'),
    array('data' => t('Mail'), 'field' => 'u.mail'),
    array('data' => t('Status'), 'field' => 'u.status'),
  );

  if (count($roles)) {
    $header[] = t('Roles');
  }

  $header = array_merge($header, array(
    array('data' => t('Member for'), 'field' => 'u.created', 'sort' => 'desc'),
    array('data' => t('Last access'), 'field' => 'u.access'),
  ));

  $header = array_merge($header, $ff);

  $header[] = t('Operations');

  $form['options'] = array(
    '#type' => 'fieldset',
    '#title' => t('Action options'),
    '#prefix' => '<div class="container-inline">',
    '#suffix' => '</div>',
    '#collapsible' => FALSE,
  );
  $options = array();

  // We don't want to call the user_operations here because we can't control
  // the functioning of the callbacks to the saved accounts in the session.
  // The callbacks only operate on the current screenfull of data and know
  // nothing about the Select All Users mode.
  $operations = module_invoke_all('advuser_operations');

  foreach ($operations as $operation => $array) {
    $options[$operation] = $array['label'];
  }
  $form['options']['operation'] = array(
    '#type' => 'select',
    '#options' => $options,
    '#default_value' => 'saveselect',
  );
  $form['options']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Apply action'),
  );

  $destination = drupal_get_destination();

  list($junk, $go) = split('=', $destination);
  $form['destination'] = array('#type' => 'value', '#value' => urldecode($go));

  $status = array(t('blocked'), t('active'));
  $roles = advuser_user_roles();

  $sql = advuser_build_query();
  $sql .= tablesort_sql($header);

  $query_count = advuser_build_query('count');

  $result = pager_query($sql, variable_get('advuser_listno', 50), 0, $query_count, $filter['args']);

  while ($account = db_fetch_object($result)) {
    if ($account->uid && ($account->uid != 1 || variable_get('advuser_allow_list_uid1', FALSE))) {
      $accounts[$account->uid] = '';
      $form['name'][$account->uid] = array('#value' => theme('username', $account));
      $form['mail'][$account->uid] = array('#value' => $account->mail);
      $form['status'][$account->uid] =  array('#value' => $status[$account->status]);
      $users_roles = array();
      $roles_result = db_query('SELECT rid FROM {users_roles} WHERE uid = %d', $account->uid);
      while ($user_role = db_fetch_object($roles_result)) {
        $users_roles[] = $roles[$user_role->rid];
      }
      asort($users_roles);
      $form['roles'][$account->uid][0] = array('#value' => theme('item_list', $users_roles));
      $form['member_for'][$account->uid] = array('#value' => format_interval(time() - $account->created));
      $form['last_access'][$account->uid] =  array('#value' => $account->access ? t('@time ago', array('@time' => format_interval(time() - $account->access))) : t('never'));
      if (module_exists('profile')) {
        profile_load_profile($account);
      }
      foreach(advuser_profile_fields() as $field) {
        $form[$field->name][$account->uid] = array('#value' => profile_view_field($account, $field));
      }
      if ($account->uid) {
        $fv = l(t('edit'), "user/$account->uid/edit", array('query' => $destination));
        if ($account->uid != 1) {
          $fv .= ' | ' . l(t('delete'), "user/$account->uid/delete", array('query' => $destination));
        }
      }
      else {
        $fv = NULL;
      }
      $form['operations'][$account->uid] = array('#value' => $fv);
    }
  }
  $form['accounts'] = array(
    '#type' => 'checkboxes',
    '#options' => $accounts
  );
  $form['pager'] = array('#value' => theme('pager', NULL, 50, 0));

  return $form;
}

/**
 * Submit the user administration update form.
 */
function advuser_admin_account_submit($form, &$form_state) {
  $operations = module_invoke_all('advuser_operations', $form_state);
  $operation = $operations[$form_state['values']['operation']];
  $destination = $form_state['values']['destination'];
  // Filter out unchecked accounts.
  $accounts_selected = array_filter($form_state['values']['accounts']);
  $form_accounts = $form['accounts']['#options'];

  $advuser = &$_SESSION['advuser'];
  $accounts = &$advuser['accounts'];
  $selectall = &$advuser['selectall'];
  $deselected = &$advuser['deselected'];

  switch ($form_state['values']['operation']) {
    case 'saveselect': {
      foreach ($form_accounts as $form_user_id => $value) {
        if (isset($accounts_selected[$form_user_id])) {
          $accounts[$form_user_id] = $form_user_id;
          unset($deselected[$form_user_id]);
        }
        else {
          $deselected[$form_user_id] = $form_user_id;
          unset($accounts[$form_user_id]);
        }
      }
    } break;
    case 'deselectall': {
      $selectall = FALSE;
      $accounts = array();
      $deselected = array();
      drupal_set_message(t('All selections have been reset.'));
    } break;
    case 'selectall': {
      $selectall = TRUE;
      $accounts = array();
      $deselected = array();
      drupal_set_message(t('All filtered users have been selected.'));
    } break;
    case 'block': {
      foreach ($accounts as $user_id) {
        $account = user_load(array('uid' => $user_id));
        if ($account !== FALSE && $account->status == 1) {
          user_save($account, array('status' => 0));
        }
        unset($accounts[$user_id]);
      }
      drupal_set_message(t('The selected users have been blocked.'));
    } break;
    case 'unblock': {
      foreach ($accounts as $user_id) {
        $account = user_load(array('uid' => $user_id));
        if ($account !== FALSE && $account->status == 0) {
          user_save($account, array('status' => 1));
        }
        unset($accounts[$user_id]);
      }
      drupal_set_message(t('The selected users have been unblocked.'));
    } break;

    case 'email': {
      // Menu callback is provided for mass emailing.
      drupal_goto('admin/user/user/advuser/confirm/email');
    } break;

    case 'delete': {
      // Menu callback is provided for mass deleting.
      drupal_goto('admin/user/user/advuser/confirm/delete');
    } break;
  }

  // The add_role and remove_role actions have a callback that is called from
  // here.
  if ($function = $operation['callback']) {
    // Add in callback arguments if present.
    if (isset($operation['callback arguments'])) {
      $args = array_merge(array($accounts_selected), $operation['callback arguments']);
    }
    else {
      $args = array($accounts_selected);
    }
    call_user_func_array($function, $args);

    $act = str_replace('_', ' ', $operation['callback arguments'][0]);
    drupal_set_message(t('The !action action has been applied.', array('!action' => t($act))));
  }

  // Where to from here?
  extract(parse_url($destination));
  drupal_goto($path, $query);
}

/**
 * Theme user administration overview.
 */
function theme_advuser_admin_account($form) {
  static $profile_fields = array();

  $advuser = &$_SESSION['advuser'];
  $accounts = &$advuser['accounts'];
  $selectall = &$advuser['selectall'];
  $deselected = &$advuser['deselected'];

  // Overview table:
  $header = array(
    theme('table_select_header_cell'),
    array('data' => t('Username'), 'field' => 'u.name'),
    array('data' => t('Mail'), 'field' => 'u.mail'),
    array('data' => t('Status'), 'field' => 'u.status'),
  );
  $roles = advuser_user_roles();
  if (count($roles)) {
    $header[] = t('Roles');
  }
  $header = array_merge($header, array(
    array('data' => t('Member for'), 'field' => 'u.created', 'sort' => 'desc'),
    array('data' => t('Last access'), 'field' => 'u.access'),
  ));

  $ff = array();
  foreach (advuser_profile_fields() as $field) {
    $ff[] = array('data'=>t($field->title), 'field'=>$field->name);
  }

  $header = array_merge($header, $ff);
  $header[] = t('Operations');

  if (!count($accounts) && !$selectall) {
    $form['options']['noselectedusers'] = array(
      '#value' => t('No selected users have been saved.'),
      '#prefix' => '<span class="error">',
      '#suffix' => '</span>',
    );
  }
  $output = drupal_render($form['options']);

  if (isset($form['name']) && is_array($form['name'])) {
    foreach (element_children($form['name']) as $key) {
      if (($selectall || in_array($key, $accounts)) && !in_array($key, $deselected)) {
        $form['accounts'][$key]['#value'] = TRUE;
      }
      $row = array(
        drupal_render($form['accounts'][$key]),
        drupal_render($form['name'][$key]),
        drupal_render($form['mail'][$key]),
        drupal_render($form['status'][$key]),
      );
      $roles = advuser_user_roles();
      if (count($roles)) {
        $row[] = drupal_render($form['roles'][$key]);
      }
      $row = array_merge($row, array(
        drupal_render($form['member_for'][$key]),
        drupal_render($form['last_access'][$key]),
      ));

      if (module_exists('profile')) {
        $fields = variable_get('advuser_profile_fields', NULL);

        if (is_array($fields)) {
          foreach ( $fields as $fid => $value) {
            if ( $value ) {
              if (empty($profile_fields[$fid])) {

                $field = db_fetch_object(db_query('SELECT * FROM {profile_fields} WHERE fid = %d', $fid));
                $profile_fields[$fid] = $field;
              }
              else {
                $field = $profile_fields[$fid];
              }
              $row[] = drupal_render($form[$field->name][$key]);
            }
          }
        }
      }
      $row[] = drupal_render($form['operations'][$key]);
      $rows[] = $row;
    }
  }
  else  {
    $rows[] = array(array('data' => t('No users available.'), 'colspan' => '8'));
  }

  $output .= theme('table', $header, $rows);

  $form['caution'] = array(
    '#value' => t('Caution, you must "Save selection criteria" to apply other actions to the selected users or before changing pages.'),
    '#prefix' => '<div class="warning">',
    '#suffix' => '</div>',
  );
  $output .= drupal_render($form['caution']);

  if ($form['pager']['#value']) {
    $output .= drupal_render($form['pager']);
  }

  $output .= drupal_render($form);

  return $output;
}

// vim:ft=php:sts=2:sw=2:ts=2:et:ai:sta:ff=unix
