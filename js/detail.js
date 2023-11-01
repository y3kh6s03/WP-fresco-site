const imageEls = gsap.utils.toArray(".contents__inner__image");
imageEls.forEach((el)=>{
    gsap.to(el,{
        x: 30,
        scrollTrigger:{
            trigger: el,
            start: "top 90%",
            end: "bottom top",
            scrub: true
        }
    })
})

const headlineEls = gsap.utils.toArray(".contents__headline");
headlineEls.forEach((el)=>{
    gsap.to(headlineEls,{
        x:0,
        opacity:1,
        duration: 2,
        ease: "expo",
        scrollTrigger:{
            trigger: el,
            start: "top 90%",
        }
    })
})
