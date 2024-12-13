document.addEventListener("DOMContentLoaded", () => {
    console.log("Сайт завантажено!");
});

const burgerMenu = document.getElementById('burgerMenu');
const navLinks = document.getElementById('navLinks');

burgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('open');
});

document.getElementById('burgerMenu').addEventListener('click', () => {
    const navLinks = document.getElementById('navLinks');
    navLinks.classList.toggle('active');
});



