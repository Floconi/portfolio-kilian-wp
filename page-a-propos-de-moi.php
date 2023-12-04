
    <?php get_header() ?>
    <main class="main" style="background-image: url(<?php echo bloginfo('template_directory')."/images/images_de_base/fond_main_.png)"?>">
        <section class="profil main_section" id="profil">
            <div class="container"> 
                <?php $categorieDescription_profil = array(
                    'category_name' => 'Mon profil', 
                ); 
                $Description_profil = new WP_Query( $categorieDescription_profil );?>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 ">
                        <h2 class=" p-4 titre_h2"><?php echo $Description_profil->query["category_name"]."_" ; ?></h2>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-12 mt-2 mb-2 col-md-1 order-md-3  d-flex justify-content-center div_image_profil">
                        <img class="image_profil" src="<?php echo bloginfo('template_directory')."/images/Avatar_kilian_S.png"?>" alt="ma photo de profil">
                    </div>
                    <div class="col-12 col-sm-8 mt-2 mb-2 col-md-8 order-md-2 d-flex">
                        <p class="description_custom">
                            <!-- Je passe à la ligne pour + de lisibilité-->
                            <?php /*$descriptionprofil = get_page_by_title('Profil','','post');
                                echo $descriptionprofil->post_content? */ ?>
                            
                            <?php echo $Description_profil->post->post_content?>
                             <!--Après un bac scientifique (option culture numérique) et un DUT Génie Thermique et énergie, 
                            je souhaite aujourd'hui me réorienter vers le domaine de l'informatique pour lequel j'ai toujours eu ungrand intérêt.
                            <br>
                            <br>
                            Pour engager mon nouveau projet professionnel, j'ai suivi la formation Prépa Avenir pendant 3 mois de mai à septembre 2021 à La Roche sur Yon. 
                            Durant les ateliers proposés, j'ai été attiré par le métier de développeur web en réalisant des enquêtes métiers.
                            <br>
                            <br>
                            Très intéressé par les missions autour du numérique, j'ai décidé d'orienter mon avenir professionnel dans cette voie en optant pour un stage afin d'acquérir une expérience professionnelle.
                            Ce stage me permettrait également de découvrir quels sont les missions d'un developpeur web en entreprise.
                            <br>
                            <br>
                            A titre personnel, je suis passionné par la programmation et j'ai pu concevoir des petits programmes de jeux sous excel (VBA) pendant mon temps libre.
                            <br>
                            <br>
                            Sérieux, méthodique et rigoureux, je suis motivé et je compte m'investir pleinement pour réussir. -->
                        </p>
                    </div>
                    <div class="col-12 col-sm-4 mt-2 mb-2 col-md-3 order-md-1 d-flex align-items-center justify-content-center  infosup m-0 mt-md-0">
                        <div class="infoplus">
                            <i class="bi bi-envelope-at"></i>
                            <p class=" "> kilian.sochard.pro5@gmail.com</p>
                        </div> 
                        <div class="infoplus">
                            <i class="bi bi-phone"></i>
                            <p class=" "> 06 75 90 69 55</p>
                        </div>
                        <div class="infoplus">
                            <i class="bi bi-house"></i>
                            <p class=""> 48000 Mende</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="competences main_section">
            <div class="container">   
                <?php // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                $categorieCompetences = array(
                                'category_name' => 'Compétences', 
                                'orderby' => 'date',
                                'order' => 'ASC',
                               

                            );

                            // 2. On exécute la WP Query
                            $article_compétences = new WP_Query( $categorieCompetences ); ?>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <h2 class=" p-4 titre_h2"><?php echo $Description_profil->query["category_name"]."_" ; ?></h2>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row competences_contenu_custom pt-4 pb-4">
                 
                            

                            <?php if( $article_compétences->have_posts() ) : while( $article_compétences->have_posts() ) : $article_compétences->the_post();?>
                            <div class="col-12 col-sm-6 col-md-4">
                        <div class="competences_zone_titre ">
                            <h3 class="titre_h3 "> <?php echo $article_compétences->post->post_title ?></h3>
                        <img class="competences_image_custom" src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_code.jpg"?>" alt="image du pseudo code">
                        </div>
                        <div class="competence_liste">
                            <ul>
                            <?php echo $article_compétences->post->post_content ?>
                            </ul>
                        </div> 
                    </div>
                    <?php endwhile; endif; ?>
                
                    <!--<div class="col-6 col-md-4">
                        <div class="competences_zone_titre ">
                            <h3 class="titre_h3 ">Algoritme</h3>
                        <img class="competences_image_custom" src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_code.jpg"?>" alt="image du pseudo code">
                        </div>
                        <div class="competence_liste">
                            <ul>
                                <li>Instruction en pseudo-code</li>
                                <li> boucle conditionnelles</li>
                                <li>boucle itératives</li>
                                <li>tableaux</li>
                                <li>procédures et fonctions</li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="competences_zone_titre ">
                            <h3 class="titre_h3">Html et css</h3>
                            <img class="competences_image_custom" src="<?php echo bloginfo('template_directory')."/images/images_de_base/logo html css.png"?>" alt="image du pseudo code">
                            <img class="competences_image_custom" src="<?php echo bloginfo('template_directory')."/images/images_de_base/icones_css.png"?>" alt="image du pseudo code">
                        </div>
                        <div class="competence_liste ">
                            <ul>
                                <li>balise html</li>
                                <li>Navigation</li>
                                <li>feuilles de style css</li>
                                <li>formulaires</li>
                                <li>responsive desingn</li>
                                <li> Framework Bootstrap</li>
                                <li>Maquetage et design</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 col-md-0 d-md-none"></div>
                    <div class="col-6 col-md-4 ">
                        <div class="competences_zone_titre">
                            <h3 class="titre_h3">JavaScript</h3>
                            <img class="competences_image_custom" src="<?php echo bloginfo('template_directory')."/images/images_de_base/icones_js.png"?>" alt="image du pseudo code"> 
                        </div>
                        <ul>
                            <li>afficher dans le dom avec javascript</li>
                            <li>récupérer des données du dom et savoir les analyser</li>
                            <li>manipulation des formulaires</li>
                            <li>Contrôle de la saisie utilisateur</li>
                        </ul>
                    </div>
                    <div class="col-3 d-md-none"></div>
                </div>
            </div>-->    
        </section>
        



        <section class="project main_section"> 
            <?php // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                    $categorieProject = array(
                        "category_name" => "Projects", 
                        "order" => "ASC"
                    );

                    // 2. On exécute la WP Query
                    $article_project = new WP_Query( $categorieProject ); 
                        // var_dump($article_project) ; ?>
                         <?php //var_dump($article_project->query); ?>
                        <?php // echo $article_project->query->category_name ?> <!-- Pourquoi cette ecriture ne marche pas ???-->
                        <?php //echo $article_project->query["category_name"] ; ?>
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-0"></div>
                    <div class="col-6  ">
                        <h2 class=" titre_h2 p-4"> <?php echo $article_project->query["category_name"]."_" ; ?></h2>
                    </div>
                    <div class="col-3 col-md-0"></div>
                </div>
                <div class="row">
                    <?php
                    //for ($i=1; $i<50; $i++) {
                        // $nom_project = "Project-$i";
                        // $post_project = get_page_by_title($nom_project,'','post');
                    ?>
                        
                                
                    <?php 
                    //if ( $post_project == null){
                    //}else{?>
                        <!--<div class="col-6 col-md-4">
                            <div class="card card-custom"> 
                                <?php// $présence_image = get_post_thumbnail_id($post_project->ID);?>
                                <?php //if ($présence_image == 0 ){?> 
                                    <img src="<?php //echo bloginfo('template_directory')."/images/image_project_de_base.jpeg"?>" >
                                <?php// } else { 
                                    // $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_project->ID));?>
                                    <img src="<?php // echo $image[0] ?>" >
                                <?php // } ?>
                                <?php /*if( (strpos($image[0],".png") == true) || (strpos($image[0],".jpg") == true) ){*/?>
                                <?php //} ?>
                                
                                <?php //if ( $post_project->post_excerpt == ""){?>
                                    <p class="d-flex justify-content-center"><?php //$messageDefault = "[Veuillez renseigner un extrait de l'article]";?>
                                        <?php //echo $messageDefault;
                                    //}?>
                                <p><?php// echo $post_project->post_excerpt ?></p>
                                
                                <?php  //if ($post_project->post_content ==""){ ?>
                                    <a onclick="" class="btn  btn_perso red mt-3">L'article est vide</a>
                                <?php //}else{?>
                                <a href="<?php // echo $post_project->guid ?>" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a href="https://github.com/Floconi/biographie_victor_hugo"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                                <?php //} ?>  
                            </div>
                        </div>-->
                    <?php //} ?>
                            
                   

                     <?php if( $article_project->have_posts() ) : while( $article_project->have_posts() ) : $article_project->the_post();?>
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card card-custom"> 
                                <?php $présence_image = get_post_thumbnail_id($article_project->ID);?>
                                <?php if ($présence_image == 0 ){?> 
                                    <img src="<?php echo bloginfo('template_directory')."/images/image_project_de_base.jpeg"?>" >
                                <?php } else { 
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($article_project->ID));?>
                                    <img src="<?php echo $image[0] ?>" >
                                    <?php /*if( (strpos($image[0],".png") == true) || (strpos($image[0],".jpg") == true) ){*/?>
                                <?php } ?>
                                <h5><?php echo  $article_project->post->post_title ?></h5>
                                <?php if ( $article_project->post->post_excerpt == ""){?>
                                    <p class="d-flex justify-content-center"><?php $messageDefault = "[Veuillez renseigner un extrait de l'article]";?></p>
                                    <?php echo $messageDefault;
                                }?>
                                <p><?php echo $article_project->post->post_excerpt ?></p>
                                            
                                <?php  if ($article_project->post->post_content ==""){ ?>
                                    <a onclick="" class="btn  btn_perso red mt-3">L'article est vide</a>
                                <?php }else{?>
                                    <a href="<?php echo $article_project->post->guid ?>" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                    <?php $lienGit = $article_project->post->post_title;
                                    $lienGit = str_replace(" ","-",$lienGit);
                                    $lienGit = str_replace(":","",$lienGit);
                                    $lienGit = str_replace("--","-",$lienGit);?>
                                    <a href="https://github.com/Floconi/<?php echo $lienGit ?>" target="_blank" rel="noreferrer"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                                <?php } ?>  
                            </div>
                        </div>        
                    <?php  endwhile; endif; ?> 
                    <?php /**
                     * * J'ai volontairement laisser le contenu si jamais je devais m'en reservir
                     */ ?>
                    <!-- <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php // echo bloginfo('template_directory')."/images/images_de_base/image_carte_memory.jpg"?>" class="card-img-top image-carte-custom" alt="image memory">
                            <div class="card-body">
                                <h5 class="card-title">Project memory</h5>
                                <p class="card-text">faire un jeu de memory où  le but est de trouver toutes les paires</p>
                                <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/image_convertiseur.png"?>" class="card-img-top" alt="image convertiseur">
                            <div class="card-body">
                                <h5 class="card-title">Project convertisseur</h5>
                                <p class="card-text">Programme qui converti  une somme d'euros en franc ou inversement</p>
                                <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_carte_morpion.png"?>" class="card-img-top" alt="image morpion">
                            <div class="card-body">
                                <h5 class="card-title">Project morpion</h5>
                                <p class="card-text">Le but du jeu  est d'aligner 3 symbole dans n'importe quel sens</p>
                                <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_carte_style_.png"?>" class="card-img-top" alt="image style guide">
                            <div class="card-body">
                                <h5 class="card-title">style sous figma</h5>
                                <p class="card-text">Un style guide d'un cv pour une futur intégration</p>
                                <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a onclick="alertdev()" ><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_couverture_biographie.png"?>" class="card-img-top" alt="image one page">
                            <div class="card-body">
                                <h5 class="card-title">One Page Biographie</h5>
                                <p class="card-text">Création d'une biographie de l'auteur Victor Hugo</p>
                                <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a href="https://github.com/Floconi/biographie_victor_hugo/tree/dev" target="_blank" rel="no-referrer"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_card_scratch.png"?>" class="card-img-top" alt="image Scratch">
                            <div class="card-body">
                                <h5 class="card-title">Projet Scratch</h5>
                                <p class="card-text">Petite histoire de Noël sous scratch ( stop motion)</p>
                                <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                                <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>


        <!--<section class="project main_section">
            <div class="container">
                <div class="row">
                    <div class="col-3 col-md-0"></div>
                    <div class="col-6  ">
                        <h2 class=" titre_h2 p-4">Projects_</h2>
                    </div>
                    <div class="col-3 col-md-0"></div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_carte_memory.jpg"?>" class="card-img-top image-carte-custom" alt="image memory">
                            <div class="card-body">
                            <h5 class="card-title">Project memory</h5>
                            <p class="card-text">faire un jeu de memory où  le but est de trouver toutes les paires</p>
                            <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                            <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/image_convertiseur.png"?>" class="card-img-top" alt="image convertiseur">
                            <div class="card-body">
                            <h5 class="card-title">Project convertisseur</h5>
                            <p class="card-text">Programme qui converti  une somme d'euros en franc ou inversement</p>
                            <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                            <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_carte_morpion.png"?>" class="card-img-top" alt="image morpion">
                            <div class="card-body">
                            <h5 class="card-title">Project morpion</h5>
                            <p class="card-text">Le but du jeu  est d'aligner 3 symbole dans n'importe quel sens</p>
                            <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                            <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_carte_style_.png"?>" class="card-img-top" alt="image style guide">
                            <div class="card-body">
                            <h5 class="card-title">style sous figma</h5>
                            <p class="card-text">Un style guide d'un cv pour une futur intégration</p>
                            <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                            <a onclick="alertdev()" ><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_couverture_biographie.png"?>" class="card-img-top" alt="image one page">
                            <div class="card-body">
                            <h5 class="card-title">One Page Biographie</h5>
                            <p class="card-text">Création d'une biographie de l'auteur Victor Hugo</p>
                            <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                            <a href="https://github.com/Floconi/biographie_victor_hugo/tree/dev" target="_blank" rel="no-referrer"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="card card-custom">
                            <img src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_card_scratch.png"?>" class="card-img-top" alt="image Scratch">
                            <div class="card-body">
                            <h5 class="card-title">Projet Scratch</h5>
                            <p class="card-text">Petite histoire de Noël sous scratch ( stop motion)</p>
                            <a onclick="alertdev()" class="btn btn-primary btn_perso mt-3">Découvrir le projet</a>
                            <a onclick="alertdev()"><i class="bi bi-github d-flex justify-content-end pt-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        
        <section class="exp_pro_et_hobies d-flex flex-column flex-md-row main_section align justify-content-center align-content-center" >
            <section class="exp_pro main_section">
                <div class="container">
                        <?php $categorie_exp_pro = array(
                                'category_name' => 'Experiences_pro', 
                            ); 
                            $Description_exp_pro = new WP_Query( $categorie_exp_pro );?>
                    <div class="row">
                        <div class="col-12 col-md-12 ">
                            <h2 class="titre_h2 p-4"><?php echo $Description_exp_pro->post->post_title ?></h2>
                        </div>
                    </div>
                    <div class="row row-custom">
                        <div class="col-12 col-md-12 d-block exp_pro__content ">
                            <?php/** 
                             * $ex_pro = get_page_by_title('Mes expériences professionnelles','','post');
                             * $ex_pro-post_content */?>
                             
                            <?php echo $Description_exp_pro->post->post_content?>
                            <!--<p class="exp_pro__intituler">Stage de découverte de conseiller informatique </p>
                            <ul>
                                <li class="rouge">Juin 2023 Pôle numérique Gourdon </li>
                                <li>Accueille des clients, les conseiller, répondre à leur interrogation concernant des problèmes liés à l'informatique. </li>
                            </ul>
                            <p class="exp_pro__intituler">Stage informatique </p>
                            <ul>
                                <li class="rouge">Juin 2023 Mission Locale Cahors </li>
                                <li>Étude statistique sur les jeunes en contrat engagement jeune. Utilisation de python et power bi pour la visualisation. </li>
                            </ul>
                            <p class="exp_pro__intituler">Agent de Propreté </p>
                            <ul>
                                <li class="rouge"> De septembre 2021 à mai 2022 OPS </li>
                                <li>La roche sur Yon Ménage dans des chambres d'hôtel (Literie, nettoyage salle de bain...)</li>
                            </ul>
                            <p class="exp_pro__intituler">Agent de collectivité (saisonier) </p>
                            <ul>
                                <li class="rouge">De juillet 2018 à août 2021 </li>
                                <li>Comité d'entreprise Sncf Centres de vacances pour enfants (Samoëns, Argentière, Belle-lle, Nevers). Service, ménage, blanchisserie et aide cuisine.</li>
                            </ul>-->
                            <img class="image_fin_carte" src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_travail.jpg"?>" alt="image de travail">
                        </div>

                    </div>
                </div>
                
            </section>

            <section class="hobies main_section ">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 titre_categories">
                            <h2 class="titre_h2 p-4">Mes Centres <br>d'interets_</h2>
                        </div>
                    </div>
                    <div class="row row-custom">
                        <div class="col-12 col-md-12  hobies__content d-flex align-items-center flex-column justify-content-center">
                            <?php/**
                             *  $centreinteret = get_page_by_title('Centres d\'intérêt','','post'); 
                             * echo $centreinteret-post_content?
                             * */ ?> 
                             <?php $categorie_hobies = array(
                                'category_name' => 'Centre d\'intérêt', 
                            ); 
                            $Description_hobies = new WP_Query( $categorie_hobies );?>
                            <?php echo $Description_hobies->post->post_content?>
                            <!--<p class="hobies__intituler">Jeux de logique </p>
                            <ul>
                                <li>Jeu d'échec à titre personnel </li>
                            </ul>
                            <p class="hobies__intituler">Sport</p>
                            <ul>
                                <li>Badminton</li>
                                <li>course d'orientation</li>
                                <li>Roller en club pendant plusieurs années</li>
                            </ul>
                            <p class="hobies__intituler">Lecture</p>
                            <ul>
                                <li>Développement personnel</li>
                            </ul>
                            <p class="hobies__intituler">Nature </p>
                            <ul>
                                <li>Randonnée</li>
                            </ul>-->
                            <img class="image_fin_carte " src="<?php echo bloginfo('template_directory')."/images/images_de_base/image_course_d_orientation.jpg"?>" alt="image de travail">
                        </div>

                    </div>
                </div>
                
            </section>
        </section>
        
    </main>
   

    <?php get_footer() ?>
   