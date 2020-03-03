function seeMore() {
    let dots = document.getElementById("dots");
    let more = document.getElementById("more");
    let btn = document.getElementById("myBtn");

    if (dots.style.display === "none") {
    dots.style.display = "inline";
    btn.innerHTML = "Read more";
    more.style.display = "none";
    } else {
    dots.style.display = "none";
    btn.innerHTML = "See less";
    more.style.display = "inline";
    }
} 