$('body').on('click', '[data-toggle="modal"]', function()
{
	$(this.getAttribute('data-target')).addClass('in')
	$('.modal-backdrop').addClass('in')
})

$('body').on('click', '.close, .modal-backdrop', function()
{
	$('.modal').removeClass('in')
	$('.modal-backdrop').removeClass('in')
})