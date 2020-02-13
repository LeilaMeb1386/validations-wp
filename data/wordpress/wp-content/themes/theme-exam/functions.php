<?php
function my_scripts() {
  wp_enqueue_style('style',get_template_directory_uri() . '/style.css');
  wp_enqueue_style('styles',get_template_directory_uri() . '/css/styles.css');
  wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_script( 'bootstrapcnd','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
  wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.4.1.min.js', array( 'jquery' ),'',true );
}
add_action('wp_enqueue_scripts', 'my_scripts');

function my_widgets_init() {
    register_sidebar( array(
                        'name'          => 'Footer 1',
                        'id'            => 'footer_1',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
    register_sidebar( array(
                        'name'          => 'Footer 2',
                        'id'            => 'footer_2',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
    register_sidebar( array(
                        'name'          => 'Footer 3',
                        'id'            => 'footer_3',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
    register_sidebar( array(
                        'name'          => 'sidebar',
                        'id'            => 'sidebar',
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="ttl">',
                        'after_title'   => '</h4>',
                      ) );
}
