$(document).ready(function(){

	$('.fsf-zoller-slidertext').each(function () {
		id = $(this).attr('id')
		$('#' + id).find(".fsf-zoller-slidertext-container-left").slick({
			arrows: true,
			infinite: false,
			asNavFor: '.fsf-zoller-slidertext-container-right',
		});
		$('#' + id).find(".fsf-zoller-slidertext-container-right").slick({
			arrows: false,
			infinite: false,
			asNavFor: '.fsf-zoller-slidertext-container-left',
			speed: 1,
		});
	})
});
