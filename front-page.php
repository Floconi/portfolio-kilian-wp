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


    <main class = "main">
        <section class=" main_section about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-6">
                        <h2 class="p-4 titre_h2">Qui suis je ?_</h2>
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4  d-flex justify-content-center align-items-center">
                        <img src="images/Avatar_kilian_S.png">
                    </div>
                    <div class="d-none d-md-block col-md-2"></div>
                    <div class="col-8 col-md-4">
                        <div class="description_generale d-flex flex-column">
                            <p>
                                Bonjour, Je suis Kilian montagnard dans l'ame, j' adore faire de la randonnée. 
                                La nature est ma passion, je m'y retrouve et me resources. Souriant et bienvelllant, je suis toujours prêt pour de nouvelle rencontre. 
                                J'ai réaliser un titre développeur web et web mobile. Je serais ravie de vous aider à réaliser vos projects. 
                                N'hésiter pas à consulter  mon parcours et à me dire ce que vous penser de ma page.
                            </p>
                            <button class="btn btn-primary btn_perso mt-3" onclick ="self.location.href='a-propos.html'"> Mon parcours</button>
                        </div> 
                        <div class="d-none d-md-block col-md-2"></div>   
                    </div>
                </div>
                
                        
                    
                
            </div>
        </section>
        <section class=" citation main_section">
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
                                <img src="images/Citation_1-removebg-preview.png" class="d-block w-100" alt="citation_1">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Citation_2-removebg-preview.png" class="d-block w-100" alt="citation_2">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Citation_3-removebg-preview.png" class="d-block w-100" alt="citation_3">
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
                            <img src="images/images_de_base/image_carte_memory.jpg" class="card-img-top image-carte-custom" alt="image memory">
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
                            <img src="images/image_convertiseur.png" class="card-img-top" alt="image convertiseur">
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
                            <img src="images/images_de_base/image_carte_morpion.png" class="card-img-top" alt="image morpion">
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
                            <img src="images/images_de_base/image_carte_style_.png" class="card-img-top" alt="image style guide">
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
                            <img src="images/images_de_base/image_couverture_biographie.png" class="card-img-top" alt="image one page">
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
                            <img src="images/images_de_base/image_card_scratch.png" class="card-img-top" alt="image Scratch">
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
                           <a href="document/CV_Kilian_Sochard.pdf" target="_blank" rel="noreferrer"><button class="btn btn-primary btn_perso align-items-center" > <i class="bi bi-download" ></i> Télécharger mon CV</button></a>
                        </div>
                        <div class="col-3 d-md-none">
                        </div>
                    </div>
                    <div class="row d-md-flex justify-content-end">
                        <div class="col-3 d-md-none">
                        </div>
                        <div class="col-6 d-flex justify-content-center">
                            <button class="btn btn-primary btn_perso align-items-center" onclick="self.location.href='contact.html'"> <i class="bi bi-envelope-at"></i> Me contacter</button>
                        </div>
                        <div class="col-3 d-md-none">
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

    <?php get_footer() ?>