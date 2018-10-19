$(window).scroll(function () {
	$(this).scrollTop() > 100 ? $(".scrollup").fadeIn() : $(".scrollup").fadeOut()
}), $(".scrollup").click(function () {
	return $("html, body").animate({scrollTop: 0}, 600), !1
});


$(document).ready(function () {
	var menuBtn = $('.top-nav_btn');
	var menu = $('#menu-top_menu');
	
	menuBtn.on('click', function (e) {
		e.preventDefault();
		menu.toggleClass('menu__active');
	});
});





/*let menuBtn = $(".top-nav_btn"), menu = $(".menu");
menuBtn.on("click", function (n) {
	n.preventDefault(), menu.slideToggle(200)
}), $(".modalShow").on("click", function (n) {
	n.preventDefault(), $(".modal-window").show()
}), $(".close").on("click", function (n) {
	n.preventDefault(), $(".modal-window").hide()
});
	$('#getting-started').countdown('2019/01/01', function(event) {
		$(this).html(event.strftime(
			'<div class="hour">' +
			'<div class="count">%H </div>' +
			'<div class="text">часов</div>' +
			'</div>' +
			'<div class="minute">'+
			'<div class="count">%M </div>' +
			'<div class="text">минут</div>' +
			'</div>' +
			'<div class="second">' +
			'<div class="count">%S </div>' +
			'<div class="text">секунд</div>' +
			'</div>'));
	});*/
