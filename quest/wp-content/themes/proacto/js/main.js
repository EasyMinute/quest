jQuery(function($){

	$(document).ready(function(){
		
		$("#header__burger").on('click', function(){
			$(this).toggleClass('active');
			$('#header__nav').toggleClass('opened');
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
			$('body').removeClass('unscroll');
			$(this).parents('.modal').removeClass('active');
			$(this).parents('.modal__wrap').removeClass('active');
		});

		$('.modal').on('click', function(){
			$('body').removeClass('unscroll');
			$(this).removeClass('active');
			$(this).find('.modal__wrap').removeClass('active');
		})

		$('.modal__wrap').on('click', function (e){
			e.stopPropagation();
		});

		$('.appstore_trigger').on('click', function (){
			$('body').addClass('unscroll');
			$('.modal').addClass('active');
			$('#apply-form').addClass('active');
			$('#apply-form').find("input[value='IOS']").prop("checked", true);
		});

		$('.playmarket_trigger').on('click', function (){
			$('body').addClass('unscroll');
			$('.modal').addClass('active');
			$("#apply-form").addClass('active');
			$('#apply-form').find("input[value='Android']").prop("checked", true);
		});

	});

});