<?include('header.php');?>
<div class="home-page">
	<div class="carousel m-full-width s-full-width">
		<div class="carousel-inner">
			<div class="item">
				<div class="item-img">
					<img src="images/content/slide-1.jpg" />
				</div>
				<div class="item-title">Помощь среднему и <br/>малому бизнесу в ЯНАО</div>
			</div>
			<div class="item">
				<div class="item-img">
					<img src="images/content/slide-2.jpg" />
				</div>
				<div class="item-title">Помощь среднему и <br/>малому бизнесу в ЯНАО</div>
			</div>
			<div class="item">
				<div class="item-img">
					<img src="images/content/slide-3.jpg" />
				</div>
				<div class="item-title">Помощь среднему и <br/>малому бизнесу в ЯНАО</div>
			</div>
		</div>
		<ul class="carousel-pagination"></ul>
	</div>
	<div class="measures-block row">
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#microfinance"/></svg>
				</div>
				<div class="item-title">Микрофинансирование</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#zaim"/></svg>
				</div>
				<div class="item-title">Целевые займы</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#lease"/></svg>
				</div>
				<div class="item-title">Лизинг</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#grants"/></svg>
				</div>
				<div class="item-title">Гранты, субсидии, компенсации</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#navigator"/></svg>
				</div>
				<div class="item-title">Навигатор мер поддержки</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#guarantee"/></svg>
				</div>
				<div class="item-title">Поручительство</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon hide-on-small-only">
					<svg class="icon"><use xlink:href="#support"/></svg>
				</div>
				<div class="item-title">Сопровождение проектов</div>
			</a>
		</div>
	</div>
	<div class="news-block row">
		<div class="news col l6 m12 s12">
			<div class="tab-header">
				<div class="hide-on-med-and-up">
					<select id="news-tabber" class="type-2" data-tab-content="news-content">
						<option value="v1" selected>Новости группы</option>
						<option value="v2">Официально</option>
						<option value="v3">Пресса</option>
					</select>
					<label for="news-tabber" class="triangle"></label>
				</div>
				<div class="tab-box hide-on-small-only">
					<ul class="tabs-list select-synh" data-select="news-tabber">
						<li class="tab-item">
							<input class="tab-inp" type="radio" name="news-cat-rad" value="v1" id="news-cat-v1" checked="checked"/>
							<label class="tab-title" for="news-cat-v1">Новости группы</label>
						</li>
						<li class="tab-item">
							<input class="tab-inp" type="radio" name="news-cat-rad" value="v2" id="news-cat-v2"/>
							<label class="tab-title" for="news-cat-v2">Официально</label>
						</li>
						<li class="tab-item">
							<input class="tab-inp" type="radio" name="news-cat-rad" value="v3" id="news-cat-v3"/>
							<label class="tab-title" for="news-cat-v3">Пресса</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab-content" id="news-content">
				<div class="news-item content-item" data-tab="v1">
					<div class="item-img">
						<a href="#"><img src="images/content/news-img-1.jpg" /></a>
					</div>
					<div class="item-title"><a href="#">Более 5,5 млрд рублей частных инвестиций направлено в экономику Камчатки с начала года</a></div>
				</div>
				<div class="news-item content-item" data-tab="v2">
					<div class="item-img">
						<a href="#"><img src="images/content/news-img-3.jpg" /></a>
					</div>
					<div class="item-title"><a href="#">Свободная экономическая зона в Крыму</a></div>
				</div>
				<div class="news-item content-item" data-tab="v3">
					<div class="item-img">
						<a href="#"><img src="images/content/news-img-4.jpg" /></a>
					</div>
					<div class="item-title"><a href="#">В Тюменской области строят четыре крупных логистических центра</a></div>
				</div>
			</div>
			<a href="#" class="readmore">Смотреть все новости</a>
		</div>
		<div class="events col l6 m12 s12">
			<div class="block-title-tab"></div>
			<div class="events-list">
				<div class="item">
					<a href="#"><div class="item-title">Аси запустило новую аналитическую карту</div></a>
					<span class="item-date light-text">22.07.2015</span>
				</div>
				<div class="item">
					<a href="#"><div class="item-title">Лекция о нейросетевых и молекулярных механизмах памяти</div></a>
					<span class="item-date light-text">20.07.2015</span>
				</div>
				<div class="item">
					<a href="#"><div class="item-title">Встреча с кандидатами на стажировку в проектах национальной технологической инициативы</div></a>
					<span class="item-date light-text">16.07.2015</span>
				</div>
				<div class="item">
					<a href="#"><div class="item-title">Южно-Российский Игровой Форум “Южный РИФ - 2015. Передовые технологии геймификации”</div></a>
					<span class="item-date light-text">11.05.2015</span>
				</div>
				<div class="item">
					<a href="#"><div class="item-title">Мониторинг дорожной карты “Поддержка доступа на рынки зарубежных стран и поддержка экспорта”</div></a>
					<span class="item-date light-text">06.05.2015</span>
				</div>
			</div>
			<a class="readmore" href="#">Смотреть все анонсы</a>
		</div>
	</div>
	<div class="projects-block">
	
	</div>
	<div class="partners-block hide-on-small-only">
		<div class="block-title-tab"></div>
		<div  class="partners-list row">
			<div class="item col l3 m4">
			
			</div>
		</div>
	</div>
</div>
<?include('footer.php');?>