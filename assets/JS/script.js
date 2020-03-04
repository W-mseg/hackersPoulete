//Bouton Voir plus
let name = document.getElementById('name');
let lastname = document.getElementById('lastname');
let email = document.getElementById('email');
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

immediateform(name);
immediateform(lastname);
immediateform(email);
function immediateform(element) {
    if (element.value == "")
    {
        element.classList.add('errorform');
    }
    else if(element.value == null){
        element.classList.remove('errorform');
    }
    else{
        element.classList.remove('errorform');
    }
}


