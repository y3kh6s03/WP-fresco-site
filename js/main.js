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

window.addEventListener("DOMContentLoaded", () => {

    gsap.utils.toArray(".content__title__container").forEach((el) => {
        const selectEl = gsap.utils.selector(el);

        gsap.timeline({
            scrollTrigger: {
                trigger: el,
                start: "top 100%",
                toggleClass: "active",
                toggleActions: "play none none reset",
            },
        }).to(selectEl, {})
    })
})




















