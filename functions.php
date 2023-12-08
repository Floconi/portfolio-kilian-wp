<?php 

/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );



/** Ajouter un css */ 
add_theme_support( 'post-thumbnails' );


function velo_register_post_types() {
     // CPT Portfolio
     $labels = array(
      'name' => 'velos',
      'all_items' => 'Tous les Vélos',  // affiché dans le sous menu
      'singular_name' => 'Velo',
      'add_new_item' => 'Ajouter un vélo',
      'edit_item' => 'Modifier un vélo',
      'menu_name' => 'Vélos'
  );

$args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor','thumbnail' ),
      'menu_position' => 25, 
      'menu_icon' => get_template_directory_uri() . '/images/icone_velo.png',
      /*'menu_icon' => 'dashicons-airplane',*/
);

register_post_type( 'velos', $args );

  // Déclaration de la Taxonomie
  $labels = array(
    'name' => 'marques',
    'new_item_name' => 'Nouvelle marque',
    'parent_item' => 'Type de projet parent',
);

$args = array( 
    'labels' => $labels,
    'public' => true, 
    'show_in_rest' => true,
    'hierarchical' => true, 
);

register_taxonomy( 'marques', 'velos', $args );

}
add_action( 'init', 'velo_register_post_types' );



function Apprenants_code_register_post_types() {
  // CPT Portfolio
  $labels = array(
   'name' => 'apprenants_code',
   'all_items' => 'Tous les apprenants',  // affiché dans le sous menu
   'add_new' => 'Ajouter un apprenants',
   'singular_name' => 'apprenants',
   'add_new_item' => 'Ajouter un apprenants',
   'edit_item' => 'Modifier un apprenants',
   'menu_name' => 'Aprenants code'
);

$args = array(
   'labels' => $labels,
   'public' => true,
   'show_in_rest' => true,
   'has_archive' => true,
   'supports' => array( 'title', 'editor','thumbnail' ),
   'menu_position' => 25, 
   'menu_icon' => 'dashicons-welcome-learn-more',
   /*'menu_icon' => 'dashicons-airplane',*/
);

register_post_type( 'apprenants_code', $args );


// Déclaration de la Taxonomie Type de promotion
$labels = array(
  'name' => 'Type de promotion',
  'new_item_name' => 'Type de promotion',
  'parent_item' => 'apprenants_code',
 );
 
 $args = array( 
  'labels' => $labels,
  'public' => true, 
  'show_in_rest' => true,
  'hierarchical' => false, 
 );
 
 register_taxonomy( 'type_promotion', 'apprenants_code', $args );

// Déclaration de la Taxonomie Année de promotion
$labels = array(
 'name' => 'Année de Promotion',
 'new_item_name' => 'Année_promotions',
 'parent_item' => 'apprenants_code',
);

$args = array( 
 'labels' => $labels,
 'public' => true, 
 'show_in_rest' => true,
 'hierarchical' => true, 
);

register_taxonomy( 'annee_promotions', 'apprenants_code', $args );





 // Déclaration de la Taxonomie Type de promotion
$labels = array(
  'name' => 'Compétences',
  'new_item_name' => 'Type de promotion',
  'parent_item' => 'apprenants_code',
 );
 
 $args = array( 
  'labels' => $labels,
  'public' => true, 
  'show_in_rest' => true,
  'hierarchical' => true, 
 );
 
 register_taxonomy( 'competences', 'apprenants_code', $args );

}
add_action( 'init', 'Apprenants_code_register_post_types' );

?>