
/* Menu en téléphone */

var icone_menu = document.querySelector(".icone_menu")
var menu_cacher = document.querySelector(".menu_cacher")
var on_menu = false
icone_menu.addEventListener(
    'click',
    event => affichermenu()
);


function affichermenu(){
    var icone_menu = document.querySelector(".icone_menu")
var menu_cacher = document.querySelector(".menu_cacher")
    if (on_menu == true){
        menu_cacher.classList.replace("d-block","d-none") 
        on_menu = false
    }else{
        menu_cacher.classList.replace("d-none","d-block")
        menu_cacher.classList.add("menu_deroulant")
        menu_cacher.classList.add("flex-column")
        on_menu = true

    }
}

/**
 **Fonction indiquant les mise à jour
 */
function alertdev(){
    alert("Cette fonctionalité sera disponible dans une version futur :)")

}