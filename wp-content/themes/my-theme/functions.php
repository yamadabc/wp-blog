<?php
function menu_setup()
{
    register_nav_menus(array(
        'global' => 'グローバルメニュー',
        'side'   => 'サイドメニュー',
        'footer' => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'menu_setup');
function init_func()
{
    add_theme_support('post-thumbnails');
}
function widgets_init()
{
    register_sidebar([
        'name' => 'main sidebar',
        'id'   => 'main-sidbar'
    ]);
}
add_action('init', 'init_func');
add_action('widgets_init', 'widgets_init');

add_theme_support('title-tag');
