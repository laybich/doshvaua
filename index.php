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
			// Clean basket
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
		<title>Интернет-магазин кроссовок DoshvaUA - Главная | Заказать стильные фирменные кроссовки в Украине недорого</title>
		<meta charset="UTF-8">
		<meta name="keywords" content="DoshvaUA, главная, кроссовки, купить кроссовки дешево, кроссовки nike, кроссовки adidas">
		<meta name="description" content="DoshvaUA - Заказать стильные кроссовки в Украине недорого, доставка по всей Украине, кроссовки мужские/женские/детские">
		<meta property="og:title" content="Интернет-магазин кроссовок DoshvaUA">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://doshva.com.ua/">
		<meta property="og:image" content="https://doshva.com.ua/img/banner.jpg">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="bdSNPQvo4loyGckHuwYqoUkGd320c45BHuuXiwNzNAE" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/css/main.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="icon" href="/favicon.ico">
	</head>

	<body>
		<main>
			<header id="header">
				<div class="header__top">
					<div class="container">
						<div class="row">
						<div class="col-12 col-md-3 d-flex align-items-center justify-content-between">
								<a href="" class="d-md-none bars">
									<i class="fa fa-bars"></i>
								</a>
								<div class="header__logo">
									<img src="/img/logo.png" alt="DoshvaUA Интернет-Магазин кроссовок" title="Главная страница DoshvaUA">
								</div>
								<button class="basket-btn d-md-none">
									<i class="fa fa-shopping-basket"></i>
									<span class="counter">0</span>
								</button>
							</div>
							<div class="col-md-8 offset-lg-1 d-none d-md-flex align-items-center justify-content-around">
								<div class="header__menu">
									<nav>
										<ul class="bold d-md-flex">
											<li><a href="#header">Главная</a></li>
											<li><a href="#advantages">Преимущества</a></li>
											<li><a href="#catalog">Каталог</a></li>
											<li class="d-none d-lg-block">
												<ul class="d-none d-lg-flex">
													<li><a href="#reviews">Отзывы</a></li>
													<li><a href="#contacts">Фидбек</a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
								<button class="basket-btn d-none d-md-block">
									<i class="fa fa-shopping-basket"></i>
									<span class="counter">0</span>
								</button>
							</div>
							<div class="col-1 d-lg-none d-md-flex d-none align-items-center">
								<a href=""><i class="fa fa-bars bars"></i></a>
								<button class="basket-btn d-md-none">
									<i class="fa fa-shopping-basket"></i>
									<span class="counter">0</span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="header__bottom">
					<div class="container">
						<h1>Стильные фирменные кроссовки<br><span class="heading-str">высокого качества</span></h1>
						<p class="header__subtitle">Будь современным. Обнови свой ассортимент в <em>DoshvaUA</em></p>
						<a href="#catalog" class="btn header__btn">Посмотреть каталог</a>
					</div>
				</div>
			</header>

			<section id="advantages">
				<div class="container">
					<p class="subtitle">Н А Д Е Ж Н О С Т Ь</p>
					<h2>Почему у нас выгодно</h2>
					<ul class="icons text-center row">
						<li class="col-md-6 col-lg-3">
							<img src="/img/coin.svg" alt="Выгодная цена">
							<p class="icon-title">Цена</p>
							<p>Стоимость нашей обуви намного ниже чем у конкурентов</p>
						</li>
						<li class="col-md-6 col-lg-3">
							<img src="/img/truck.svg" alt="Выгодная цена">
							<p class="icon-title">Доставка, поддержка</p>
							<p>Принимаем <em>заказы в любой день</em>, как вам удобно</p>
						</li>
						<li class="col-md-6 col-lg-3">
							<img src="/img/money.svg" alt="Выгодная цена">
							<p class="icon-title">Оплата</p>
							<p><em>Гибкость оплаты</em>, выберете самый удобный для вас вариант</p>
						</li>
						<li class="col-md-6 col-lg-3">
							<img src="/img/round.svg" alt="Выгодная цена">
							<p class="icon-title">Обмен, возврат</p>
							<p>Если не подошёл размер, <em>товар можно вернуть/обменять</em> в течении 2 недель</p>
						</li>
					</ul>
				</div>
			</section>

			<section id="catalog">
				<div class="container">
					<p class="subtitle">К А Т А Л О Г</p>
					<h2>Каталог кроссовок</h2>
					<ul class="card-s text-center owl-carousel">
						<li class="item">
							<a href="/product/?offerID=1187375003">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2397834472_muzhskie-krossovki-tekstilnye-min.jpg" alt="Мужские кроссовки текстильные летние красные Lions JD Red">
								<p class="card-title"><strong>Мужские кроссовки текстильные летние красные Lions JD Red</strong></p>
								<p class="price">835 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
						<li class="item">
							<a href="/product/?offerID=1178379839">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2380243909_zhenskie-krossovki-kozhanye-min.jpg" alt="Женские кроссовки кожаные летние белые Yuves 778 Сетка">
								<p class="card-title"><strong>Женские кроссовки кожаные летние белые Yuves 778 Сетка</strong></p>
								<p class="price">1140 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
						<li class="item">
							<a href="/product/?offerID=1170249112">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2349587980_muzhskie-krossovki-tekstilnye-min.jpg" alt="Мужские летние кроссовки Splinter Trend 1819/2">
								<p class="card-title"><strong>Мужские летние кроссовки Splinter Trend 1819/2</strong></p>
								<p class="price">1010 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
						<li class="item">
							<a href="/product/?offerID=1135885217">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2254374208_muzhskie-krossovki-kozhanye-min.jpg" alt="Мужские кроссовки кожаные весна/осень белые-белые Lions R16">
								<p class="card-title"><strong>Мужские кроссовки кожаные весна/осень белые-белые Lions R16</strong></p>
								<p class="price">1040 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>

						<li class="item">
							<a href="/product/?offerID=1173230399">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2366867506_muzhskie-krossovki-kozhanye-min.jpg" alt="Кроссовки мужские кожаные красные Splinter Terrex 1919">
								<p class="card-title"><strong>Кроссовки мужские кожаные красные Splinter Terrex 1919</strong></p>
								<p class="price">1040 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
						<li class="item">
							<a href="/product/?offerID=1177538269">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2380244097_zhenskie-krossovki-kozhanye-min.jpg" alt="Женские кроссовки кожаные весна/осень белые-белые Carlo Pachini 4620/1/20-99 б">
								<p class="card-title"><strong>Женские кроссовки кожаные весна/осень белые-белые Carlo Pachini 4620/1/20-99 б</strong></p>
								<p class="price">1570 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
						<li class="item">
							<a href="/product/?offerID=1170249109">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2349588040_muzhskie-krossovki-kozhanye-min.jpg" alt="Кроссовки мужские кожаные черные CrosSAV 317-ч-ч">
								<p class="card-title"><strong>Кроссовки мужские кожаные черные CrosSAV 317-ч-ч</strong></p>
								<p class="price">1070 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
						<li class="item">
							<a href="/product/?offerID=1178379837">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="https://images.ua.prom.st/2380243960_zhenskie-krossovki-kozhanye-min.jpg" alt="Женские кроссовки кожаные весна/осень белые Onward Tommy 252">
								<p class="card-title"><strong>Женские кроссовки кожаные весна/осень белые Onward Tommy 252</strong></p>
								<p class="price">1200 грн.</p>
								<p class="btn btn-card">Подробнее</p>
							</a>
						</li>
					</ul>

					<a href="/catalog" class="btn btn-catalog">Смотреть все</a>
				</div>
			</section>

			<section id="pay">
				<div class="container">
					<p class="subtitle">
						Д О С Т А В К А &nbsp;&nbsp;И &nbsp;&nbsp;О П Л А Т А</p>
					<h2>Условия оплаты и доставки</h2>
					<div class="row align-items-center">
						<div class="col-lg-6">
							<img src="/img/card-min.jpg" alt="Условия оплаты и доставки">
						</div>
						<div class="col-lg-6">
							<p><strong>Доставка по всей Украине</strong> - осуществляется через транспортные компании <em>"Новая почта"</em>, <em>"Укрпочта"</em>.</p>
							<p>&nbsp;</p>
							<p><strong>Наложенный платеж</strong>. Вы оплачиваете полную стоимость покупки, транспортировки и возврата денег при получении товара.</p>
							<p>&nbsp;</p>
							<p><strong>Полная предоплата</strong>. Покупатель перечисляет суму на карту, оплачивая 100% стоимость приобретения. Услугу перевозки при этом клиент оплачивает при получении покупки.</p>
							<p>&nbsp;</p>
							<p><strong>Частичная предоплата</strong>. Клиент сначала перечисляет нам не менее 10% от общей суммы, предоплачивая цену транспортировки товара, а остальное - в момент получения посылки</p>
						</div>
					</div>
				</div>
			</section>

			<section id="reviews">
				<div class="container">
					<p class="subtitle">О Т З Ы В Ы</p>
					<h2 class="white">Отзывы о нашем магазине</h2>
					<div class="d-grid text-center">
						<div class="item">
							<div class="reviews__avatar">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="/img/review-min.jpg" alt="review">
							</div>
							<p class="reviews__name">Наталья</p>
							<p class="reviews__text">Все что указано в договоре, было выполнено в срок, поэтому могу поставить вашей компании "отлично" и советовать другим обращаться только к вам. Приятно удивлена уровнем цен. Спасибо вам большое!</p>
						</div>
						<div class="item">
							<div class="reviews__avatar">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="/img/review2-min.jpg" alt="review">
							</div>
							<p class="reviews__name">Светлана</p>
							<p class="reviews__text">Спасибо за такой прекрасный нет-магазин и за хорошее обслуживание! Заказывала несколько пар и когда одни не подошли, то деньги вернули сразу на счет... Кроссовки хорошего качества и за хорошую цену. Удачи вам</p>
						</div>
						<div class="item">
							<div class="reviews__avatar">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="/img/review3-min.jpg" alt="review">
							</div>
							<p class="reviews__name">Александр</p>
							<p class="reviews__text">Рекомендую. Качество товара на высоте!! И самое главное хорошее обслуживание: отправили быстро и в короткие сроки смогли поменять товар (выбранный мною размер к сожалению не подошёл, сообщил и мне отправили тот же товар но на размер меньше)!</p>
						</div>
						<div class="item">
							<div class="reviews__avatar">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="/img/review4-min.jpg" alt="review">
							</div>
							<p class="reviews__name">Елена</p>
							<p class="reviews__text">Заказом довольна AIR MAX подошли по размеру. Доставили быстро. Качество отменное! Надеюсь при носке не разочаруюсь.</p>
						</div>
						<div class="item">
							<div class="reviews__avatar">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="/img/review5-min.jpg" alt="review">
							</div>
							<p class="reviews__name">Мария</p>
							<p class="reviews__text">Заказ пришёл невероятно быстро, уже через двое суток после оформления заказа, вместо ожидаемых 10-14 дней. Менеджеры предельно корректны и доброжелательны, помогли подобрать очень красивые и удобные кроссовки. Спасибо.</p>
						</div>
						<div class="item">
							<div class="reviews__avatar">
								<img class="lazy" src="https://i.gifer.com/origin/a1/a1bb0cc10512df82afd421a77097cb91_w200.gif" data-original="/img/review6-min.jpg" alt="review">
							</div>
							<p class="reviews__name">Паша</p>
							<p class="reviews__text">Моему счастью нет предела!!! Недавно заказал и получил посылочку – мои долгожданные hyperdunk. Очень переживал за то какого качества они будут, подойдет ли размер, но к счастью мои опасения были напрасны. Очень доволен!</p>
						</div>
					</div>
				</div>
			</section>

			<section id="contacts">
				<div class="white-back">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-6 form">
								<p class="subtitle">О Б Р А Т Н А Я &nbsp;&nbsp;С В Я З Ь</p>
								<h2>Напишите нам</h2>
								Задайте свой вопрос и мы обязательно свяжемся с вами
								<form action="#">
									<p>Введите имя</p>
									<input type="text" name="name" placeholder="Введите имя" required="required">
									<p>Введите телефон</p>
									<input type="tel" name="phone" placeholder="(xxx) xxx-xx-xx" required="required">
									<p>Задайте ваш вопрос</p>
									<input type="text" name="question" placeholder="Задайте ваш вопрос" required="required">
									<button type="submit" class="btn btn-contacts">Отправить</button>
								</form>
							</div>
							<div class="col-sm-12 col-md-6 back"></div>
						</div>
					</div>
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
					<form id="form-call" action="#">
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

		<div class="contacts-icon d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#call-modal">
			<svg id="bingc-phone-button-icon-icon" class="bingc-phone-button-icon-icon bingc-phone-button-icon-show" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17.544 25.215" enable-background="new 0 0 17.544 25.215" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M12.22,6.784c-0.135,0.871-1.654,4.073-2.084,4.89c-0.576,1.087-2.779,4.344-3.724,5.065l0,0l-0.775,0.532l-1.879-0.616L0,20.653l0.129,1.043l2.123,2.832l0.916,0.687c0,0,13.474-8.596,14.376-24.03c0,0-0.266-0.297-0.777-0.87L13.228,0l-1.16,0.454l-1.029,4.941l1.127,1.23"></path></svg>
		</div>

		<div class="modal-backdrop fade"></div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer="defer"></script>
		<script src="/js/lazy.min.js" defer="defer"></script>
		<script src="/js/scrolling.min.js" defer="defer"></script>
		<script src="/js/modal_alerts.min.js" defer="defer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer="defer"></script>
		<script src="/js/basket.min.js" defer="defer"></script>
		<script src="/js/main.min.js" defer="defer"></script>
	</body>

	<?php } ?>

</html>