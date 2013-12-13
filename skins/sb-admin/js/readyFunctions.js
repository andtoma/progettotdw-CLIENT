$().ready(function() {

	$(".to_blur").mouseenter(function() {
		$(this).find('.image img').first().addClass('blurred');

	});

	$(".to_blur").mouseleave(function() {
		$(this).find('.image img').first().removeClass('blurred');

	});

	$('input').each(function() {

		if ($(this).attr('placeholder') == "#") {

			$(this).attr('placeholder', 'Insert ' + $(this).closest('div').prev().html());

		}

	});

	$('.mandatory').each(function() {

		$(this).find('label').first().prepend('<span id="mandatory">* </span>');

	});

	$("button").click(function(event) {

		$('.validate').each(function() {
			$(this).css({
				'border' : 'none',
				'box-shadow' : 'none'
			});

			if ($(this).val() == "") {

				event.preventDefault();

				$(this).css({
					'border' : '1px solid red',
					'box-shadow' : '0px 0px 5px #ff0000'
				});

				$(this).attr('placeholder', 'this field is mandatory');

			}

		});
	});

});
