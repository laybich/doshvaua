<!DOCTYPE html>
<html lang="ru">

	<?php
	if(isset($_GET['fio']))
	{
		// $email1   = 'super.matvij@gmail.com';
		$email2   = 'doshvaua@gmail.com';
		// $headers1  = 'MIME-Version: 1.0' . "\r\n";
		// $headers1 .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		// $headers1 .= 'To: <'.$email1.'>, '."\r\n";
		// $headers1 .= 'From: <doshva.com.ua>' . "\r\n";
		$headers2  = 'MIME-Version: 1.0' . "\r\n";
		$headers2 .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers2 .= 'To: <'.$email2.'>, '."\r\n";
		$headers2 .= 'From: <doshva.com.ua>' . "\r\n";
		$subject = "DoshvaUA [".$_GET['formData']."]";
		$message = "
		<br><b>ФИО: </b>".$_GET['fio']."
		<br><b>Телефон: </b>".$_GET['phone']."
		<br><b>Адресс: </b>".$_GET['adress']."
		<br><b>Траспортировочная компания: </b>".$_GET['company']."
		<br><b>Тип оплаты: </b>".$_G_GET['pay']."
		<br><b>Сумма: </b>".$_GET['sum']." грн
		<br><b>Товары: </b>".$_GET['shoesID']."
		<br>
		<br><b>Время заказа: </b>".date('d-m-Y H:i:s').";
		";

		// $mail1 = mail($email1, $subject, $message, $headers1);

		// sleep(60);

		$mail2 = mail($email2, $subject, $message, $headers2);
	?>

	<head>
		<title>Заказ отправлен!</title>
		<meta charset="UTF-8">
		<link rel="icon" href="/favicon.ico">
	</head>
	<body>
		<h1>Спасибо за заказ!</h1>
		<a href="https://doshva.com.ua/">На главную</a>
		<a href="https://doshva.com.ua/catalog">В каталог</a>

		<script>
			localStorage.removeItem('products')
		</script>
	</body>

	<?php
	}
	else if(isset($_GET['phone']))
	{
		$email1   = 'super.matvij@gmail.com';
		$email2   = 'doshvaua@gmail.com';
		$headers1  = 'MIME-Version: 1.0' . "\r\n";
		$headers1 .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers1 .= 'To: <'.$email1.'>, '."\r\n";
		$headers1 .= 'From: <doshva.com.ua>' . "\r\n";
		$headers2  = 'MIME-Version: 1.0' . "\r\n";
		$headers2 .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		$headers2 .= 'To: <'.$email2.'>, '."\r\n";
		$headers2 .= 'From: <doshva.com.ua>' . "\r\n";
		$subject    = "DoshvaUA [".$_GET['formData']."]";
		$message    = "
		<br>Телефон: ".$_GET['phone']."

		<br>Время заказа: ".date('Y-m-d H:i:s').";
		";
		
		$mail1 = mail($email1, $subject, $message, $headers1);

		sleep(60);

		$mail2 = mail($email2, $subject, $message, $headers2);
	?>

	<head>
		<title>Заказ отправлен!</title>
		<meta charset="UTF-8">
		<link rel="icon" href="/favicon.ico">
	</head>
	<body>
		<h1>Спасибо за заказ!</h1>
		<a href="https://doshva.com.ua/">На главную</a>
		<a href="https://doshva.com.ua/catalog">В каталог</a>
	</body>

	<?php
	}
	else
	{
	?>
	<head>
		<title>Каталог товаров | DoshvaUA - Каталог</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="DoshvaUA, каталог, кроссовки, купить кроссовки, купить кроссовки в украине">
		<meta name="description" content="DoshvaUA - Каталог | Кроссовки на любой вкус, кроссовки мужские, кроссовки женские, кроссовки подростковые">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap">
		<link rel="stylesheet" href="/css/main.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="icon" href="/favicon.ico">
		<link rel="stylesheet" href="catalog.min.css">
	</head>

	<body>
		<main>
			<header id="header">
				<div class="header__top">
					<div class="container">
						<div class="row">
							<div class="col-8 col-lg-3 col-md-4 d-flex align-items-center">
								<div class="header__logo">
									<a href="/">
										<img src="/img/logo.png" class="mx-auto d-block" alt="DoshvaUA" title="Главная страница DoshvaUA">
									</a>
								</div>
							</div>
							<div class="col-4 col-lg-5 offset-lg-4 col-md-6 offset-md-2 d-flex align-items-center justify-content-around">
								<a class="btn" data-toggle="modal" data-target="#call-modal">
									<svg viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28.7479 38.6999C27.4567 38.6999 26.1765 38.4804 24.9246 38.043C19.4093 36.1163 14.29 32.9783 10.1198 28.9681C5.94966 24.9579 2.68651 20.0347 0.683065 14.7309C0.0392613 13.0264 -0.150732 11.2669 0.118555 9.50114C0.370811 7.84714 1.03704 6.24145 2.04528 4.85761C3.05798 3.46768 4.40808 2.31163 5.94958 1.51446C7.59343 0.664394 9.38766 0.233315 11.2826 0.233315C11.8719 0.233315 12.3813 0.629309 12.5048 1.18345L14.4668 9.98826C14.5556 10.387 14.4282 10.8018 14.1284 11.0902L10.776 14.314C13.9385 20.3607 19.0702 25.2956 25.3579 28.3369L28.7103 25.113C29.01 24.8247 29.4415 24.7023 29.8561 24.7876L39.0119 26.6744C39.5882 26.7931 39.9999 27.283 39.9999 27.8497C39.9999 29.672 39.5517 31.3975 38.6676 32.9783C37.8387 34.4608 36.6366 35.7591 35.1912 36.733C33.7523 37.7026 32.0826 38.3432 30.3626 38.5858C29.8236 38.6619 29.2847 38.6999 28.7479 38.6999ZM10.2839 2.68997C7.78436 2.95532 5.56585 4.2152 4.09262 6.23724C2.43597 8.51096 2.04965 11.3076 3.03274 13.9101C6.88447 24.1068 15.1749 32.0794 25.7781 35.7834C28.4843 36.7288 31.3925 36.3574 33.7568 34.7642C35.8595 33.3474 37.1696 31.214 37.4455 28.8103L29.9973 27.2754L26.4962 30.6423C26.1236 31.0006 25.5575 31.0958 25.0808 30.8803C17.6444 27.5207 11.6249 21.732 8.1313 14.5806C7.90732 14.1221 8.00623 13.5778 8.37879 13.2196L11.8799 9.85266L10.2839 2.68997Z" fill="white" fill-opacity="0.77"/>
										<path d="M38.7493 20.6679C38.059 20.6679 37.4993 20.1297 37.4993 19.4658C37.4993 10.1866 29.6491 2.63738 20 2.63738C19.3097 2.63738 18.75 2.09917 18.75 1.43535C18.75 0.771525 19.3097 0.233315 20 0.233315C25.342 0.233315 30.3643 2.2338 34.1416 5.86634C37.919 9.49889 39.9992 14.3286 39.9992 19.4658C39.9992 20.1297 39.4396 20.6679 38.7493 20.6679Z" fill="white" fill-opacity="0.77"/>
										<path d="M33.7494 20.6679C33.0591 20.6679 32.4995 20.1297 32.4995 19.4659C32.4995 12.8379 26.8922 7.44553 20 7.44553C19.3097 7.44553 18.75 6.90732 18.75 6.2435C18.75 5.57968 19.3097 5.04147 20 5.04147C28.2707 5.04147 34.9994 11.5122 34.9994 19.4659C34.9994 20.1297 34.4398 20.6679 33.7494 20.6679Z" fill="white" fill-opacity="0.77"/>
										<path d="M28.7496 20.6679C28.0593 20.6679 27.4997 20.1297 27.4997 19.4659C27.4997 15.489 24.1353 12.2537 20 12.2537C19.3097 12.2537 18.75 11.7154 18.75 11.0516C18.75 10.3878 19.3097 9.84959 20 9.84959C25.5138 9.84959 29.9996 14.1634 29.9996 19.4659C29.9996 20.1297 29.44 20.6679 28.7496 20.6679Z" fill="white" fill-opacity="0.77"/>
									</svg>
								</a>
								<p class="tel d-none d-md-block">
									<a href="#">doshvaua@gmail.com</a>
									<a href="tel:+380684301782">+380684301782</a>
								</p>
								<button class="basket-btn">
									<i class="fa fa-shopping-basket"></i>
									<span class="counter">0</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</header>

			<section id="catalog">
				<div class="container">
					<p class="subtitle">К А Т А Л О Г</p>
					<h2>Каталог кроссовок</h2>

					<ul class="bold d-block d-md-flex justify-content-around tabs tab-s">
						<li data-toggle="tab" data-target="0" class="<?php if(isset($_GET['tabID'])) { $_GET['tabID'] == 1 ? print 'active' : print ''; } else { echo 'active'; }?>"><a href="">Мужские кроссовки</a></li>
						<li data-toggle="tab" data-target="1" class="<?php if(isset($_GET['tabID'])) { $_GET['tabID'] == 2 ? print 'active' : print ''; } ?>"><a href="">Женские кроссовки</a></li>
						<li data-toggle="tab" data-target="2" class="<?php if(isset($_GET['tabID'])) { $_GET['tabID'] == 3 ? print 'active' : print ''; } ?>"><a href="">Кроссовки для мальчиков</a></li>
					</ul>

					<ul id="0" class="card-s <?php if(isset($_GET['tabID'])) { $_GET['tabID'] == 1 ? print 'active' : print ''; } else { echo 'active'; }?>"></ul>
					<ul id="1" class="card-s <?php if(isset($_GET['tabID'])) { $_GET['tabID'] == 2 ? print 'active' : print ''; } ?>"></ul>
					<ul id="2" class="card-s <?php if(isset($_GET['tabID'])) { $_GET['tabID'] == 3 ? print 'active' : print ''; } ?>"></ul>
					<a href="#" class="btn btn-catalog">
						Загрузить ещё
						<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="292.362px" height="292.362px" viewBox="0 0 292.362 292.362" style="enable-background:new 0 0 292.362 292.362;"
	 xml:space="preserve"><g>
							<path d="M286.935,69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952,0-9.233,1.807-12.85,5.424
							C1.807,72.998,0,77.279,0,82.228c0,4.948,1.807,9.229,5.424,12.847l127.907,127.907c3.621,3.617,7.902,5.428,12.85,5.428
							s9.233-1.811,12.847-5.428L286.935,95.074c3.613-3.617,5.427-7.898,5.427-12.847C292.362,77.279,290.548,72.998,286.935,69.377z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
						</svg>

					</a>
				</div>
			</section>

			<footer>
				<div class="container white">
					<div class="footer-top">
						<p class="footer-title text-md-right text-center">Распродажа известных брендов спортивной обуви</p>
						<div class="d-md-flex justify-content-between align-items-center">
							<div class="logo">
								<img src="/img/logo.png" alt="DoshvaUA Shoes">
							</div>
							<div class="tel">
								<button class="btn btn-footer" data-toggle="modal" data-target="#call-modal">Заказать звонок</button>
							</div>
						</div>
					</div>
					<div class="social-icons">
						<ul>
							<li><a href="viber:%2B380684301782" target="_blank" class="viber" title="Viber"></a></li>
							<li><a href="https://www.instagram.com/doshva.com.ua/" target="_blank" class="instagram" title="Instagram"></a></li>
    						<li><a href="#" target="_blank" class="email" title="E-mail"></a></li>
						</ul>
					</div>
					<div class="footer-bottom d-sm-flex justify-content-between text-center text-sm-left">
						<p class="copyright">© Интернет-магазин Doshva.com.ua, 2020</p>
						<div class="pays">
								<i title="Cash" class="cacsh"></i>
								<i title="MasterCard" class="mastercard"></i>
								<i title="Visa" class="visa"></i>
						</div>
					</div>
				</div>
			</footer>
		</main>

		<div class="modal fade call" id="call-modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="form-call">
						<div class="modal-header">
							<button type="button" class="close">×</button>
							<h4 class="modal-title">Заказать обратный звонок</h4>
							<p class="after-modal-title">Оставьте свой номер телефона и наши менеджеры свяжутся с вами в ближайшее время</p>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<input type="text" name="phone" class="phone" placeholder="(xxx) xxx-xx-xx" required="required">
							</div>
							<input type="hidden" name="formData" value="Заказ обратного звонка">
							<button type="submit" class="btn btn-call">Перезвоните мне</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="form-order modal fade" id="order-modal">
			<h3 class="text-center">Заполните форму заказа, мы вам передзвоним!</h3>
			<button type="button" class="close">×</button>
			<form action="#">
				<p>Введите ФИО:</p>
				<input type="text" name="fio" placeholder="Иван Иванович Иванов" required="required">
				<p>Введите телефон:</p>
				<input type="tel" name="phone" placeholder="(xxx) xxx-xx-xx" required="required">
				<p>Введите адресс и номер отделения почты:</p>
				<input type="text" name="adress" placeholder="г.Ровно, ул.Дубенская 46, отделение 15" required="required">
				<p>Выберите транспортировочную компанию:</p>
				<label><input type="radio" name="company" value="Новая почта" required="required">Новая почта</label>
				<label><input type="radio" name="company" value="Укрпочта" required="required">Укрпочта</label>
				<p>Выберите тип оплаты:</p>
				<label><input type="radio" name="pay" value="Наложеный платёж" required="required">Наложеный платёж</label>
				<label><input type="radio" name="pay" value="Полная передоплата" required="required">Полная передоплата</label>
				<label><input type="radio" name="pay" value="Частичная передоплата" required="required">Частичная</label>
				<input type="hidden" name="formData" value="Заказ товара">
				<input type="hidden" name="shoesID" value="">
				<input type="hidden" name="sum" value="">
				<button type="submit" class="btn btn-card"></button>
			</form>
		</div>

		<div class="contacts-icon d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#call-modal">
			<svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17.544 25.215" enable-background="new 0 0 17.544 25.215" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M12.22,6.784c-0.135,0.871-1.654,4.073-2.084,4.89c-0.576,1.087-2.779,4.344-3.724,5.065l0,0l-0.775,0.532l-1.879-0.616L0,20.653l0.129,1.043l2.123,2.832l0.916,0.687c0,0,13.474-8.596,14.376-24.03c0,0-0.266-0.297-0.777-0.87L13.228,0l-1.16,0.454l-1.029,4.941l1.127,1.23"></path></svg>
		</div>

		<div class="basket">
			<div class="header__basket">
				<button type="button" class="close">×</button>
			</div>

			<div class="body__basket">
				<ul>

				</ul>
			</div>

			<div class="footer__basket">
				<button class="btn btn-buy" data-toggle="modal" data-target="#order-modal">Заказать</button>
			</div>
		</div>
		<div class="modal-backdrop fade"></div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="/js/modal_alerts.min.js"></script>
		<script src="/js/tabs.min.js"></script>
		<script src="/js/basket.min.js"></script>
		<script>
			let shoes = [updateShoes('84676759', '61727152'), updateShoes('84701773', '61719240'), updateShoes('84703174', '53897871')]
			let counts = [0, 0, 0]

			$('.btn-catalog').on('click', function(e) {
				e.preventDefault()
				addShoes()
			})

			function addShoes(num = document.querySelector('.card-s.active').id)
			{
				counts[num] += 8

				for(let i = counts[num] - 8; i < counts[num]; i++)
				{
					$(`.card-s[id=${ num }]`).append(
						`<li class="item">
							<a href="/product/?offerID=${ shoes[num][i].getAttribute('id') }" target="_blank">
								<img src="${ shoes[num][i].querySelector('picture').innerHTML }">
								<p class="card-title"><strong>${ shoes[num][i].querySelector('name').innerHTML }</strong></p>
								<p class="price">${ shoes[num][i].querySelector('price').innerHTML } грн.</p>
								<span class="btn btn-card">Подробнее</span>
							</a>
						</li>`)
				}
			}

			addShoes(0)
			addShoes(1)
			addShoes(2)

			$('footer .email').attr('href', 'mailto:doshvaua@gmail.com')
		</script>
	</body>

	<?php } ?>
</html>