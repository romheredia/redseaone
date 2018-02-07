

// ADD DUTCH LANGUAGE FOR DATEPICKER
/*
$.fn.datepicker.dates['nl'] = {
    days: ['zondag','maandag','dinsdag','woensdag','donderdag','vrijdag','zaterdag'],
    daysShort: ['zo', 'ma','di','wo','do','vr','za'],
    daysMin: ['zo', 'ma','di','wo','do','vr','za'],
    months: ['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'],
    monthsShort: ['jan','feb','mrt','apr','mei','jun','jul','aug','sep','okt','nov','dec'],
    today: "vandaag",
    clear: "duidelijk",
    format: "mm/dd/yyyy",
    titleFormat: "MM yyyy",
    weekStart: 0
};
*/

$(document).ready(function() {
	
	// WINDOW RESIZE EVENT HANDLER
	// SETS SOME PROPERTIES DEPENDING ON THE DEVICE OR WINDOW WIDTH
	$(window).resize(function() {

		/*
		if ($(this).width() >= 1024) {
			onPullmenu = false;
			$('#navlinks').show().removeClass('bounceOutUp');
		}
		*/

	});
	
	$(window).scroll(function() {

		var scroll = $(window).scrollTop();

		if (scroll >= 65) {
			$('#logo').height('47px');
			$('#navbar').addClass('minify');
		} else {
			$('#logo').height('70px');
			$('#navbar').removeClass('minify');
		}

	});

	$('#burger_button').on('click', function() {
		$('#navlinks').toggleClass('shown');
		$('#nav-icon3').toggleClass('open');
	});

	
	/* Slick Slider */
	
	if ($('.rhs-slick').length) {
		$('.rhs-slick').slick({
		  dots: true,
		  infinite: true,
		  speed: 500,
		  cssEase: 'linear',
		  autoplay: true,
		  autoplaySpeed: 5000
		});
	}

	if ($('.link-board-container').length) {
		setTimeout(fadeInHomeMenu, 200);		
	}

	if ($('.modal-media').length) {
		
		mediacardClickHandler();

		$('.modal-media .modal-close').on('click', function() {
			$('.modal-media').fadeOut();
		});
		
		$(document).mouseup(function(e) {
			var container = $('.modal-media .modal-container');
			
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				$('.modal-media').fadeOut();
			}
		});
	}

	if ($('.sched-check').length) {
		$('.sched-check').on('change', function() {
			var cbox = $(this);
			var pbox = cbox.closest('.box-scheds');
			if ( cbox.is(':checked') ) {
				pbox.find('.box-scheds-inner').velocity('fadeIn');
			} else {
				pbox.find('.box-scheds-inner').hide();
			}
		});
	}

	if ($('.book-now').length) {
		$('.book-now').on('click', function() {
			var bform = $(this).closest('.box-scheds-inner').find('.booking-form');
			bform.velocity('fadeIn');
			$(this).hide();
		});
	}

	if ($('.book-close').length) {
		$('.book-close').on('click', function() {
			var bform = $(this).closest('.booking-form');
			var bnow = bform.closest('.box-scheds-inner').find('.book-now');
			bnow.velocity('fadeIn');
			bform.hide();
		});
	}

	if ($('.spaces').length) {
		$('.spaces').on('change', function() {
			var bform = $(this).closest('.booking-form');
			var sum = 0;
			var total_price = 0;
			bform.find('.spaces').each(function(i,e) {
				var price = parseInt($(e).siblings('.price').children('.amount').text());
				if ($(e).val()) {
					sum += parseInt($(e).val());
					total_price += price * parseInt($(e).val());
				}
			});
			generatePersonsForm(sum, total_price, bform);
		});
	}

	$(window).scroll();
});


function generatePersonsForm(totalSpaces, totalPrice, bform) {
	var contacts = bform.find('.contact-item').length;
	
	if (totalSpaces > contacts) {
		for (x=1; x <= (totalSpaces - contacts); x++) {
			var item = $('.contact-temp').clone();
			item.removeClass('contact-temp').addClass('contact-item');
			item.find('.contact-id').text(contacts + x);
			bform.find('.contact-list').append(item);
			item.velocity('fadeIn');
		}
	} else {
		for (x=contacts; x > totalSpaces; x--) {
			if (x - 1 == 0) break;
			bform.find('.contact-item').eq(x-1).remove();
		}
	}
	bform.find('.guests').text(totalSpaces);
	bform.find('.total-price').text(totalPrice.toLocaleString());
	bform.find('.form-guests').val(totalSpaces);
	bform.find('.form-total-price').val(totalPrice);
}

function mediacardClickHandler() {
	$('.media-card').off('click');
	$('.media-card:not(.static)').on('click', function(){
		var url;
		if ($(this).is('[src]')) {
			url = $(this).prop('src');
		} else {
			url = $(this).css('background-image').replace('url("','').replace("url('", "");
			url = url.substring(0, url.length - 2);
		}
		$('.modal-media .modal-img').prop('src', url);
		$('.modal-media').fadeIn();
	});
}

function fadeInHomeMenu() {
	$('.link-board-container').velocity('fadeIn',2000);
}

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});

function showLoading() {
	$('.modal-loading').velocity('fadeIn');
}

function stopLoading() {
	$('.modal-loading').hide();
}