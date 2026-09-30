// header scrolled
let nav = document.querySelector(".navbar");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 80) {
        nav.classList.add("header-scrolled");
    }
    else {
        nav.classList.remove("header-scrolled");
    }
}



let navbar = document.querySelector('.header .navbar')

document.querySelector('#menu-btn').onclick=()=> {
    navbar.classList.add('active')
}

document.querySelector('#close-navbar').onclick=()=> {
    navbar.classList.remove('active')
}





var swiper = new Swiper(".testimonialSlider", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});










