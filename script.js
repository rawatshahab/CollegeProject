// Variables
let menu = document.querySelector(".menu-icon");
let navbar = document.querySelector(".menu");

// Menu Toggle
menu.onclick = () => {
  navbar.classList.toggle("active");
  menu.classList.toggle("move");
  bell.classList.remove("active");
};

// Notification toggle
let bell = document.querySelector(".notification");
document.querySelector("#bell-icon").onclick = () => {
  bell.classList.toggle("active");
};

// Swipe Function
var swiper = new Swiper(".trending-content", {
  slidesPerView: 1,
  spaceBetween: 10,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
 
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
      slidesPerView: 3,
      spaceBetween: 15,
    },
    1068: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
});


