function seeMore() {
    let dots = document.getElementById("dots");
    let more = document.getElementById("more");
    let btn = document.getElementById("myBtn");

    if (dots.style.display === "none") {
    dots.style.display = "inline";
    btn.innerHTML = "Voir plus";
    more.style.display = "none";
    } else {
    dots.style.display = "none";
    btn.innerHTML = "Voir moins";
    more.style.display = "inline-block";
    }
} 