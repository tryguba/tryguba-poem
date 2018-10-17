$(document).ready(function () {
	
	if ($(window).width()<767){
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 30,
			nav: true,
			autoplay: false,
			autoplayTimeout: 3000,
			smartSpeed: 850,
			autoplayHoverPause: true,
			animate: true,
			autoHeight:true,
			dots:false,
			responsive: {
				0: {
					items: 1
				}
			}
		});
	}
	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		autoplay: false,
		autoplayTimeout: 3000,
		smartSpeed: 850,
		autoplayHoverPause: true,
		animate: true,
		autoHeight:false,
		dots:false,
		responsive: {
			0: {
				items: 2
			}
		}
	});
	
	$('.owl-prev').html('<img src="img/prev.png">');
	$('.owl-next').html('<img src="img/next.png">');
});