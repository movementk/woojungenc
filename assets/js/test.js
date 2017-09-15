(function ($) {
	$(document).on('mouseenter focusin', '#header #nav > ul > li > a', function () {
		if ($(this).siblings(".nav-content").length > 0) {
			$('body').addClass('nav-expanded');
		}
		else {
			$('body').removeClass('nav-expanded');
		}
	});
	$(document).on('mouseleave', '#header', function () {
		$('body').removeClass('nav-expanded');
		$('#header #nav > ul > li').removeClass('active');
	});
	$(document).on('mouseenter focus', '#header #nav > ul > li a', function (e) {
		$(this).parent().siblings('.active').removeClass('active');
		$(this).parent().addClass('active');
		e.preventDefault();
	});
	$(document).on('click', '#header #btn-open-nav', function () {
		$('body').addClass('nav-opened');
	});
	$(document).on('click', '#nav-side', function (e) {
		if ($(e.target).attr('id') == 'nav-side') {
			$('body').removeClass('nav-opened');
		}
	});
	$(document).on('click', '#nav-side #btn-close-nav', function () {
		$('body').removeClass('nav-opened');
	});
	$(document).on('click', '#nav-side .nav-body .nav ul li a', function (e) {
		console.log($(this).siblings('ul').length);
		if ($(this).siblings('ul').length > 0) {
			if ($(this).parent().hasClass('selected')) {
				$(this).parent().removeClass('selected');
			}
			else {
				$(this).parent().siblings('.selected').removeClass('selected');
				$(this).parent().addClass('selected');
			}
			e.preventDefault();
		}
	});
	$(document).on("click", ".tabs a[data-toggle='tab']", function () {
		$(this).parent().siblings('.active').removeClass('active');
		$(this).parents('.dropdown-menu:eq(0)').siblings('.btn').eq(0).find('.text').text($(this).text());
	});
	$(window).load(function () {
		jQuery.ajax({
			url: "/bbs/bbs/ajax.aside.php"
			, type: 'POST'
			, data: "pagename=" + encodeURIComponent(location.href)
			, error: function (xhr, textStatus, errorThrown) {
				alert('An error occurred! \n' + (errorThrown ? errorThrown : xhr.status));
			}
			, success: function (xml) {
				var depth1 = $(xml).find('depth1').text();
				var depth2 = $(xml).find('depth2').text();
				var depth3 = $(xml).find('depth3').text();
				var depth4 = $(xml).find('depth4').text();
				if (depth1) {
					var target1 = $(".nav > ul > li").eq(depth1 - 1);
					target1.addClass("selected");
					if (depth2) {
						target1.find("ul:first > li").each(function (i) {
							if (i == (depth2 - 1)) {
								$(this).addClass("selected");
								if (depth3) {
									$(this).find("ul:first > li").each(function (i) {
										if (i == (depth3 - 1)) {
											$(this).addClass("selected");
											if (depth4) {
												$(this).find("ul:first > li").each(function (i) {
													if (i == (depth4 - 1)) {
														var target4 = $(this);
														$(this).addClass("selected");
													}
												});
											}
										}
									});
								}
							}
						});
					}
				}
			}
			, complete: function () {}
		});
	});
	$(document).on("click", ".affiliates > ul > li > a", function () {
		$(this).blur();
	});
})(jQuery);