

// Change background of .navigation on scroll
$(function() {

	$(window).on("scroll", function() {

		if($(window).scrollTop() > 53) {

			$('.navigation').css('background-color', 'rgba(0, 0, 0, .55)');
		} else {

			// remove the background property so it becomes transparent again
			$('.navigation').css('background-color', 'transparent');
		}
	});
});