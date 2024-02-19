<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//Modifier la taille des images mis en avant 
set_post_thumbnail_size( 200, 200, true );



// Ajouter un onglet menu dans notre thème 

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );