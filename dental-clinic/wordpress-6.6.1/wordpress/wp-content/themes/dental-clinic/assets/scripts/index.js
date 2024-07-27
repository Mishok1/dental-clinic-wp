//swiper

import Swiper from '../vendor/swiper-11.1.7/package/swiper-bundle.min.mjs';

// console.log(Swiper);
console.log('helou');

const swiper = new Swiper('.swiper0', {
  slidesPerView: 1,
  loop: true,

  breakpoints: {
    1440: {
      slidesPerView: 3,
      spaceBetween: 30
    },
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


const swiper1 = new Swiper('.swiper1', {
  slidesPerView: 1,
  loop: true,
  

  pagination: {
    el: '.swiper-pagination1',
    clickable: true
  },

  navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev1',
  },
});



const swiper2 = new Swiper('.swiper2', {
  slidesPerView: 1,
  loop: true,
  speed: 5000,
  freeMode: {
    enabled: true,
    sticky: true,
  },
  autoplay: {
    delay: 3000,
  },

  breakpoints: {
    1440: {
      slidesPerView: 5,
    },

  },
});

const swiper3 = new Swiper('.swiper3', {
  slidesPerView: 1,
  loop: true,
  speed: 5000,
  freeMode: {
    enabled: true,
    sticky: true,
  },
  autoplay: {
    delay: 3000,
  },

  breakpoints: {
    1440: {
      slidesPerView: 4,
    },
  },
});


//swiper end

// source/scripts/index.js
var mobileButton = document.querySelector(".header__mobile-button");
var mobileMenu = document.querySelector(".mobile");
var headerContainer = document.querySelector(".header__container");
mobileButton.addEventListener("click", (evt) => {
  evt.preventDefault();
  mobileButton.classList.toggle("header__mobile-button--open");
  mobileMenu.classList.toggle("mobile--open");
  headerContainer.classList.toggle("header__container--open");
});
var modalButtons = document.querySelectorAll("#modal-button");
var modal = document.querySelector("#modal");
var requestWrapper = document.querySelector(".request--modal .request__wrapper");
modalButtons.forEach((button) => {
  button.addEventListener("click", (evt) => {
    evt.preventDefault();
    modal.classList.toggle("request--open");
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        modal.classList.toggle("request--open");
      }
    }, { once: true });
  });
});
modal.addEventListener("click", (e) => {
  const withinBoundaries = e.composedPath().includes(requestWrapper);
  if (!withinBoundaries) {
    modal.classList.toggle("request--open");
  }
});
var modalButtonsWhatsapp = document.querySelectorAll("#modal-button-whatsapp");
var modalWhatsapp = document.querySelector("#modal-whatsapp");
var requestWrapperWhatsapp = document.querySelector(".request--whatsapp .request__wrapper");
modalButtonsWhatsapp.forEach((button) => {
  button.addEventListener("click", (evt) => {
    evt.preventDefault();
    modalWhatsapp.classList.toggle("request--open");
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        modalWhatsapp.classList.toggle("request--open");
      }
    }, { once: true });
  });
});
modalWhatsapp.addEventListener("click", (ev) => {
  const withinBoundaries = ev.composedPath().includes(requestWrapperWhatsapp);
  if (!withinBoundaries) {
    modalWhatsapp.classList.toggle("request--open");
  }
});
var licenseModal = document.querySelector("#big-image");
var licenseImage = document.querySelectorAll("#license-image");
var bigImagePicture = document.querySelector("#big-image_picture");
if (bigImagePicture) {
  licenseImage.forEach((image) => {
    image.addEventListener("click", (evt) => {
      evt.preventDefault();
      const imageSrc = evt.target.src;
      bigImagePicture.src = imageSrc;
      licenseModal.classList.toggle("big-image--open");
      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
          licenseModal.classList.toggle("big-image--open");
        }
      }, { once: true });
    });
  });
  licenseModal.addEventListener(
    "click",
    () => {
      licenseModal.classList.toggle("big-image--open");
    }
  );
}
var questionsItem = document.querySelectorAll("#questions-item");
if (questionsItem) {
  questionsItem.forEach((item) => {
    item.addEventListener("click", () => {
      const currentAnswer = item.querySelector("#questions-answer");
      item.classList.toggle("questions__item--open");
      currentAnswer.classList.toggle("questions__answer--open");
    });
  });
}
