//Hauteur du jumbotron
let hauteurJumbotron = $('.jumbotron').outerHeight();
//Fonction appelée au scroll de la souris
function parallax()
{
//On calcule la distance de scroll, puis on réduit la taille du container du jumbotron en fonction de cette distance.
let scrolled = $(window).scrollTop();
$('.fond').css('height', (hauterJumbotron-scrolled) + 'px');
}
//Ajout de la fonction à l'événement scroll
$(window).scroll(function(e){
parallax();
});

//Bouton Voir plus

function seeMore() {
    let more = document.getElementById("more");
    let btn = document.getElementById("myBtn");

    if (btn.innerHTML == "Voir moins") {
    btn.innerHTML = "Voir plus";
    more.style.display = "none";
    } else {
    btn.innerHTML = "Voir moins";
    more.style.display = "inline";
    }
};

