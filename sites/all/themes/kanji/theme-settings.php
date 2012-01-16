<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function kanji_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {
  if (isset($form_id)) {
    return;
  }

  // Layout settings
  $form['kanji'] = array(

    '#default_tab' => 'defaults',
  );

  // Breadcrumbs
  $form['kanji']['breadcrumb'] = array(
    '#type' => 'fieldset',
    '#weight' => '5',
    '#title' => t('Breadcrumbs'),
  );
  $form['kanji']['breadcrumb']['bd']['breadcrumb_display'] = array(
    '#type' => 'select',
    '#title' => t('Show breadcrumbs'),
    '#default_value' => theme_get_setting('breadcrumb_display'),
    '#options' => array(
      'yes' => t('Yes'),
      'no' => t('No'),
    ),
  );
}