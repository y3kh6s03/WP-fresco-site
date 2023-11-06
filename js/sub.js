window.addEventListener("DOMContentLoaded", () => {
    const subHeroTitle = document.querySelector(".subHero");
    subHeroTitle.classList.add("loaded");
})


//////////////////////////////
// content title animation
//////////////////////////////

gsap.registerPlugin(ScrollTrigger);
const titleEl = gsap.utils.toArray(".content__title__container")

titleEl.forEach((el) => {

    gsap.set(el, {
        scrollTrigger: {
            trigger: el,
            start: "top 90%",
            toggleClass: "active",
            // toggleActions: "play none none none",
            once: true,
        }
    })
})