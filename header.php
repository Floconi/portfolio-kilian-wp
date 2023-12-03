<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kilian Sochard" />
    <meta name="description" content="Bienvenue sur mon portfolio" />
    <meta name="copyright" content=" @ copyright | Kilian Sochard |Tous drois réservés" />

    <!--importation css dans cet ordre reset, bosstrap, icone boostrap , librarie boostrap et mon css-->
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory')."/resert.css"?>" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory')."/style.css"?>" />

    <!--Police d'écriture -->
    <!-- police 1: des boutons Silkscreen-regular  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    
    <!-- police 2: Les titres Paprika --
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paprika&family=Silkscreen&display=swap" rel="stylesheet"-->
    <!-- Police 3 : nico_regular directement intégré par le css-->
    <style>
        @font-face {
    font-family: 'nico_mojiregular';
    src: url("<?php echo bloginfo('template_directory').'/policedécriture/webfontkit-20231116-120723/nicomoji-regular-webfont.woff2'?>") format('woff2'),
         url("<?php echo bloginfo('template_directory').'/policedécriture/webfontkit-20231116-120723/nicomoji-regular-webfont.woff'?>") format('woff');
    font-weight: normal;
    font-style: normal;

}
    </style>
    <!--JS de la page de contact-->

    <script <?php 
        $titre = get_the_title();
        $script ="";
        $btn_header="" ;
        if($titre == "Accueil") {

            $btn_header = "#about";
            $script = "/script_accueil.js";

        }elseif($titre == "A propos de moi"){
            $btn_header = "#profil";
            $script = "/script_a_propos.js";
            
        }elseif($titre == "Contact"){
            $btn_header = "#contact";
            $script = "/script_contact.js";

        }else{

            $script = "/script_accueil.js";
            
        }
        wp_enqueue_script(
            'mon_js',
            get_template_directory_uri(). '/js'.$script
        )
    ?> defer >
    </script>    
    <!--<script src="js/script_contact.js" defer></script>-->
    <title>Page d'acceuil</title>
    <?php wp_head(); ?>
  </head>

    <body>

            <?php  $titre_actuel = get_the_title() ; 
            $type_de_publication_actuelle = get_post_type();
            $id_page_actuel = get_the_id();
            ?>

    
        <section class="header_hero"  style="background-image: url(<?php echo bloginfo('template_directory')."/images/images_de_base/Fond_header.png)"?>"> <!-- Obliger car l'arrière plan doit être sur le header et le héro-->
            <header class="header">
                <div class="container d-flex justify-content-between">
                    <div class="row ">
                        <div class="col-12">
                            <ul>
                                <li class="logos">
                                    <img  class="logo" src="<?php echo bloginfo('template_directory')."/images/logo.svg"?>" alt="logo">
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 ">
                            <nav class="nav d-block d-sm-none">
                                <ul>
                                    <li class="d-block d-sm-none">
                                        <a onclick="affichermenu()"><i class="bi bi-bookmark-star icone_menu"></i></a>
                                    </li>
                                </ul> 
                                <div class="menu_cacher d-none"> <nav id="site-navigation" class="main-navigation">
                                        <?php

                                        $requete_menu_nav = array(
                                            'post_type' => 'page',
                                            'order' => 'ASC'
                                            
                                        );
                                        $menu_nav = new WP_Query($requete_menu_nav);?>
                                        <ul> 
                                        <?php if( $menu_nav->have_posts() ) : while( $menu_nav->have_posts() ) : $menu_nav->the_post(); ?>
                                                <li> 
                                                    <?php if ($menu_nav->post->post_title == $titre_actuel ){ ?>
                                                        <a class="page_active" href="<?php echo $menu_nav->post->guid ?>"><?php echo $menu_nav->post->post_title; ?></a>
                                                    <?php }else{ ?>
                                                        <a href="<?php echo $menu_nav->post->guid ?>"><?php echo $menu_nav->post->post_title; ?></a>
                                                    <?php } ?>
                                                    
                                                </li>
                                    
                                        <?php endwhile; endif; ?>
                                        </ul>

                                        <?php



                                        /**
                                         * ! Partie obligatoire pour retrouver la page actuelle sinon la méthode the_title récupère le titre de la derniere page à cause de la méthode juste au dessus 
                                         */
                                        $requete_menu_nav = array(
                                            'post_type' => 'page',
                                            'page_id' => $id_page_actuel,
                                            
                                        );
                                        $menu_nav = new WP_Query($requete_menu_nav);?>
                                        
                                        <?php if( $menu_nav->have_posts() ) : while( $menu_nav->have_posts() ) : $menu_nav->the_post(); ?>
                                        <?php endwhile; endif; ?>
                                
                                    
                                    <?php /** 
                                    *wp_nav_menu(
                                    *    array(
                                    *        'theme_location' => 'main-menu',
                                    *        'menu_id'     => 'primary-menu',
                                     *   )
                                    *);*/
                                    ?>
                                </nav> </div> 
                            </nav>
                            <nav class="nav d-none d-sm-block">
                                <nav id="site-navigation" class="main-navigation">
                                        <?php

                                        $requete_menu_nav = array(
                                            'post_type' => 'page',
                                            'order' => 'ASC'
                                            
                                        );
                                        $menu_nav = new WP_Query($requete_menu_nav);?>
                                        <ul> 
                                        <?php if( $menu_nav->have_posts() ) : while( $menu_nav->have_posts() ) : $menu_nav->the_post(); ?>
                                                <li> 
                                                    <?php if ($menu_nav->post->post_title == $titre_actuel ){ ?>
                                                        <a class="page_active" href="<?php echo $menu_nav->post->guid ?>"><?php echo $menu_nav->post->post_title; ?></a>
                                                    <?php }else{ ?>
                                                        <a href="<?php echo $menu_nav->post->guid ?>"><?php echo $menu_nav->post->post_title; ?></a>
                                                    <?php } ?>
                                                    
                                                </li>
                                    
                                        <?php endwhile; endif; ?>
                                        </ul>

                                        <?php



                                        /**
                                         * ! Partie obligatoire pour retrouver la page actuelle sinon la méthode the_title récupère le titre de la derniere page à cause de la méthode juste au dessus 
                                         */
                                        $requete_menu_nav = array(
                                            'post_type' => 'page',
                                            'page_id' => $id_page_actuel,
                                            
                                        );
                                        $menu_nav = new WP_Query($requete_menu_nav);?>
                                        
                                        <?php if( $menu_nav->have_posts() ) : while( $menu_nav->have_posts() ) : $menu_nav->the_post(); ?>
                                        <?php endwhile; endif; ?>
                                    
                                    <?php/** 
                                    ** wp_nav_menu(
                                        * array(
                                          *  'theme_location' = 'main-menu',
                                         *   'menu_id'     = 'primary-menu',
                                       * )
                                    *);
                                    */?>
                                </nav> 
                                <!--<ul> 
                                    <li>
                                        <a class="page_active" href="font-page.php">Acceuil</a>
                                    </li>
                                    <li>
                                        <a href="a-propos.html">A propos</a>
                                    </li>
                                    <li>
                                        <a  href="contact.html">Contact</a>
                                    </li>
                                </ul> -->
                            </nav>
                        </div> 
                    </div>
                    </div>
                </div>
            </header>
            <section class="hero">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 d-flex flex-column justify-content-center text-center  align-items-center content-hero-custom">
                            <h1> <?php 
                            //$titre = get_the_title();
                            //$post_type = get_post_type();

                            if ( $titre_actuel == "Accueil"){
                                echo "bienvenue_";
                            }else{
                                if ( $type_de_publication_actuelle == "post"){
                                    echo "Article : ".$titre_actuel."_";
                                }else{
                                   echo $titre."_";  
                                }
                               
                            } 

                            ?>
                                <br>
                                <span>
                                    Kilian Sochard 
                                    <br>
                                    Développeur web
                                </span>
                            </h1>
                            <div class="btn_hero">
                                <a href="<?php echo $btn_header ?>"><button class=" btn btn-primary bouton_header-custom btn_perso">En savoir plus</button></a>
                            </div>
                        </div>   
                    </div>
                </div>
            </section>
        </section>


      