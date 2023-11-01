const headlineEl = document.querySelector(".section__headline");
gsap.registerPlugin(ScrollTrigger);
gsap.to(headlineEl, {
    x: 0,
    opacity: 1,
    clipPath: "polygon(0 0,100% 0,100% 100%,0 100%",
    duration: 5,
    ease: "expo",
    scrollTrigger: {
        trigger: headlineEl,
        start: "top 90%"
    }
})

const contentsHeadlineEl = document.querySelectorAll(".contents__enHeadline");
console.log(contentsHeadlineEl)
contentsHeadlineEl.forEach((el, index) => {
    ScrollTrigger.create({
        trigger: el,
        id: index + 1,
        start: "top 90%",
        once: true,
        toggleClass: { targets: el, className: "active" }
    })
})

const jaHeadlineEl = document.querySelectorAll("#jaHeadline__h3");
jaHeadlineEl.forEach((el) => {
    gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 2.5,
        scrollTrigger: {
            trigger: el,
            start: "top 90%",
            once: true
        }
    })
})

const contentImages = document.querySelectorAll("#imageTarget");
contentImages.forEach((el) => {
    gsap.to(el, {
        y: 50,
        scrollTrigger: {
            trigger: el,
            start: "top 90%",
            end: "top 20%",
            scrub: true
        }
    })
})