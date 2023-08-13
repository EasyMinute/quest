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
			$(".accordeons__item").removeClass('active');
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
			console.log('a');
			$(this).parents('.modal__wrap').find('form').trigger('submit');
		});

	});

});