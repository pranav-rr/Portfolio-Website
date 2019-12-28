//Select element function
const selectElement = function (element) {
    return document.querySelector(element);
};

let menuToggler = selectElement('.menu-toggle');
let body = selectElement('body');

menuToggler.addEventListener('click', function () {
    body.classList.toggle('open');
})

const parallax = document.getElementById("pi");

window.addEventListener("scroll", function () {
    let offset = window.pageYOffset;
    parallax.style.backgroundPositionY = offset * 0.2 + "px";
})

/*window.addEventListener("scroll", function () {
    const parrallax = document.getElementById('pizza')
    let scrollPosition = window.pageYOffset;

    parallax.style.transform = translateY(+scrollPosition * .5 + "px");
})*/