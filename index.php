<?php include ("modules/include-head.php");?>

<body>

	<?php include ("modules/nav.php");?>

	<main class="main">
		<div class="main--info">
			<div class="main--search">
				<span>Ищем в команду</span>
				<button></button>
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="main--wrap">
				<div class="main--title">
					<h1>PR Менеджера</h1>
					<p>Специалиста, cпособного представлять интересы нашей фирмы в международных проектах</p>
					<button class="toForm pc">Откликнуться</button>
				</div>
			</div>
			<button class="toForm mob">Откликнуться</button>
		</div>
		<picture class="main--frame"><source srcset="img/frame-1.webp" type="image/webp">
			<img src="img/frame-1.png" alt="">
		</picture>
	</main>
	<section class="about">
		<div class="container">
			<div class="about--wrap">
				<picture class="about--frame"><source srcset="img/frame-2.webp" type="image/webp">
					<img src="img/frame-2.jpg" alt="frame-2">
				</picture>
				<div class="about--info">
					<b>О вакансии</b>
					<p>В дружную IT компанию нужен <strong>PR Менеджер</strong> с опытом работы или желающий попробовать свои силы в данном направлении.</p>
					<p>Работая удаленно, ты можешь подтянуть свои знания английского и усовершенствоваться как крутой <strong>PR Менеджер</strong>.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="required" id="required">
		<div class="container">
			<span>тебе предстоит</span>
			<div class="required--wrap">
				<div class="required--item">
					<div class="required--folder"><img src="img/folder.svg" alt="folder"></div>
					<div class="required--info"><span>Публикация рекламы</span></div>
				</div>
				<div class="required--item">
					<div class="required--folder"><img src="img/folder.svg" alt="folder"></div>
					<div class="required--info"><span>Работа с таблицами</span></div>
				</div>
				<div class="required--item">
					<div class="required--folder"><img src="img/folder.svg" alt="folder"></div>
					<div class="required--info"><span>Анализ сайтов</span></div>
				</div>
			</div>
		</div>
	</section>
	<section id="company" class="company">
		<div class="container">
			<div class="company--wrap">
				<div class="company--info">
					<b>О НАС</b>
					<p>Аутстаффинговая компания <strong>RemotEmplyees</strong> - это дружеский колектив, который готов всегда поддержать и помочь в обучении. </p>
					<p>Мы предоставляем рабочие места в Украине ориентируясь на международный рынок.</p>
					<p>Если ты хочешь попробовать себя как <strong>PR Менеджер</strong>, а также любишь учиться всему новому и знаешь английский - запиши видео о себе и начни работать с нами уже в понедельник. </p>
				</div>
				<picture class="company--frame"><source srcset="img/frame-3.webp" type="image/webp">
					<img src="img/frame-3.jpg" alt="frame-3">
				</picture>
			</div>
		</div>
	</section>
	<section class="offer">
		<div class="container">
			<span>Мы  предлагаем</span>
			<div class="offer--wrap">
				<div class="offer--item">
					<span>Международные проекты</span>
				</div>
				<div class="offer--item">
					<span>Удобный график работы </span>
				</div>
				<div class="offer--item">
					<span>Работу в дружной команде</span>
				</div>
				<div class="offer--item">
					<span>Стабильная выплата зарплаты</span>
				</div>
			</div>
		</div>
	</section>
	<section id="join" class="join">
		<div class="container">
			<div class="join--wrap">
				<div class="join--img">
					<picture><source loading="lazy" srcset="img/frame-4.webp" type="image/webp">
						<img loading="lazy" src="img/frame-4.png" alt="frame-4">
					</picture>
				</div>
				<div class="join--info">
					<span>Присоединяйся к нам</span>
					<form name="formJoin" method="POST" action="#">
						<div class="input-wrap"><input type="name" name="name" placeholder="Фамилия,  Имя"></div>
						<div class="input-wrap"><input type="tel" name="phone" placeholder="+38"></div>
						<div class="input-wrap"><input type="email" name="email" placeholder="E - mail"></div>
						<button type="submit">Откликнутся</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php include ("modules/footer.php");?>
	<?php include ("modules/include-bottom.php");?>

</body>
</html>
