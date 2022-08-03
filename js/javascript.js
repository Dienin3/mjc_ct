var hamburger = document.querySelector(".hamburger");
var navMenu = document.querySelector(".nav-menu");
var navLink = document.querySelectorAll(".nav-link");

//adds active tag to open menu
function mobileMenu() {
    "use strict";
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

//removes active tag to close menu
function closeMenu() {
    "use strict";
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
navLink.forEach(n => n.addEventListener("click", closeMenu));
hamburger.addEventListener("click", mobileMenu);

