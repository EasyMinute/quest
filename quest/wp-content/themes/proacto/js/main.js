jQuery(function($){

	$(document).ready(function(){
		
		$("#header__burger").on('click', function(){
			$(this).toggleClass('active');
			$('#header__nav').toggleClass('opened');
			if($(this).hasClass('active')) {
				$('body').addClass('unscroll');
			} else {
				$('body').removeClass('unscroll');
			}
		});

		$(".accordeons__item").on('click', function(){
			$(".accordeons__item").not($(this)).removeClass('active');
			$(this).toggleClass('active');
		});

		$('.apply-trigger').on('click', function(){
			$('body').addClass('unscroll');
			$('.modal').addClass('active');
			$('#apply-form').addClass('active');
		});

		$('.partner-trigger').on('click', function(){
			$('body').addClass('unscroll');
			$('.modal').addClass('active');
			$('#partner-form').addClass('active');
		});

		$('.modal__head .close, .cancel-modal').on('click', function(){
			if(!$("#header__burger").hasClass('active')) {
				$('body').removeClass('unscroll');
			}
			$(this).parents('.modal').removeClass('active');
			$(this).parents('.modal__wrap').removeClass('active');
		});

		$('.modal').on('click', function(){
			if(!$("#header__burger").hasClass('active')) {
				$('body').removeClass('unscroll');
			}
			$(this).removeClass('active');
			$(this).find('.modal__wrap').removeClass('active');
		})

		$('.modal__wrap').on('click', function (e){
			e.stopPropagation();
		});

		$('.appstore_trigger').on('click', function (e){
			e.preventDefault();
			$('body').addClass('unscroll');
			$('.modal').addClass('active');
			$('#apply-form').addClass('active');
			$('#apply-form').find("input[value='IOS']").prop("checked", true);
		});

		$('.playmarket_trigger').on('click', function (e){
			e.preventDefault();
			$('body').addClass('unscroll');
			$('.modal').addClass('active');
			$("#apply-form").addClass('active');
			$('#apply-form').find("input[value='Android']").prop("checked", true);
		});

		$('.submit-modal').on('click', function(){

			$(this).parents('.modal__wrap').find('form').find('.wpcf7-submit').trigger('click');
		});

		$("#faqSearch").on("input", function () {
			var searchText = $(this).val().toLowerCase();

			// Loop through each FAQ item
			$(".accordeons__item").each(function () {
				var faqText = $(this).find("h3").text();
				var $faqTitle = $(this).find("h3");

				// Check if the FAQ text contains the search text (case-insensitive)
				if (faqText.toLowerCase().includes(searchText)) {
					// Highlight matching words
					var highlightedText = faqText.replace(new RegExp(searchText, "gi"), function (match) {
						return '<span class="highlight">' + match + '</span>';
					});

					// Update the FAQ title with the highlighted text
					$faqTitle.html(highlightedText);

					$(this).show(); // Display matching items
				} else {
					$faqTitle.html(faqText); // Restore original text
					$(this).hide(); // Hide non-matching items
				}
			});
		});

		$(".baner__scroll").on("click", function () {
			// Find the next section after the banner
			var $nextSection = $(this).closest('.baner').next('section');

			// Scroll to the next section smoothly
			if ($nextSection.length) {
				$("html, body").animate({
					scrollTop: $nextSection.offset().top
				}, 1000);
			}
		});

		$(".small_banner__switcher button").on('click', function(){
			$(".small_banner__switcher button").removeClass('active')
			let val = $(this).data('val')
			$('section').each(function() {
				if ($(this).hasClass(val) || $(this).hasClass('small_banner')) {
					$(this).show()
				} else {
					$(this).hide()
				}
			})
			$(this).addClass('active')
		})

		if($('body').hasClass('page-template-page-switch-php')) {
			let activeMode = $(".small_banner__switcher button.active").data('val');
			$('section').each(function() {
				if ($(this).hasClass(activeMode) || $(this).hasClass('small_banner')) {
					$(this).show()
				} else {
					$(this).hide()
				}
			})
		}

		const swiper = new Swiper('.roadmap__wrap.swiper', {
			// Optional parameters
			direction: 'horizontal',
			slidesPerView: 1,
			spaceBetween: 16,
			loop: false,

			// Navigation arrows
			navigation: {
				nextEl: '.roadmap-container .swiper-button-next',
				prevEl: '.roadmap-container .swiper-button-prev',
			},

			breakpoints: {
				920: {
					// If we need pagination
					pagination: {
						el: '.roadmap-container .swiper-pagination',
					},
					slidesPerView: 3,
					spaceBetween: 20,
				}
			}
		});

		const teamSwiper = new Swiper('.team__wrap.swiper', {
			// Optional parameters
			direction: 'horizontal',
			slidesPerView: 1,
			spaceBetween: 16,
			loop: false,

			// Navigation arrows
			navigation: {
				nextEl: '.team-container .swiper-button-next',
				prevEl: '.team-container .swiper-button-prev',
			},

			breakpoints: {
				920: {
					// If we need pagination
					pagination: {
						el: '.team-container .swiper-pagination',
					},
					slidesPerView: 4,
					spaceBetween: 20,
				}
			}
		});

	});

});

var wpcf7Elm = document.querySelectorAll( '.wpcf7' );

wpcf7Elm.forEach(element => {
	element.addEventListener( 'wpcf7submit', function( event ) {
		if (event.detail.status != 'validation_failed'){
			console.log('sent');
			alert('Message sent');
		}
	}, false );
})