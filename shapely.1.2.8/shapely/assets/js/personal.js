jQuery(document).ready(function() {
	
	/*-cookie-message-*/
	/*if ((localStorage.cookieAccept != 1) && (!jQuery('body').hasClass('logged-in'))) {
		jQuery('body').append('<div class="cookie-wrap clearfix"><div class="cookie-text">Этот Сайт использует <b>файлы cookies</b> для более удобной работы пользователей с ним. Продолжая любое дальнейшее использование Сайта и/или сервисов Сайта, Вы соглашаетесь с этим. Более подробная информация доступна в <a target="_blank" href="/ru/privacy-policy-2">«Политике конфиденциальности»</a></div><button class="btn cookie-button">Хорошо, продолжить</button></div>');
		setTimeout(function() {
			jQuery('.cookie-wrap').fadeIn();	
		}, 2500);
	}
	jQuery('.cookie-button').live('click', function () {
		jQuery('.cookie-wrap').fadeOut();
		localStorage.cookieAccept = 1;
	});*/

	if (window.location.pathname.indexOf('/es') == 0) {
		let all = document.querySelectorAll('.menu-item-10106  a');
		all[0].href = 'https://www.instagram.com/health2help.esp/';
		all[2].href = 'https://www.instagram.com/health2help.esp/';
	}
	document.querySelector('#give-gateway-option-stripe_checkout').innerHTML = 'Apple Pay/Google Pay'

});
