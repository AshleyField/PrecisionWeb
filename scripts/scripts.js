$(function(){

	// Open and close nav on mobile
	$('.bars').on('click',function(e){

		var navData = $('.mobile-nav .navigation').data('nav');

		e.stopPropagation();
		
		if(navData == 'close'){
			$('.mobile-nav .navigation').addClass('nav-open')
							.data('nav', 'open')

			$('.bars>i').first().removeClass('fas fa-bars')
							.addClass('fas fa-times')
		}

		else {
			$('.mobile-nav .navigation').removeClass('nav-open')
							.data('nav', 'close');

			$('.bars>i').removeClass('fas fa-times')
						.addClass('fas fa-bars');

		}
	});
});