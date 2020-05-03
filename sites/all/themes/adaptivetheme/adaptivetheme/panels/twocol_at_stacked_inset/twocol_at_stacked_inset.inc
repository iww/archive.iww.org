<?php // $Id$
// adpativethemes.com

/**
 * @file twocol_at_stacked_inset.inc
 * Implementation of hook_panels_layouts()
 */
function adaptivetheme_twocol_at_stacked_inset_panels_layouts() {
  $items['twocol_at_stacked_inset'] = array(
    'title' => t('Two column AT stacked inset'),
    'icon' => 'twocol_at_stacked_inset.png',
    'theme' => 'twocol_at_stacked_inset',
    'theme arguments' => array('id', 'content'),
    'css' => 'twocol_at_stacked_inset.css',
    'panels' => array(
      'top' => t('Top'),
      'left' => t('Left side'),
      'middle' => t('Middle column'),
      'bottom' => t('Bottom'),
    ),
  );

  return $items;
}
