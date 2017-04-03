// Change background of .navbar on scroll
$(function() {

	$(window).on("scroll", function() {

		if($(window).scrollTop() > 53) {

			$('.navbar').css('background-color', 'rgba(0, 0, 0, .55)');
		} else {

			// remove the background property so it becomes transparent again
			$('.navbar').css('background-color', 'transparent');
		}
	});
});