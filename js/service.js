const headlineEls = gsap.utils.toArray(".contents__inner");
const imageEls = gsap.utils.toArray(".contents__image");

gsap.registerPlugin(ScrollTrigger);

const scrollToggleClass = (array) => {
    array.forEach((el) => {
        gsap.set(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 90%",
                toggleClass: "active",
                once: true
            }
        })
    })
}

scrollToggleClass(headlineEls);
scrollToggleClass(imageEls);

imageEls.forEach((el)=>{
    gsap.to(el,{
        y: 30,
        scrollTrigger:{
            trigger: el,
            start: "top 90%",
            end: "top 20%",
            scrub: true
        }
    })
})