<?php include('header.php');?>
<div class="home-page">
	<div class="home-slider carousel first-line">
		<div class="carousel-content m-full-width s-full-width">
			<div class="carousel-inner">
				<div class="item">
					<div class="item-img" style="background-image: url(images/content/slide-1.jpg);"></div>
					<div class="item-title">Помощь среднему и <br/>малому бизнесу в ЯНАО</div>
				</div>
				<div class="item">
					<div class="item-img" style="background-image: url(images/content/slide-2.jpg);"></div>
					<div class="item-title">Помощь среднему и <br/>малому бизнесу в ЯНАО</div>
				</div>
				<div class="item">
					<div class="item-img" style="background-image: url(images/content/slide-3.jpg);"></div>
					<div class="item-title">Помощь среднему и <br/>малому бизнесу в ЯНАО</div>
				</div>
			</div>
		</div>
		<ul class="carousel-pagination"></ul>
	</div>
	<div class="measures-block row second-line">
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
					<svg class="icon"><use xlink:href="#microfinance"/></svg>
				</div>
				<div class="item-title">Микрофинансирование</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
					<svg class="icon"><use xlink:href="#zaim"/></svg>
				</div>
				<div class="item-title">Целевые займы</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
					<svg class="icon"><use xlink:href="#lease"/></svg>
				</div>
				<div class="item-title">Лизинг</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
					<svg class="icon"><use xlink:href="#grants"/></svg>
				</div>
				<div class="item-title">Гранты, субсидии, компенсации</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
					<svg class="icon"><use xlink:href="#navigator"/></svg>
				</div>
				<div class="item-title">Навигатор мер поддержки</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
					<svg class="icon"><use xlink:href="#guarantee"/></svg>
				</div>
				<div class="item-title">Поручительство</div>
			</a>
		</div>
		<div class="item col l3 m4 s12">
			<a href="#">
				<div class="item-icon circle hide-on-small-only">
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
			<div class="block-title-like-tab"><span class="text">Анонсы событий</span></div>
			<div class="events-list">
				<div class="item">
					<div class="item-title"><a href="#">Аси запустило новую аналитическую карту</a></div>
					<span class="item-date light-text">22.07.2015</span>
				</div>
				<div class="item">
					<div class="item-title"><a href="#">Лекция о нейросетевых и молекулярных механизмах памяти</a></div>
					<span class="item-date light-text">20.07.2015</span>
				</div>
				<div class="item">
					<div class="item-title"><a href="#">Встреча с кандидатами на стажировку в проектах национальной технологической инициативы</a></div>
					<span class="item-date light-text">16.07.2015</span>
				</div>
				<div class="item">
					<div class="item-title"><a href="#">Южно-Российский Игровой Форум “Южный РИФ - 2015. Передовые технологии геймификации”</a></div>
					<span class="item-date light-text">11.05.2015</span>
				</div>
				<div class="item">
					<div class="item-title"><a href="#">Мониторинг дорожной карты “Поддержка доступа на рынки зарубежных стран и поддержка экспорта”</a></div>
					<span class="item-date light-text">06.05.2015</span>
				</div>
			</div>
			<a class="readmore" href="#">Смотреть все анонсы</a>
		</div>
	</div>
	<div class="projects-block">
		<div class="tab-header">
			<div class="hide-on-med-and-up">
				<select id="projects-tabber" class="type-2" data-tab-content="projects-content">
					<option value="v1" selected>Истории успеха</option>
					<option value="v2">Банк проектов</option>
					<option value="v3">Предложить проект</option>
				</select>
				<label for="projects-tabber" class="triangle"></label>
			</div>
			<div class="tab-box hide-on-small-only">
				<ul class="tabs-list select-synh" data-select="projects-tabber">
					<li class="tab-item">
						<input class="tab-inp" type="radio" name="projects-rad" value="v1" id="projects-v1" checked="checked"/>
						<label class="tab-title" for="projects-v1">Истории успеха</label>
					</li>
					<li class="tab-item">
						<input class="tab-inp" type="radio" name="projects-rad" value="v2" id="projects-v2"/>
						<label class="tab-title" for="projects-v2">Банк проектов</label>
					</li>
					<li class="tab-item">
						<input class="tab-inp" type="radio" name="projects-rad" value="v3" id="projects-v3"/>
						<label class="tab-title" for="projects-v3">Предложить проект</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="tab-content" id="projects-content">
			<div class="projects-item content-item" data-tab="v1">
				<div class="carousel">
					<div class="carousel-content no-padding">
						<div class="carousel-inner">
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-1.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ООО «Уральские локомотивы»</a></div>
							</div>
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-2.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ООО «Либхерр-Нижний Новгород»</a></div>
							</div>
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-3.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ОАО «Ямалтрансстрой»</a></div>
							</div>
							<!--div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-4.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ООО «Юрхаровнефтегаз»</a></div>
							</div-->
						</div>
					</div>
					<div class="carousel-controlls">
						<button class="prev"><svg class="icon"><use xlink:href="#arr"/></svg></button>
						<button class="next"><svg class="icon"><use xlink:href="#arr"/></svg></button>
					</div>
				</div>
			</div>
			<div class="projects-item content-item" data-tab="v2">
				<div class="carousel">
					<div class="carousel-content no-padding">
						<div class="carousel-inner">
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-1.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ООО «Уральские локомотивы»</a></div>
							</div>
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-2.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ООО «Либхерр-Нижний Новгород»</a></div>
							</div>
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-3.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ОАО «Ямалтрансстрой»</a></div>
							</div>
							<div class="item project-item">
								<div class="item-img">
									<a href="#"><img src="images/content/proj-4.jpg" /></a>
								</div>
								<div class="item-title"><a href="#">ООО «Юрхаровнефтегаз»</a></div>
							</div>
						</div>
					</div>
					<div class="carousel-controlls">
						<button class="prev"><svg class="icon"><use xlink:href="#arr"/></svg></button>
						<button class="next"><svg class="icon"><use xlink:href="#arr"/></svg></button>
					</div>
				</div>
			</div>
			<div class="projects-item content-item" data-tab="v3">
				text here...
			</div>
		</div>
	</div>
	<div class="partners-block hide-on-small-only">
		<div class="block-title-like-tab"><span class="text">Партнеры</span></div>
		<div  class="partners-list row">
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#gosorgan"/></svg></div>
					<div class="item-title">Органы государственной власти</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#control"/></svg></div>
					<div class="item-title">Контролирующие структуры</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#gosuslugi"/></svg></div>
					<div class="item-title">Государственные услуги</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#ombudsmen"/></svg></div>
					<div class="item-title">Бизнес-омбутсмен</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#financial"/></svg></div>
					<div class="item-title">Финансовые организации</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#business"/></svg></div>
					<div class="item-title">Бизнес-сообщества</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#social"/></svg></div>
					<div class="item-title">Общественные организации</div>
				</a>
			</div>
			<div class="item col l3 m4">
				<a href="#">
					<div class="item-icon"><svg class="icon"><use xlink:href="#info"/></svg></div>
					<div class="item-title">Информационные партнеры</div>
				</a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>