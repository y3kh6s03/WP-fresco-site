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
