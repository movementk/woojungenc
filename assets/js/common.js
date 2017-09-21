$(document).on("click", "#header .btn-open-side-nav", function() {
	$("body").addClass("nav-opened");
});
$(document).on("click", "#side-nav .btn-close-side-nav", function() {
	$("body").removeClass("nav-opened");
});
$(document).on("click", "#side-nav .nav li > a", function(e) {
	if ($(this).siblings('ul').length > 0) {
		if ($(this).parent().hasClass('active')) {
			$(this).parent().removeClass('active');
		} else {
			$(this).parent().siblings('.active').removeClass('active');
			$(this).parent().addClass('active');
		}
		e.preventDefault();
	}
});
$(document).on("mouseenter focus", "#header .nav ul > li > a", function(e) {
	//if ($(this).parent().hasClass('active')) {
	//	$(this).parent().removeClass('active');
	//} else {
		$(this).parent().siblings('.active').removeClass('active');
		$(this).parent().addClass('active');
	//}
	//e.preventDefault();
});
$(document).on("mouseleave", "#header .nav, #header .nav > ul > li", function(e) {
	$(this).find("li.active").removeClass("active");
});