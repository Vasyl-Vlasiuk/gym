/*
Документация по работе в шаблоне: 
Документация слайдера: https://swiperjs.com/
Сниппет(HTML): swiper
*/

// Подключаем слайдер Swiper из node_modules
// При необходимости подключаем дополнительные модули слайдера, указывая их в {} через запятую
// Пример: { Navigation, Autoplay }
import Swiper, { Navigation, Pagination } from 'swiper';
/*
Основниые модули слайдера:
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation
Подробнее смотри https://swiperjs.com/
*/

// Стили Swiper
// Базовые стили
// import "../../scss/base/swiper.scss";
// Полный набор стилей из scss/libs/swiper.scss
// import "../../scss/libs/swiper.scss";
// Полный набор стилей из node_modules
// import 'swiper/css';


//! Инициализация слайдера галереи
function initSliders() {
	// Перечень слайдеров
	if (document.querySelector('.swiper')) {
		new Swiper('.swiper', {
			// Подключаем модули слайдера
			// для конкретного случая
			modules: [Navigation, Pagination],
			
			// effect: 'fade',
			// autoplay: {
			// 	delay: 3000,
			// 	disableOnInteraction: false,
			// },
			
			// observer: true,
			// observeParents: true,
			slidesPerView: 1,
			slidesPerColumn: 3,
			spaceBetween: 3,
			autoHeight: false,
			speed: 400,
			//touchRatio: 0,
			//simulateTouch: false,
			loop: true,
			//preloadImages: false,
			//lazy: true,

			// Dotts
			pagination: {
				// el: '.slider-quality__pagging',
				el: '.swiper-pagination',
				clickable: true,
				// Динамічні булети 
				dynamicBullets: true,
			},

			// Arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			 },

			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 2,
					spaceBetween: 3,
					// autoHeight: true,
				},
				// when window width is >= 480px
				480: {
						slidesPerView: 2,
						spaceBetween: 3,
						// autoHeight: true,
				},
				// when window width is >= 768px
				768: {
					slidesPerView: 3,
					spaceBetween: 3,
				}
			},
		
			on: {

			}
		});
	}
}

//! Инициализация слайдера тренеров
// function initSlidersTrainers() {
// 	// Перечень слайдеров
// 	if (document.querySelector('.swiper')) {
// 		new Swiper('.swiper', {
// 			// Подключаем модули слайдера
// 			// для конкретного случая
// 			modules: [Navigation],
			
// 			// effect: 'fade',
// 			// observer: true,
// 			// observeParents: true,
// 			slidesPerView: 1,
// 			slidesPerColumn: 1,
// 			spaceBetween: 3,
// 			autoHeight: false,
// 			speed: 400,
// 			//touchRatio: 0,
// 			//simulateTouch: false,
// 			loop: true,
// 			//preloadImages: false,
// 			// lazy: true,

// 			// Arrows
// 			navigation: {
// 				nextEl: '.swiper-button-next',
// 				prevEl: '.swiper-button-prev',
// 			 },
// 			on: {

// 			}
// 		});
// 	}
// }

// Скролл на базе слайдера (по классу swiper_scroll для оболочки слайдера)
function initSlidersScroll() {


	let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
	if (sliderScrollItems.length > 0) {
		for (let index = 0; index < sliderScrollItems.length; index++) {
			const sliderScrollItem = sliderScrollItems[index];
			const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
			const sliderScroll = new Swiper(sliderScrollItem, {
				observer: true,
				observeParents: true,
				direction: 'vertical',
				slidesPerView: 'auto',
				freeMode: {
					enabled: true,
				},
				scrollbar: {
					el: sliderScrollBar,
					draggable: true,
					snapOnRelease: false
				},
				mousewheel: {
					releaseOnEdges: true,
				},
			});
			sliderScroll.scrollbar.updateSize();
		}
	}
}


window.addEventListener("load", function (e) {
	// Запуск инициализации слайдеров
	initSliders();
	// initSlidersTrainers();
	// Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
	// initSlidersScroll();
});