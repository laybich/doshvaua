var products = []
var id = 0

var total_price = 0;
var IDs = ''

// Help functions
function updateShoes(categoryId = 0, categoryId2 = 0)
{
	// Call middleman.php, that write info about shoes to path /shoes.xml
	$.get('/update.php', {'site':'https://butikobuff.com.ua/yandex_market.xml?hash_tag=fa01e413d576ae7b1d12c8bad24040ac&sales_notes=&product_ids=&group_ids=&label_ids=&exclude_fields=&html_description=1&yandex_cpa=&process_presence_sure=1'})
	
	// Parse XML
	const xhr = new XMLHttpRequest()
	xhr.open('GET', '/shoes.xml', false)
	xhr.send()

	let shoes = xhr.responseXML.querySelectorAll('offer')
	let shoesArray = [0]

	// Filter
	for(let i = 0; i < shoes.length; i++)
	{
		if(xhr.responseXML.querySelector('offer[id="' + shoes[i].id + '"] categoryId').innerHTML == categoryId)
		{
			shoesArray[shoesArray.length - 1] = shoes[i]
			shoesArray[shoesArray.length] = 0
		}
		if(xhr.responseXML.querySelector('offer[id="' + shoes[i].id + '"] categoryId').innerHTML == categoryId2)
		{
			shoesArray[shoesArray.length - 1] = shoes[i]
			shoesArray[shoesArray.length] = 0
		}
	}

	return shoesArray
}

function getShoe(offerID)
{
	// Parse XML
	const xhr = new XMLHttpRequest()
	xhr.open('GET', '/shoes.xml', false)
	xhr.send()

	return xhr.responseXML.querySelector(`offer[id="${ offerID }"]`)
}

// Open the basket
$('.basket-btn').click(function() {
	$('.basket').addClass('active')
	$('.modal-backdrop').addClass('in')
})

// Close the basket
$('.modal-backdrop, .close').click(function() {
	$('.basket').removeClass('active')
	$('.modal-backdrop').removeClass('in')
	$('main').css('display', 'block');
})

// Fill basket
if(localStorage.getItem('products'))
{
	products = JSON.parse(localStorage.getItem('products'))

	for(let i = 0; i < products.length; i++)
	{
		let shoe = getShoe(products[i].id)

		$('.body__basket ul').append(
			`<li id="${ id }">
				<img src="${ shoe.querySelector('picture').innerHTML }">
				<p class="title__backet">
					<strong> ${ shoe.querySelector('name').innerHTML } </strong><br>
					<span> ${ shoe.querySelector('price').innerHTML } грн</span>
				</p>
				<p class="remove">
					<button>×</button>
				</p>
			</li>`)

		total_price += Number(shoe.querySelector('price').innerHTML)
		IDs += (`${ products[i].id } : ${ products[i].size }, `)
		
		id++
	}

	$('.counter').html(products.length)
}

$('#order-modal .btn-card').html(`Заказать (${ total_price } грн)`)
$('[name="shoesID"]').attr('value', IDs)
$('[name="sum"]').attr('value', `${ total_price }`)

// Remove item
$('body').on('click', '.remove button', function() {
	this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode) // Delete itself

	let items = $('.body__basket li')
	let item_n

	for(let i = 0; i < items.length; i++)
		if(items[i].getAttribute('id') === this.parentNode.parentNode.getAttribute('id')) // this - button, this.parentNode - p, this.parentNode.parentNode - li
		{
			id--
			item_n = i

			break
		}

	if(!item_n)
		total_price -= products.splice(0, 1)[0].price
	else
		total_price -= products.splice(item_n, item_n)[0].price

	$('[name="sum"]').attr('value', `${ total_price }`)
	$('#order-modal .btn-card').html(`Заказать (${ total_price } грн)`)

	localStorage.removeItem('products')
	localStorage.setItem('products', JSON.stringify(products))
	$('.counter').html(products.length)
})

// Modal 'buy'
$('.btn-buy').click(function() {
	$('.basket').removeClass('active')
	$('main').css('display', 'none')
})