$(document).ready(function() {
	$('#form').submit(function() {
		if (document.form.name.value === '' || document.form.lastname.value === '') {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('#form').trigger('reset');
		});
		return false;
	});
});

$('.js-close-thank-you').click(function() {
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) {
	var popup = $('.popup');
	if (e.target === popup[0]&&popup.has(e.target).length === 0){
		$('.js-overlay-thank-you').fadeOut();
	}
});

var lastScrollPosition = 0; 

$('#scroll-up').click( function(){
	if ( $(document).scrollTop() > 0 ) {
		$('body').animate({scrollTop:0},1000);
		lastScrollPosition = $(document).scrollTop();
	} else {
		$('body').animate({scrollTop:lastScrollPosition},1000);
	}	
});
