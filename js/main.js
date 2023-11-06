//////////////////////////////
// nav icon animation
//////////////////////////////
const navIcon = document.querySelector('.header__icon');
const navMenu = document.querySelector('.header__nav');
const navBackground = document.querySelector('.header__bcc');

const toggleOnClick = () => {
    navIcon.classList.toggle("onClick");
    navMenu.classList.toggle("onClick");
    navBackground.classList.toggle("onClick");
}
navIcon.addEventListener("click", toggleOnClick)
navMenu.addEventListener("click", toggleOnClick)
navBackground.addEventListener("click", toggleOnClick)






















