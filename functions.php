<?php


define("C_THEME_ROOT", get_template_directory_uri());
define("C_ICONS_DIR", C_THEME_ROOT . "/assets/icons");
define("C_IMG_DIR", C_THEME_ROOT . "/assets/img");

function theme_add_scripts() {
	// подключаем файл стилей темы
    wp_enqueue_style( 'style-consts', get_template_directory_uri() . '/src/style/_const.css' );
    wp_enqueue_style( 'style-buttons', get_template_directory_uri() . '/src/style/ui/buttons.css' );
    wp_enqueue_style( 'style-inputs', get_template_directory_uri() . '/src/style/ui/inputs.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/src/style/style.css' );

    wp_enqueue_script( 'script-dropdown', get_template_directory_uri() .'/src/script/drop_down.js', array(), '1.0', true );
    wp_enqueue_script( 'script-faq', get_template_directory_uri() .'/src/script/faq_dropdown.js', array(), '1.0', true );

    
}

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );


