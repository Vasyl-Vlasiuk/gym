// jQuery
$(document).ready(function() {

	// burger
	$('.menu__burger').click(function(event) {
		$('.menu__burger,.nav').toggleClass('active');
		$('body').toggleClass('lock');
	});

	//fixed heder
	// grab the initial top offset of the navigation 
	var stickyNavTop = $('.fixed-container').offset().top;

	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var stickyNav = function(){
		var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			
		// if we've scrolled more than the navigation, change its position to fixed to stick to top,
		// otherwise change it back to relative
		if (scrollTop > stickyNavTop) { 
			$('.fixed-container').addClass('sticky');
			$('.intro').addClass('top');
			$('.header-block').addClass('top');
			$('.header-contacts').addClass('top');
		} else {
			$('.fixed-container').removeClass('sticky');
			$('.intro').removeClass('top');
			$('.header-block').removeClass('top');
			$('.header-contacts').removeClass('top');
		}
	};

	stickyNav();
	// and run it again every time you scroll
	$(window).scroll(function() {
		stickyNav();
	});
});

// Випадаюче меню
let isMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
};

let body = document.querySelector('body');

if(isMobile.any()){
		body.classList.add('touch');
		let arrow=document.querySelectorAll('.arrow');

	for(let i = 0; i < arrow.length; i++){
			let thisLink=arrow[i].previousElementSibling;
			let subNav=arrow[i].nextElementSibling;
			let thisArrow=arrow[i];

			thisLink.classList.add('parent');
		arrow[i].addEventListener('click', function(){
			subNav.classList.toggle('open');
			thisArrow.classList.toggle('active');
		});
	}
}else{
	body.classList.add('mouse');
}


// Ініціалізація Swiper 
new Swiper('.image-slider',  {
	// Стрелки
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},

	// Навігація
	// Булети, поточне положення, прогресбар
	pagination: {
		el:'.swiper-pagination',
		// Булети
		clickable:true,
		// Динамічні булети 
		dynamicBullets: true,
	},

	// Зміна курсору на руку
	grabCursor: true,

	// переключення при кліку на слайд
	slideToClickedSlide:true,

	// Керування клавіатурою
	keyboard: {
		// on/off
		enabled:true,
		// on/off тільки коли слайдер в межах в'юпорта
		onlyInViewport:true,
		// on/off керування клавішами pageUp/ pageDown
		pageUpDown:true, 
	},

	// Автовисота
	autoHeight:true,

	// Кількість слайдів для показу
	slidesPerView:1,

	// відключення функціоналу 
	// якщо слайдів менше як потрібно
	watchOverflow:true,

	// відступи між слайдами
	spaceBetween:5,

	// Змінює кількість прогортуваних слайдів
	slidesPerGroup:1,

	// Мультирядность, для коректної роботи відключити autoHeight:false,
	// slidesPerColumn:2,

	// Вільний режим
	freeMode: true,

	// швидкість
	speed:800,

	// брейкпоінти (ширина)
	breakpoints: {
		320: {
			slidesPerView: 1,
		},

		800: {
			slidesPerView: 2,
		},

		1170: {
			slidesPerView:1,
		}
	},
});
