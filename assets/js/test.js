(function ($) {
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 0) {
			$('body').addClass('scrolled');
		}
		else {
			$('body').removeClass('scrolled');
		}
	});
	$(document).on('click', '#quick-nav > ul > li > a', function (e) {
		var $target = $($(this).attr('href'));
		var scrollTop = $target.offset().top - $('#top-nav').height() - $('#header').height();
		if ($(this).parent().index() == 0) {
			scrollTop = 0;
		}
		$('html, body').stop().animate({
			scrollTop: scrollTop
		}, 500, 'swing');
		e.preventDefault();
	});
	$('#introduce .slider').bxSlider({
		mode: 'fade'
		, pause: 12000
		, preventDefaultSwipeY: true
		, preventDefaultSwipeX: true
		, touchEnabled: false
		, controls: false
		, buildPager: function (slideIndex) {
			return "<span class='sr-only'>" + $('#introduce .slider .intro-item').eq(slideIndex).attr('data-title') + "</span>";
		}
		, prevText: '<img src="/assets/images/main/ico_slider_prev.png" alt="�댁쟾">'
		, nextText: '<img src="/assets/images/main/ico_slider_next.png" alt="�ㅼ쓬">'
		, onSliderLoad: function (currentIndex) {
			var $currentElem = $('#introduce .intro-item:not(.bx-clone):eq(0)');
			$currentElem.addClass('active');
			var typeContainer = $currentElem.find('span.typed:eq(0)');
			var typeString = $currentElem.find('span.typed:eq(0)').attr("data-typed");
			typeContainer.text("").unityping({
				string: [typeString]
				, typingSpeed: 1000
				, startDelay: 3000
			});
			var introVideo = document.getElementById('intro-video-' + (currentIndex + 1));
			if (introVideo) {
				introVideo.play();
			}
		}
		, onSlideBefore: function ($slideElement, oldIndex, newIndex) {
			$('#introduce .intro-item.active').removeClass('active');
			var introVideo = document.getElementById('intro-video-' + (oldIndex + 1));
			if (introVideo) {
				introVideo.pause();
			}
		}
		, onSlideAfter: function ($slideElement, oldIndex, newIndex) {
			$slideElement.addClass('active');
			var typeContainer = $slideElement.find('span.typed:eq(0)');
			var typeString = $slideElement.find('span.typed:eq(0)').attr("data-typed");
			typeContainer.text("").unityping({
				string: [typeString]
				, typingSpeed: 1000
				, startDelay: 3000
			});
			var introVideo = document.getElementById('intro-video-' + (newIndex + 1));
			if (introVideo) {
				introVideo.play();
			}
		}
	});
	var rndSlider = $('#rnd .slider').bxSlider({
		mode: 'fade'
		, auto: true
		, pause: 6000
		, speed: 0
		, pager: false
		, adaptiveHeight: true
		, touchEnabled: false
		, tickerHover: true
		, nextText: '<i class="icon-right-open"></i>'
		, prevText: '<i class="icon-left-open"></i>'
	});
	$(document).on("mouseenter focus", "#rnd .pager, #rnd .bx-controls-direction", function () {
		rndSlider.stopAuto();
	});
	$(document).on("mouseleave blur", "#rnd .pager, #rnd .bx-controls-direction", function () {
		rndSlider.startAuto();
	});
	$(window).on("scroll", function () {
		if ($(this).scrollTop() >= $("#news").offset().top - $("#header").height() - $("#top-nav").height()) {
			$("#btn-goto-top").fadeIn();
		}
		else {
			$("#btn-goto-top").fadeOut();
		}
	});
	$(document).on('click', '#btn-goto-top', function (e) {
		$('html, body').stop().animate({
			scrollTop: 0
		}, 500, 'swing');
		$(this).blur();
		e.preventDefault();
	});
})(jQuery);