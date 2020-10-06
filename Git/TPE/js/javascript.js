document.addEventListener("DOMContentLoaded", iniciar);

function iniciar(){
    "use strict";
    let menuMobile = document.querySelector(".btn_menu").addEventListener('click', toggleMenu);
    function toggleMenu() {
        document.querySelector(".botonera").classList.toggle("show");
        console.log();
    }
}
