$('body').on('click', 'a[href^="#"]', function(event)
{
	event.preventDefault()
	if($($(this).attr("href")))
	{
		let Y = $($(this).attr("href")).offset().top
		$('html, body').animate({scrollTop: Y}, 1000)
	}
});