const philoEl = document.querySelector(".philosophy__headline")
gsap.registerPlugin(ScrollTrigger);
gsap.to(philoEl, {
    opacity: 1,
    x: 0,
    ease: "expo",
    duration: 5,
    scrollTrigger: {
        trigger: philoEl,
        start: "top bottom",
        toggleActions: "play none none reset"
    }
})

const textEl = document.querySelectorAll(".aboutContents__description");
textEl.forEach((el) => {
    gsap.to(el, {
        x: 0,
        opacity: 1,
        duration: 3,
        ease: "expo",
        scrollTrigger: {
            trigger: el,
            start: "top 90%",
        }
    })
})

const msgImage = document.querySelector(".message__inner__image");
gsap.to(msgImage,{
    clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
    duration: 2,
    ease: "expo",
    scrollTrigger:{
        trigger: msgImage,
        start: "top 90%"
    }
})