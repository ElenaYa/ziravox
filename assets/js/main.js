(function ($) {
"use strict";

$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile_menu',
	meanScreenWidth: "991"
});

$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 200) {
		$(".header-sticky").removeClass("sticky");
	} else {
		$(".header-sticky").addClass("sticky");
	}
});

$('.side-toggle').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
})
	


$('.admin-cursor-magic').on('click', function() {
	$('.mouse-cursor-invisible').addClass('visible');
	console.log('magic cursor clicked');
});
$('.admin-cursor-default').on('click', function() {
	$('.mouse-cursor-invisible').removeClass('visible');
	console.log('default cursor clicked');
});


function sliderActive() {
	
	if (jQuery(".slider-active").length > 0) {
		let sliderActive1 = '.slider-active';
		let sliderInit1 = new Swiper(sliderActive1, {
			slidesPerView: 1,
			rtl: false,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			effect: 'fade',

			autoplay: {
				delay: 5000,
			},

	        pagination: {
				el: ".cinkes-swiper-pagination",
				clickable: true,
			},

			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			a11y: false
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + ' [data-animation]').each(function () {
					let anim = $(this).data('animation');
					let delay = $(this).data('delay');
					let duration = $(this).data('duration');

					$(this).removeClass('anim' + anim)
						.addClass(anim + ' animated')
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration
						})
						.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
							$(this).removeClass(anim + ' animated');
						});
				});
			};
			animated();
			init.on('slideChange', function () {
				$(sliderActive1 + ' [data-animation]').removeClass('animated');
			});
			init.on('slideChange', animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}}

function projectSlider() {
	const project_slider = new Swiper(".cinkes_project_container", {
	slidesPerView: 2,
	centeredSlides: true,
	spaceBetween: 60,
	rtl: false,
	grabCursor: true,
	observer: true,
	observeParents: true,
	loop: true,
	pagination: {
	  el: ".cinkes_projects_pagination",
	  clickable: true,
	},
	navigation: {
		nextEl: ".cinkes_projects_next",
		prevEl: ".cinkes_projects_prev",
	  },
	  breakpoints: {
		320: {
			slidesPerView: 1,
			centeredSlides: true,
			grabCursor: false,
			},
		576: {
			slidesPerView: 1,
			centeredSlides: true,
			grabCursor: false,
		},
		768: {
			slidesPerView: 2,
		},
		993: {
			slidesPerView: 2,
		},
	}
  });}




function testimonialActive() {
	const cinkes_testimonial_spage_active = new Swiper(".cinkes_testimonial_spage_active", {
		slidesPerView: 2,
		spaceBetween: 30,
		loop: true,
		rtl: false,
		navigation: {
			nextEl: ".cinkes_testimonial_spage_next",
			prevEl: ".cinkes_testimonial_spage_prev",
		  },
		  breakpoints: {
			0: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 1,
			},
			992: {
				slidesPerView: 2,
			},
		}
	  });}




 function recentProjectActive() {
	  if (jQuery(".recent-project-active-1").length > 0) {
		let swiperrecent = new Swiper('.recent-project-active-1', {
			slidesPerView: 3,
			spaceBetween: 5,
			loop: true,
			centeredSlides: true,
			rtl: false,
			infinite: false,
			grabCursor: true,
			autoplay: {
				delay: 2000,
			},

			pagination: {
				el: '.recent-swiper-pagination',
				clickable: true,
			},

			navigation: {
				nextEl: '.recent-swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			scrollbar: {
				el: '.recent-scrollbar',
				dynamicBullets: true,
			},
			breakpoints: {
				0: {
					slidesPerView: 1,
					},
				576: {
					slidesPerView: 1,
				},
				768: {
					slidesPerView: 1,
				},
				992: {
					slidesPerView: 2,
				},
				1199: {
					slidesPerView: 2,
				},
			}

		});}}


jQuery('.odometer').appear(function (e) {
	var odo = jQuery(".odometer");
	odo.each(function () {
		var countNumber = jQuery(this).attr("data-count");
		jQuery(this).html(countNumber);
	});
});


