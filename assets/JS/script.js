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

