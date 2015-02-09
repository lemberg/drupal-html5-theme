<?php

/**
 * Implements hook_preprocess_page().
 */
function html5_preprocess_page() {
  $html5shiv = array(
    '#tag' => 'script',
    '#value' => '',
    '#attributes' => array(
      'src' => file_create_url(drupal_get_path('theme', 'html5') . '/js/html5shiv.js'),
      'type' => 'text/javascript',
    ),
    '#prefix' => '<!--[if lte IE 8]>',
    '#suffix' => '<![endif]-->',
  );
  drupal_add_html_head($html5shiv, 'html5shiv');
}

/**
 * Overrides theme_breadcrumb().
 */
function html5_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<nav class="breadcrumb">' . implode(' » ', $breadcrumb) . '</nav>';
    return $output;
  }
}
