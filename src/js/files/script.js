//! Файл для написання власного коду

// Импорт функционала ==============================================================================================================================================================================================================================================================================================================================
// import { isMobile } from "./functions.js";
// import { formsModules } from "./forms/forms.js";


const heartTrainer = document.querySelectorAll('.rating-trainer__heart');

heartTrainer.forEach( heart => {
   heart.addEventListener('click', addActiveClass);
});

function addActiveClass ( ) {
   if(!heart.classList.contains('rating-trainer__red')) {
      heart.classList.add('rating-trainer__red');
      updateLocal();
   } else {
      heart.classList.remove('rating-trainer__red');
      updateLocal();
   }
}

const updateLocal = () => {        // Встановлюємо дані у LS
   localStorage.setItem('heartDB', JSON.stringify());
};



//! Бургер ==================================
const menuBurger = document.querySelector('.menu__burger');
const nav = document.querySelector('.nav');
const navItem = document.querySelector('.nav__item');
const header = document.querySelector('.header');
const body = document.querySelector('body');
const arrow = document.querySelector('.item-arrow');
const headerPosition = header.getBoundingClientRect().top

menuBurger.addEventListener('click', (e) => {
   nav.classList.toggle('active');
   header.scrollIntoView({block: "start"});
   body.classList.toggle('lock')
});

//! Полоса прокрутки ========================
window.onscroll = function () {
   myFunction()
};

function myFunction() {
   let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
   let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
   let scrolled = (winScroll / height) * 100;
   document.getElementById("myBar").style.width = scrolled + "%";
}
