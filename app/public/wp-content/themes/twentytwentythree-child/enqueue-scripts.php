<?php
function twentytwentythree_child_enqueue_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), null, 'all');
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
  wp_enqueue_style('child-style', get_stylesheet_uri(), array('bootstrap-css'));
  wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

  wp_localize_script('main-js', 'ajax_object', array(
    'ajax_url' => admin_url('admin-ajax.php')
  ));
}
add_action('wp_enqueue_scripts', 'twentytwentythree_child_enqueue_styles');