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


//////////////////////////////
// content title animation
//////////////////////////////

gsap.registerPlugin(ScrollTrigger);
const titleEl = gsap.utils.toArray(".content__title__container")

titleEl.forEach((el) => {

    gsap.set(el, {
        scrollTrigger: {
            trigger: el,
            start: "top -10%",
            toggleClass: "active",
            // toggleActions: "play none none none",
            once: true,
            markers: true
        }
    })
})





















