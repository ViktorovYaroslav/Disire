"use strict";

//aside menu
const body = document.body;

const headerBtn = document.querySelector('.header__btn');
const asideBtn = document.querySelector('.aside__bar-btn');
const asideBar = document.querySelector('.aside__bar');
const asideBarMain = document.querySelector('.aside__bar-main');

headerBtn.addEventListener('click', function () {
   asideBar.classList.add('_active');
   body.classList.add('_lock');
});

asideBtn.addEventListener('click', function () {
   asideBar.classList.remove('_active');
   body.classList.remove('_lock');
});

//slick slider - main page

$('.slider__box').slick({
   dots: true,
   arrows: false,
   fade: true,
   // autoplay: true,
   // autoplaySpeed: 4000,

});

// gallery tabs

const tabsBtns = document.querySelectorAll('.gallery__navigation-btn');
const galleryItems = document.querySelectorAll('.gallery__item');

tabsBtns.forEach(function (elem, i) {
   elem.addEventListener('click', function (e) {
      let clickTarget = e.target;

      for (let i = 0; i < tabsBtns.length; i++) {
         tabsBtns[i].classList.remove('_active');
         galleryItems[i].classList.remove('_active');
      }

      clickTarget.classList.add('_active');
      galleryItems[i].classList.add('_active');
   })
});

// header active links & breadcrumbs 
// Only experimental thing, i tried to create breadcrumbs on native JS, on version with CMS (on my local host) breadcrumbs work throughout Yoast SEO

const headerLinks = document.querySelectorAll('.header__menu-link');
const crumps = document.querySelector('.breadcrumbs');
const crumpsList = document.querySelector('.breadcrumbs__list');
const loc = location.href;

if (location.href != 'http://localhost:3000/') {
   crumps.classList.add('_active');

   headerLinks.forEach(function (elem) {

      if (loc.includes(elem.innerHTML.toLowerCase())) {
         elem.classList.add('_active');

         let li = document.createElement('li');
         li.classList.add('breadcrumbs__item');

         let a = document.createElement('a');
         a.classList.add('breadcrumbs__link');
         a.href = elem.href;
         a.innerText = elem.innerText;

         li.append(a);
         crumpsList.append(li)
      }

   });
}

// video

const videoOn = document.querySelector('.video__button_on');
const videoOff = document.querySelector('.video__button_off');
const videoPop = document.querySelector('.video__popup');

videoOn.addEventListener('click', function () {
   videoPop.classList.add('_active');
   body.classList.add('_lock');
});

videoOff.addEventListener('click', function () {
   videoPop.classList.remove('_active');
   body.classList.remove('_lock');
});

// inspiration

const inspirationPercents = document.querySelectorAll('.column-info__item-title-percent');
const subLine = document.querySelectorAll('.column-info__item-sub-line');
const inspirationItems = document.querySelector('.column-info__items');

window.onload = inspirationPercents.forEach(function (e, i) {
   subLine[i].style.width = e.innerText;
})

$('.contact__slider-body').slick({
   dots: true,
   arrows: false,
   slidesToShow: 10,
   slidesToScroll: 10,
   responsive: [
      {
         breakpoint: 1700,
         settings: {
            slidesToShow: 8,
            slidesToScroll: 8,
         }
      },
      {
         breakpoint: 1400,
         settings: {
            slidesToShow: 6,
            slidesToScroll: 6,
         }
      },
      {
         breakpoint: 992,
         settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
         }
      },
      {
         breakpoint: 767,
         settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
         }
      },
      {
         breakpoint: 540,
         settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
         }
      },
      {
         breakpoint: 480,
         settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
         }
      },
   ],
   
});

// search pop up

const searchBtn = document.querySelector('.blog-nav__search-btn');
const searchMenu = document.querySelector('.blog__navigation');

searchBtn.addEventListener('click', function (){
   searchMenu.classList.toggle('_active');
   body.classList.toggle('_lock');

   if (searchMenu.classList.contains('_active')){
      searchBtn.firstElementChild.src = 'images/blog/search_close.svg';
   } else {
      searchBtn.firstElementChild.src = 'images/blog/search.svg';
   }
})
