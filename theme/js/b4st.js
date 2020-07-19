/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// Navbar

		//$('.btn-group').on('hide.bs.dropdown', function (e) {
		//	console.log("hi");
		//	if (e.clickEvent) {
		//		e.preventDefault();
		//}

		$(document).on('click', '.btn-group', function (e) {
			e.stopPropagation();
		});
});

	});

}(jQuery));