function sliderTestimonialActive() {

	const slider_thumb = new Swiper('.cinkes_testimonial_thumbs_active', {
		loop: true,
		spaceBetween: 5,
		slidesPerView: 3,
		freeMode: true,
		rtl: false,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 3,
			},
			993: {
				slidesPerView: 3,
			},
		}
	});
	const slider3 = new Swiper('.cinkes_testimonial_message_active', {
		loop: true,
		spaceBetween: 30,
		rtl: false,
		slidesPerView: 1,
		effect: 'fade',
		fadeEffect: {
		  crossFade: true
		},
		navigation: {
			nextEl: ".cinkes_testimonial_next",
			prevEl: ".cinkes_testimonial_prev",
		  },
		pagination: {
			el: ".cinkes_testimonial_pagination",
		  },
		thumbs: {
		  swiper: slider_thumb,
		},
	});
}
function brandActive() {
	const brand_active = new Swiper('.cinkes_brand_active', {
		loop: true,
		rtl: false,
		slidesPerView: 4,

		breakpoints: {
			320: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			993: {
				slidesPerView: 4,
			},
		}
	});}

function CinkesVideosThumb() {
	var cinkes_video_thumb = new Swiper(".cinkes_video_thumb", {
		spaceBetween: 0,
		slidesPerView: 4,
		rtl: false,
		freeMode: true,
		watchSlidesProgress: true,
		breakpoints: {
			320: {
				slidesPerView: 1,
				},
			576: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			993: {
				slidesPerView: 3,
			},
			1199: {
				slidesPerView: 4,
			},
		}
	});
	var cinkes_video = new Swiper(".cinkes_video", {
		spaceBetween: 0,
		slidesPerView: 1,
		rtl: false,
		thumbs: {
			swiper: cinkes_video_thumb,
		},
	});
}
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});
$('.popup-video').magnificPopup({
	type: 'iframe'
});
$('.cinkes_free_consultaion_wrapper select, .cinkes_contact_form select').niceSelect();
$("[data-background]").each(function(){
    var bgUrl = $(this).attr("data-background");
    $(this).css("background-image","linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("+bgUrl+")");
});

$("[data-width]").each(function(){
	$(this).css("width",$(this).attr("data-width"))
})
$("[data-bg-color]").each(function(){
	$(this).css("background-color",$(this).attr("data-bg-color"))
})

if (jQuery(".filter-wrapper").length > 0) {
    $('.filter-wrapper .filter-grid').imagesLoaded(function () {
        let $grid = $('.filter-wrapper .filter-grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-item' 
            }
        });

        $('.filter-nav').on('click', 'button', function () {
            let filterValue = $(this).attr('data-filter');
            $grid.isotope({filter: filterValue});
        });

    });
}

$('.portfolio_nav button').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});


$.scrollUp({
	scrollName: 'scrollUp', 
	topDistance: '300', 
	topSpeed: 300, 
	animation: 'fade', 
	animationInSpeed: 200, 
	animationOutSpeed: 200, 
	scrollText: '<i class="icofont icofont-long-arrow-up"></i>',
	activeOverlay: false,
});

new WOW().init();

var navexpander = $('#nav-expander, #nav-expander2');
if(navexpander.length){
	$('#nav-expander, #nav-expander2, #nav-close, #nav-close2, .offwrap').on('click',function(e){
		e.preventDefault();
		$('body').toggleClass('nav-expanded');
	});
}


$('.cinkes-dark-light-view-box').on('click', function() {
	$('body').toggleClass( "dark_mode" );
	$('.cinkes-dark-light-view-box').toggleClass( "has-clicked" );
	$('.cinkes-dark-light-view-toogle-dot').toggleClass( "pos-bottom" );
});
sliderActive();
projectSlider();
testimonialActive();
recentProjectActive();
sliderTestimonialActive();
brandActive();
CinkesVideosThumb();

})(jQuery);





function itCursor() {
    var myCursor = jQuery(".mouseCursor");
    if (myCursor.length) {
        if ($("body")) {
            const e = document.querySelector(".cursor-inner"),
                t = document.querySelector(".cursor-outer");
            let n,
                i = 0,
                o = !1;
            (window.onmousemove = function(s) {
                o ||
                    (t.style.transform =
                        "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                    (e.style.transform =
                        "translate(" + s.clientX + "px, " + s.clientY + "px)"),
                    (n = s.clientY),
                    (i = s.clientX);
            }),
            $("body").on("mouseenter", "button, a, .cursor-pointer", function() {
                    e.classList.add("cursor-hover"), t.classList.add("cursor-hover");
                }),
                $("body").on("mouseleave", "button, a, .cursor-pointer", function() {
                    ($(this).is("a", "button") &&
                        $(this).closest(".cursor-pointer").length) ||
                    (e.classList.remove("cursor-hover"),
                        t.classList.remove("cursor-hover"));
                }),
                (e.style.visibility = "visible"),
                (t.style.visibility = "visible");
        }
    }
}
itCursor();