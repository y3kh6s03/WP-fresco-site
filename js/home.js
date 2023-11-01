//////////////////////////////
// hero title animation
//////////////////////////////
window.addEventListener('DOMContentLoaded', function () {
    const heroTitle = document.querySelector(".hero__title");
    heroTitle.classList.add("loaded");

    const navItems = document.querySelectorAll(".hero__nav__ul__li");
    gsap.to(navItems, {
        x: 0,
        opacity: 1,
        delay: 1.5,
        duration: .3,
        ease: "expo.out",
        stagger: .1
    })
});


//////////////////////////////
// hero section animation
//////////////////////////////
const hero = document.querySelector(".hero");
const heroContainer = document.querySelector(".hero__container");
const aboutContainer = document.querySelector(".about");
gsap.timeline({
    scrollTrigger: {
        trigger: hero,
        start: "top top",
        end: "bottom 30%",
        scrub: true,
        pin: true
    }
})
    .to(heroContainer, { y: "-100%" })
    .to(hero, {
        opacity: 0,
    }, "-=.4")


//////////////////////////////
// about scrub animation
//////////////////////////////

const imgEl1 = document.querySelector(".about__image__container__img1")
const imgEl2 = document.querySelector(".about__image__container__img2")
gsap.registerPlugin(ScrollTrigger);
gsap.to(imgEl1, {
    y: 30,
    scrollTrigger: {
        trigger: imgEl1,
        start: "top bottom",
        scrub: true,
    }
});
gsap.to(imgEl2, {
    x: 40,
    scrollTrigger: {
        trigger: imgEl1,
        start: "top bottom",
        scrub: true,
    }
})



//////////////////////////////
// future animation
//////////////////////////////

const futureEl = document.querySelector(".future__description__wrapper");
const futureImg = document.querySelector("#future__img");
const tl = gsap.timeline({
    scrollTrigger: {
        trigger: futureEl,
        start: "top bottom",
        toggleActions: "play none none reset"
    }
})

tl.to(futureEl, {
    clipPath: "polygon(-20% 0, 120% 0, 120% 100%, 0 100%)",
    duration: 1.5,
    delay: .5,
    ease: "expo",
}).to(futureImg, {
    scale: 1.5,
    scrollTrigger: {
        scrub: true
    }
})


//////////////////////////////
// works swiper animation
//////////////////////////////

const swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 5000,
    slidesPerView: 1,

    breakpoints: {
        600: {
            slidesPerView: 1.5
        },
        960: {
            slidesPerView: 1.8
        }
    }
});


//////////////////////////////
// Recruit animation
//////////////////////////////

const recruitImg = document.querySelector(".recruit__image");

gsap.to(recruitImg, {
    clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
    duration: 1.2,
    ease: "expo",
    scrollTrigger: {
        trigger: recruitImg,
        start: "top 90%",
        toggleActions: "play none none reset",
    }
})