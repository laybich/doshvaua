$('body').on('click', '[data-toggle="tab"]', function(e)
{
	e.preventDefault();
	
	for(let i = 0; i < $('.tab-s li').length; i++)
	{
		$('.tab-s li')[i].classList.remove('active')
		$('.card-s')[i].classList.remove('active')
	}

	$(this).addClass('active')
	$('.card-s')[$(this).attr('data-target')].classList.add('active')
})