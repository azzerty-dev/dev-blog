let prevScrollPos = window.pageYOffset;

let SELECTOR_HEADER = document.querySelector("header");

window.onscroll = function() {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        SELECTOR_HEADER.style.opacity = "1"
    } else {
        SELECTOR_HEADER.style.opacity = "0"
    }
    prevScrollPos = currentScrollPos;
}
