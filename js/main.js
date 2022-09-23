// Burger menu
$('body').on('click', '.bars', function(e)
{
	e.preventDefault()
	$('.header__top .col-md-8').removeClass('d-none')
	$('.header__menu .d-lg-flex').removeClass('d-none')
	$('.header__menu .d-lg-block').removeClass('d-none')
	$('.modal-backdrop').addClass('in')
})

let close = function()
{
	$('.header__top .col-md-8').addClass('d-none')
	$('.header__menu .d-lg-flex').addClass('d-none')
	$('.header__menu .d-lg-block').addClass('d-none')
	$('.modal-backdrop').removeClass('in')
}

$('.close, .modal-backdrop').click(close)

// Init carousel
$('.owl-carousel').owlCarousel({
	margin:10,
	nav:true,
	dots:false,
	responsive:{
		0:{
			items:1
		},
		550:{
			items:2
		},
		930:{
			items:3
		},
		1200:{
			items:4
		}
	}
})

$(document).ready(function () {
	$("img.lazy").lazyload({
		effect : "fadeIn"
	});

	$('footer .email').attr('href', 'mailto:doshvaua@gmail.com')
});