<?php

/**
 * Implements hook_preprocess_page();
 */
function html5_preprocess_page() {
  $html5shiv = array(
    '#tag' => 'script',
    '#value' => '',
    '#attributes' => array(
      'src' => drupal_get_path('theme', 'html5') . '/js/html5shiv.js',
    ),
    '#prefix' => '<!--[if lte IE 8]>',
    '#suffix' => '<![endif]-->',
  );
  drupal_add_html_head($html5shiv, 'html5shiv');
}
