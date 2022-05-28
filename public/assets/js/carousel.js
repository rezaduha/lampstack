var carousel = new Swiper(".featured-topic__carousel", {
  slidesPerView: 1.4,
  spaceBetween: 42,
  loop: true,
  speed: 800,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 86,
    },
  },
  navigation: {
    nextEl: ".slick-next",
    prevEl: ".slick-prev",
  },
});
