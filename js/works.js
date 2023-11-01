const targetEl = gsap.utils.toArray(".contents__header");
gsap.registerPlugin(ScrollTrigger);
targetEl.forEach((el)=>{

    gsap.set(targetEl, {
        scrollTrigger: {
            trigger: targetEl,
            start: "top 90%",
            toggleClass: "active",
            once: true
        }
    })

})

const imageEl = gsap.utils.toArray(".contents__image");
imageEl.forEach((el)=>{
    gsap.to(el,{
        x: 30,
        scrollTrigger:{
            trigger: el,
            start: "top bottom",
            end: "bottom top",
            scrub: true
        }
    })
})