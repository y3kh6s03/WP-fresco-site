//////////////////////////////
// nav icon animation
//////////////////////////////
const navIcon = document.querySelector('.header__icon');
const navMenu = document.querySelector('.header__nav');
const navBackground = document.querySelector('.header__bcc');

const toggleOnClick = ()=>{
    navIcon.classList.toggle("onClick");
    navMenu.classList.toggle("onClick");
    navBackground.classList.toggle("onClick");
}
navIcon.addEventListener("click",toggleOnClick)
navMenu.addEventListener("click",toggleOnClick)
navBackground.addEventListener("click",toggleOnClick)



//////////////////////////////
// hero title animation
//////////////////////////////
window.addEventListener('load', function() {
    const heroTitle = document.querySelector(".hero__title");
    heroTitle.classList.add("loaded");

    const navItems = document.querySelectorAll(".hero__nav__ul__li");
    gsap.to(navItems,{
        x: 0,
        opacity: 1,
        delay: 1.8,
        duration: .3,
        ease: "expo.out",
        stagger: .1
    })
});



//////////////////////////////
// works swiper Animation
//////////////////////////////

const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 5000,
    slidesPerView: 1,

    breakpoints:{
        600: {
            slidesPerView: 1.5
        },
        960: {
            slidesPerView: 1.8
        }
    }
    });
