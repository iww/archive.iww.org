<?php // $Id$

if (db_is_active()) {
  include_once(drupal_get_path('theme', 'adaptivetheme') .'/inc/template.custom-functions.inc');
}

// Style Schemes: change 'adaptivetheme_subtheme' to your theme name (see theme-settings.php also).
if (theme_get_setting('style_enable_schemes') == 'on') {
  drupal_add_css(drupal_get_path('theme', 'adaptivetheme_subtheme') .'/css/schemes/'. get_at_styles(), 'theme');
}

/**
 * Preprocess for theme('search_theme_form').
 */
function iww_adaptive_preprocess_search_theme_form(&$vars, $hook) {
  // Modify elements of the search form
  $vars['form']['search_theme_form']['#title'] = t('');

  // Set a default value for the search box
  $vars['form']['search_theme_form']['#value'] = t(' Search');

  // Add a custom class to the search box
  $vars['form']['search_theme_form']['#attributes'] = array('onfocus' => 'this.value = ""');

  // Change the text on the submit button
  $vars['form']['submit']['#value'] = t('Go');

  // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_theme_form']['#printed']);
  $vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);

  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
}

/**
 * Preprocess for theme('page').
 */
function iww_adaptive_preprocess_page(&$vars, $hook) {
  if ($vars['secondary_content']) {
    $vars['classes'] = $vars['classes'] . ' secondary-content';
  }

  global $user;

  if ($user->uid) {
    $vars['hello'] = t('Hello,  !name ', array('!name'=>$user->name));
    $vars['my_account'] = l(t('My Account'), 'user/' .$user->uid) .' | '. l(t('Logout'), 'logout');
  }
  else {
    $vars['my_account'] = l('Login', 'user/login') .' | '. l('Register', 'user/register');
  }
  $vars['layout_settings'] = NULL;
}

/**
 * Overrides theme_node_submitted().
 */
function iww_adaptive_node_submitted($node) {
  return t('Submitted on @datetime', array(
    '@datetime' => format_date($node->created),
  ));

function iww_adaptive_theme(&$existing, $type, $theme, $path) {
  $hooks['user_login'] = array(
    'template' => 'templates/user_login',
    'arguments' => array('form' => NULL),
    // other theme registration code...
  );
  return $hooks;
}

function iww_adaptive_preprocess_user_login(&$variables) {
  $variables['intro_text'] = t('If you are an IWW member looking for discussion forums or other non-public content, visit redcard.iww.org and login or create an account there.');
  $variables['rendered'] = drupal_render($variables['form']);
}

}
