//////////////////////////////
// content title animation
//////////////////////////////


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

