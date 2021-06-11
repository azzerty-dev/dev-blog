require('./bootstrap');


let prevScrollPos = window.pageYOffset;
window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        document.querySelector(".header").style.opacity = "1";
    } else {
        document.querySelector(".header").style.opacity = "0";
    }
    prevScrollPos = currentScrollPos;
}
