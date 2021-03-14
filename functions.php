<?php

/**************************************************
CSSファイルの読み込み
 **************************************************/
function my_enqueue_styles() {
  wp_register_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_register_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
  wp_enqueue_style('style');
  wp_enqueue_script('base-script', get_theme_file_uri('/js/main.js'), array('jquery'), false);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
アイキャッチを有効化
 **************************************************/
add_theme_support('post-thumbnails');
