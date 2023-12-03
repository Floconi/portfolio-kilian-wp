    <?php get_header() ?>
    <p class="icone_menu">
    <main class="main" style="background-image: url(<?php echo bloginfo('template_directory')."/images/images_de_base/fond_main_.png)"?>">
        <section class="formulaire main_section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 ">
                        <h2 class="p-4 titre_h2">Me contacter_</h2>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="row">
                    <div class="col-12  d-flex justify-content-center">
                        <p>Vous pouvez me contacter via ce formulaire. 
                        Merci de renseigner dans votre message tous les détails possible pour répondre au mieux à votre demande.</p>
                    </div>
                </div>

                <!-- /**
                *!Formulaire fait par l'extension sur contactform7 (copie coller car plus de fonctionalité de verification dans mon js que cellui de l'extansion)
                *! Je l'utilise pour l'envoie du mail après verification js
                */ -->
                
                    <!--<div class="row  d-flex justify-content-center zone_formulaire" >
                        <div class="col-12" id="formulaire_contenu">
                            <div class="row " id="zone_nom_et_prenom">
                                <div class="col-2 col-sm-1 col-md-1"></div>
                                <div class="col-8 col-sm-5 col-md-5" >
                                    <div class="mb-3">
                                        <label for="champ_nom" class="form-label label_etat_initial-custom" id="label_nom">Nom_ *</label>
                                        <input type="text" name="nom" class="form-control input_etat_initial-custom" id="champ_nom" aria-describedby="emailHelp" placeholder="" onkeyup="ecriture_nomb_caractère('nom')"  onfocus="afficher_nomb_caractere('nom'); gestion_label_click('nom')"  onblur="ecriture_nomb_caractère_minimum('nom');  elever_nomb_caractere('nom'); gestion_label_onchange('nom')" required>
                                        <div class="nomb_carac nomb_carac_minimum_nom"></div>
                                        <div class="d-flex justify-content-end nomb_carac_nom"></div>
                                        <div class="error nom-error"></div>
                                        
                                    </div>
                                </div>
                                <div class="col-2 d-sm-none col-md-0"></div>
                                <div class="col-2 d-sm-none col-md-0"></div>
                                <div class="col-8 col-sm-5 col-md-5">
                                    <div class="mb-3 ">
                                        <label for="champ_prenom" class="form-label label_etat_initial-custom" id="label_prenom">Prenom_ *</label>
                                        <input type="text" name="prenom" class="form-control input_etat_initial-custom" id="champ_prenom" aria-describedby="emailHelp" placeholder="" onkeyup="ecriture_nomb_caractère('prenom')"  onfocus="afficher_nomb_caractere('prenom'); gestion_label_click('prenom')"  onblur="ecriture_nomb_caractère_minimum('prenom'); elever_nomb_caractere('prenom'); gestion_label_onchange('prenom')"  required>
                                        <div class="nomb_carac nomb_carac_minimum_prenom"></div>
                                        <div class="d-flex justify-content-end nomb_carac_prenom"></div>
                                        <div class="error prenom-error"></div>
                                        
                                    </div>
                                </div>
                                <div class="col-2 col-sm-1 "></div>
                            </div>
                            <div class="row" id="zone_email_et_telephone">
                                <div class="col-2 col-sm-1 col-md-1"></div>
                                <div class="col-8 col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label for="champ_email" class="form-label label_etat_initial-custom" id="label_email">e-mail_ *</label>
                                        <input type="email" name ="email" class="form-control input_etat_initial-custom" id="champ_email" aria-describedby="emailHelp" placeholder="" onkeyup="ecriture_nomb_caractère('email')"  onfocus="afficher_nomb_caractere('email'); gestion_label_click('email')" onblur="ecriture_nomb_caractère_minimum('email'); elever_nomb_caractere('email'); gestion_label_onchange('email')"  required>
                                        <div class="nomb_carac nomb_carac_minimum_email"></div>
                                        <div class="d-flex justify-content-end nomb_carac_email"></div>
                                        <div class="error email-error"></div>
                                    </div>
                                </div>
                                <div class="col-2 d-sm-none col-md-0"></div>
                                <div class="col-2 d-sm-none col-md-0"></div>
                                <div class="col-8 col-sm-4 col-md-5">
                                    <div class="mb-3">
                                        <label for="champ_telephone" class="form-label label_etat_initial-custom" id="label_telephone">telephone_</label>
                                        <input type="tel" name="telephone" class="form-control input_etat_initial-custom" id="champ_telephone" aria-describedby="emailHelp" placeholder="" onkeyup="ecriture_nomb_caractère('telephone')" onfocus="afficher_nomb_caractere('telephone');gestion_label_click('telephone')" onblur="ecriture_nomb_caractère_minimum('telephone'); elever_nomb_caractere('telephone'); gestion_label_onchange('telephone')" >
                                        <div class="nomb_carac nomb_carac_minimum_telephone"></div>
                                        <div class="d-flex justify-content-end nomb_carac_telephone"></div>
                                        <div class="error tel-error"></div>
                                        
                                    </div>
                                </div>
                                <div class="col-2 col-sm-1"></div>
                            </div>
                            <div class="row">
                                <div class="d-none d-md-block col-md-1"></div>
                                <div class="col-12 col-sm-8 col-md-7 mb-5 mt-5">
                                        <div id="zone_message">
                                            <label for="champ_message" class="form-label label_etat_initial-custom" id="label_message">Message_ *</label>
                                            <textarea class="form-control input_etat_initial-custom" id="champ_message" rows="10" placeholder="" onkeyup="ecriture_nomb_caractère('message')" onfocus="afficher_nomb_caractere('message'); gestion_label_click('message')" onblur="ecriture_nomb_caractère_minimum('message'); elever_nomb_caractere('message'); gestion_label_onchange('message')"></textarea>
                                            <div class="nomb_carac nomb_carac_minimum_message"></div>
                                            <div class="d-flex justify-content-end nomb_carac_message"></div>
                                            <div class="error message-error"></div>
                                            
                                        
                                    
                                            <p>Les champs marqué d'un astérisque (*) sont obligatoires</p>
                                        </div>
                                    <div class="error erreur-generale"></div>
                                    <div class="btn-connect d-flex justify-content-center">
                                        <a  class="btn btn-primary m-3 btn_perso btn_form d-block" id="btn_contact" onclick="verify_information()"><i class="bi bi-caret-right-square-fill"></i> Verifier informations</a>
                                        <a   class="btn btn-primary m-3 btn_perso btn_form d-none" id="btn_modifier" onclick="modifier_formulaire()"><i class="bi bi-pencil"></i> Modifier</a>
                                        <button  class="btn btn-primary m-3 btn_perso btn_form d-none" id="btn_envoyer" onclick="envoyer()"><i class="bi bi-envelope-plus"></i> Envoyer</button> 
                                        <a   class="btn btn-primary m-3 btn_perso btn_form d-none" id="btn_nouvelle_demande" onclick="nouvelle_demande()"><i class="bi bi-plus-square"></i> Faire une nouvelle demande</a> 
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 d-flex align-items-center justify-content-center flex-column infosup mt-5 mb-5 m-md-0 mt-md-0">
                                
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
                    </div>-->   
                <?php the_content() ?>
            </div>
                
        </section>
        
    </main>
    

    

    <?php get_footer() ?>


</body>
</html>