<!--
    Page d'acceuil de mon porfolio
-->
<!-- Extension utilisé :
    - Better Comments 
    - vscode-pdf (Afficher mon cv)

    todo : Mettre tous mes projects sur gitub afin de pouvoir faire le lien
    todo : mettre en forme le carousel 
    todo : mettre une animation en js sur le titre
    todo : mettre des animations sur le site
 -->



   
    <?php get_header() ?>


    <main class = "main" style="background-image: url(<?php echo bloginfo('template_directory')."/images/images_de_base/fond_main_.png)"?>">
        <section class=" main_section about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <h2 class="p-4 titre_h2">Qui suis je ?_</h2>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-4  d-flex justify-content-center align-items-center">
                        <img src="<?php echo bloginfo('template_directory')."/images/Avatar_kilian_S.png"?>">
                    </div>
                    <div class="d-none d-md-block col-md-2"></div>
                    <div class="col-8 col-md-4">
                        <div class="description_generale d-flex flex-column">
                            <p>
                            <?php $categorieDescription_generale = array(
                                'category_name' => 'Description_générale', 
                            ); 
                            $Description_generale = new WP_Query( $categorieDescription_generale );?>
                               <?php // $descriptionAbout = get_page_by_title('Description','','post');?>
                                <?php echo $Description_generale->post->post_content?>
                                <!--Bonjour, Je suis Kilian montagnard dans l'ame, j' adore faire de la randonnée. 
                                La nature est ma passion, je m'y retrouve et me resources. Souriant et bienvelllant, je suis toujours prêt pour de nouvelle rencontre. 
                                J'ai réaliser un titre développeur web et web mobile. Je serais ravie de vous aider à réaliser vos projects. 
                                N'hésiter pas à consulter  mon parcours et à me dire ce que vous penser de ma page.-->
                            </p>
                            <a href="http://localhost/wordpress/page-a-propos/" ><button class="btn btn-primary btn_perso mt-3" > Mon parcours</button></a>
                        </div> 
                        <div class="d-none d-md-block col-md-2"></div>   
                    </div>
                </div>  
            </div>
        </section>


        <section class=" citation main_section" style="background-image: url(<?php echo bloginfo('template_directory')."/images/images_de_base/image_fond_citation.png)"?>" >
            <div class="row carousel-custom">
                <div class="col-8">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo bloginfo('template_directory')."/images/Citation_1-removebg-preview.png"?>" class="d-block w-100" alt="citation_1">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo bloginfo('template_directory')."/images/Citation_2-removebg-preview.png"?>" class="d-block w-100" alt="citation_2">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo bloginfo('template_directory')."/images/Citation_3-removebg-preview.png"?>" class="d-block w-100" alt="citation_3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div> 
        </section>
       

        <!--<section class="competences">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>compétences</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul>
                            <li>html</li>
                            <li>css</li>
                            <li>js</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul>
                            <li>boostrap</li>
                            <li>gitub</li>
                            <li>figma</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>-->

            


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
                        <h2 class=" titre_h2 p-4"> <?php echo $article_project->query["category_name"] ; ?></h2>
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


        

        <section class="contact main_section">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center">
                <div class="row">
                    <div class="col-2 d-md-none">
                    </div>
                    <div class="col-8 col-md-6 mt-3 mb-3">
                        <p>
                            Pour toute demande et interrogation
                            <br>
                            n'hésitez pas à me contacter 
                        </p>
                    </div>
                    <div class="col-2 d-md-none">
                    </div>
                </div>
                <div class="bouton_contact d-md-flex flex-md-column ">
                    <div class="row mb-3 d-md-flex justify-content-end ">
                        <div class="col-3 d-md-none">
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                           <a href="<?php echo bloginfo('template_directory')."/document/CV_Kilian_Sochard.pdf"?>" target="_blank" rel="noreferrer"><button class="btn btn-primary btn_perso align-items-center" > <i class="bi bi-download" ></i> Télécharger mon CV</button></a>
                        </div>
                        <div class="col-3 d-md-none">
                        </div>
                    </div>
                    <div class="row d-md-flex justify-content-end">
                        <div class="col-3 d-md-none">
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <a href= "http://localhost/wordpress/contact/" ><button class="btn btn-primary btn_perso align-items-center" > <i class="bi bi-envelope-at"></i> Me contacter</button></a>
                        </div>
                        <div class="col-3 d-md-none">
                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </main>

    <?php get_footer() ?>