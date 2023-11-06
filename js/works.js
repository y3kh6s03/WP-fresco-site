const targetEl = gsap.utils.toArray(".contents__header");
console.log(targetEl)
gsap.registerPlugin(ScrollTrigger);
targetEl.forEach((el)=>{

    gsap.set(el, {
        scrollTrigger: {
            trigger: el,
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