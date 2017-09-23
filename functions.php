<?php


//Função carregamento dos scripts
function carrega_scripts(){
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', array(), '4.0', 'all' );
	wp_enqueue_script( 'bootstrap', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts','carrega_scripts');

//Função para Menus

register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal'
	)
);	