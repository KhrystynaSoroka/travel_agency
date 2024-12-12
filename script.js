document.addEventListener("DOMContentLoaded", () => {
    console.log("Сайт завантажено!");
});

const burgerMenu = document.getElementById('burgerMenu');
const navLinks = document.getElementById('navLinks');

burgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('open');
});




