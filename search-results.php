<?include('header.php');?>
<div class="page-title">Результаты поиска</div>
<div class="search-results-page">
	<div class="filter hide-on-small-only">
		<div class="item action-dep-box">
			<div class="select-box hide-on-large-only">
				<select class="mobile-synh" id="action-dep" name="action-dep-sel">
					<option value="v1" selected>Все отрасли</option>
					<option value="v2">A. Сельское хозяйство, охота и лесное хозяйство</option>
					<option value="v3">B. Рыболовство, рыбоводство</option>
					<option value="v4">C. Добыча полезных ископаемых</option>
					<option value="v5">D. Обрабатывающие производства</option>
					<option value="v6">E. Производство и распределение электроэнергии, газа и воды</option>
					<option value="v7">F. Строительство</option>
					<option value="v8">G. Оптовая и розничная торговля; ремонт автотранспортных средств, мотоциклов, бытовых изделий и предметов личного пользования</option>
					<option value="v9">H. Гостиницы и рестораны</option>
					<option value="v10">I. Транспорт и связь</option>
					<option value="v11">J. Финансовая деятельность</option>
					<option value="v12">K. Операции с недвижимым имуществом, аренда и предоставление услуг</option>
					<option value="v13">L. Государственное управление и обеспечение военной безопасности; социальное страхование</option>
					<option value="v14">M. Образование</option>
					<option value="v15">N. Здравоохранение и предоставление социальных услуг</option>
					<option value="v16">O. Предоставление прочих коммунальных, социальных и персональных услуг</option>
					<option value="v17">P. Деятельность домашних хозяйств</option>
					<option value="v18">Q. Деятельность экстерриториальных организаций</option>
				</select>
				<label for="rec-type" class="triangle"></label>
			</div>
			<div class="dropdown-box">
				<div class="dropdown-value">
					<div class="item-icon circle">
						<svg class="icon"><use xlink:href="#depart"/></svg>
					</div>
					<div class="item-text">Все отрасли</div>
				</div>
				<ul class="dropdown-list select-synh action-dep hide-on-med-and-down" data-select="action-dep">
					<li class="dropdown-item" data-active="active">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v1" id="action-dep-v1" checked="checked" data-value-text="Все отрасли" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v1">
							<div class="item-text">Все отрасли</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v2" id="action-dep-v2" data-value-text="A. Сельское хозяйство, охота и лесное хозяйство" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v2">
							<div class="item-text">A. Сельское хозяйство, охота и лесное хозяйство</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v3" id="action-dep-v3" data-value-text="B. Рыболовство, рыбоводство" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v3">
							<div class="item-text">B. Рыболовство, рыбоводство</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v4" id="action-dep-v4" data-value-text="C. Добыча полезных ископаемых" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v4">
							<div class="item-text">C. Добыча полезных ископаемых</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v5" id="action-dep-v5" data-value-text="D. Обрабатывающие производства" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v5">
							<div class="item-text">D. Обрабатывающие производства</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v6" id="action-dep-v6" data-value-text="E. Производство и распределение электроэнергии, газа и воды" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v6">
							<div class="item-text">E. Производство и распределение электроэнергии, газа и воды</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v7" id="action-dep-v7" data-value-text="F. Строительство" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v7">
							<div class="item-text">F. Строительство</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v8" id="action-dep-v8" data-value-text="G. Оптовая и розничная торговля; ремонт автотранспортных средств, мотоциклов, бытовых изделий и предметов личного пользования" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v8">
							<div class="item-text">G. Оптовая и розничная торговля; ремонт автотранспортных средств, мотоциклов, бытовых изделий и предметов личного пользования</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v9" id="action-dep-v9" data-value-text="H. Гостиницы и рестораны" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v9">
							<div class="item-text">H. Гостиницы и рестораны</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v10" id="action-dep-v10" data-value-text="I. Транспорт и связь" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v10">
							<div class="item-text">I. Транспорт и связь</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v11" id="action-dep-v11" data-value-text="J. Финансовая деятельность" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v11">
							<div class="item-text">J. Финансовая деятельность</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v12" id="action-dep-v12" data-value-text="K. Операции с недвижимым имуществом, аренда и предоставление услуг" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v12">
							<div class="item-text">K. Операции с недвижимым имуществом, аренда и предоставление услуг</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v13" id="action-dep-v13" data-value-text="L. Государственное управление и обеспечение военной безопасности; социальное страхование" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v13">
							<div class="item-text">L. Государственное управление и обеспечение военной безопасности; социальное страхование</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v14" id="action-dep-v14" data-value-text="M. Образование" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v14">
							<div class="item-text">M. Образование</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v15" id="action-dep-v15" data-value-text="N. Здравоохранение и предоставление социальных услуг" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v15">
							<div class="item-text">N. Здравоохранение и предоставление социальных услуг</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v16" id="action-dep-v16" data-value-text="O. Предоставление прочих коммунальных, социальных и персональных услуг" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v16">
							<div class="item-text">O. Предоставление прочих коммунальных, социальных и персональных услуг</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v17" id="action-dep-v17" data-value-text="P. Деятельность домашних хозяйств" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v17">
							<div class="item-text">P. Деятельность домашних хозяйств</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="action-dep-rad" value="v18" id="action-dep-v18" data-value-text="Q. Деятельность экстерриториальных организаций" data-value-icon="#depart"/>
						<label class="dropdown-title" for="action-dep-v18">
							<div class="item-text">Q. Деятельность экстерриториальных организаций</div>
						</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="select-box hide-on-large-only">
				<select class="mobile-synh" id="rec-type" name="rec-type-sel">
					<option value="v1" selected>Начинающий предприниматель</option>
					<option value="v2">Молодой предприниматель</option>
					<option value="v3">Социальный предприниматель</option>
					<option value="v4">Действующий бизнес</option>
					<option value="v5">Экспортер</option>
					<option value="v6">Инноватор</option>
					<option value="v7">Инвестор</option>
				</select>
				<label for="rec-type" class="triangle"></label>
			</div>
			<div class="dropdown-box with-icon">
				<div class="dropdown-value">
					<div class="item-icon circle">
						<svg class="icon"><use xlink:href="#starter"/></svg>
					</div>
					<div class="item-text">Начинающий предприниматель</div>
				</div>
				<ul class="dropdown-list select-synh rec-type hide-on-med-and-down" data-select="rec-type">
					<li class="dropdown-item" data-active="active">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v1" id="rec-type-v1" checked="checked" data-value-text="Начинающий <br/>предприниматель" data-value-icon="#starter"/>
						<label class="dropdown-title" for="rec-type-v1">
							<div class="item-text">Начинающий предприниматель</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v2" id="rec-type-v2" data-value-text="Молодой <br/>предприниматель" data-value-icon="#young"/>
						<label class="dropdown-title" for="rec-type-v2">
							<div class="item-text">Молодой предприниматель</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v3" id="rec-type-v3" data-value-text="Социальный <br/>предприниматель" data-value-icon="#soc-pred"/>
						<label class="dropdown-title" for="rec-type-v3">
							<div class="item-text">Социальный предприниматель</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v4" id="rec-type-v4" data-value-text="Действующий <br/>бизнес" data-value-icon="#act-bis"/>
						<label class="dropdown-title" for="rec-type-v4">
							<div class="item-text">Действующий бизнес</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v5" id="rec-type-v5" data-value-text="Экспортер" data-value-icon="#export"/>
						<label class="dropdown-title" for="rec-type-v5">
							<div class="item-text">Экспортер</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v6" id="rec-type-v6" data-value-text="Инноватор" data-value-icon="#innovation"/>
						<label class="dropdown-title" for="rec-type-v6">
							<div class="item-text">Инноватор</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-type-rad" value="v7" id="rec-type-v7" data-value-text="Инвестор" data-value-icon="#investor"/>
						<label class="dropdown-title" for="rec-type-v7">
							<div class="item-text">Инвестор</div>
						</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="select-box hide-on-large-only">
				<select class="mobile-synh" id="rec-cat" name="rec-cat-sel">
					<option value="v1" selected>Юридическое лицо</option>
					<option value="v2">Индивидуальный предприниматель</option>
					<option value="v3">Фермерское хозяйство</option>
				</select>
				<label for="rec-cat" class="triangle"></label>
			</div>
			<div class="dropdown-box with-icon">
				<div class="dropdown-value">
					<div class="item-icon circle">
						<svg class="icon"><use xlink:href="#justice"/></svg>
					</div>
					<div class="item-text">Юридическое лицо</div>
				</div>
				<ul class="dropdown-list select-synh horz-label rec-cat hide-on-med-and-down" data-select="rec-cat">
					<li class="dropdown-item" data-active="active">
						<input type="radio" class="dropdown-inp" name="rec-cat-rad" value="v1" id="rec-cat-v1" checked="checked" data-value-text="Юридическое лицо" data-value-icon="#justice"/>
						<label class="dropdown-title" for="rec-cat-v1">
							<div class="item-text">Юридическое лицо</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-cat-rad" value="v2" id="rec-cat-v2" data-value-text="Индивидуальный <br/>предприниматель" data-value-icon="#individual"/>
						<label class="dropdown-title" for="rec-cat-v2">
							<div class="item-text">Индивидуальный предприниматель</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="rec-cat-rad" value="v3" id="rec-cat-v3" data-value-text="Фермерское хозяйство" data-value-icon="#farm"/>
						<label class="dropdown-title" for="rec-cat-v3">
							<div class="item-text">Фермерское хозяйство</div>
						</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="item biz-size-box">
			<div class="select-box hide-on-large-only">
				<select class="mobile-synh" id="biz-size" name="biz-size-sel">
					<option value="v1" selected>Микропредприятие</option>
					<option value="v2">Малое предприятие</option>
					<option value="v3">Среднее предприятие</option>
					<option value="v4">Крупное предприятие</option>
				</select>
				<label for="size" class="triangle"></label>
			</div>
			<div class="dropdown-box with-icon">
				<div class="dropdown-value">
					<div class="item-icon circle">
						<svg class="icon"><use xlink:href="#micro"/></svg>
					</div>
					<div class="item-text"></div>
				</div>
				<ul class="dropdown-list select-synh horz-label biz-size hide-on-med-and-down" data-select="biz-size">
					<li class="dropdown-item" data-active="active">
						<input type="radio" class="dropdown-inp" name="biz-size-rad" value="v1" id="biz-size-rad-v1" checked="checked" data-value-text="Микропредприятие<br/>Оборот до 60 млн.<br/>Не более 15 сотрудников" data-value-icon="#micro"/>
						<label class="dropdown-title" for="biz-size-rad-v1">
							<div class="item-text">
								Микропредприятие<br/>Оборот до 60 млн.<br/>Не более 15 сотрудников
							</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-size-rad" value="v2" id="biz-size-rad-v2" data-value-text="Малое предприятие<br/>Оборот до 400 млн.<br/>Не более 100 сотрудников" data-value-icon="#mini"/>
						<label class="dropdown-title" for="biz-size-rad-v2">
							<div class="item-text">
								Малое предприятие<br/>Оборот до 400 млн.<br/>Не более 100 сотрудников
							</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-size-rad" value="v3" id="biz-size-rad-v3" data-value-text="Среднее предприятие<br/>Оборот до 1 млрд.<br/>Не более 250 сотрудников" data-value-icon="#srednee"/>
						<label class="dropdown-title" for="biz-size-rad-v3">
							<div class="item-text">
								Среднее предприятие<br/>Оборот до 1 млрд.<br/>Не более 250 сотрудников
							</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-size-rad" value="v4" id="biz-size-rad-v4" data-value-text="Крупное предприятие<br/>Оборот свыше 1 млрд.<br/>Более 250 сотрудников" data-value-icon="#big"/>
						<label class="dropdown-title" for="biz-size-rad-v4">
							<div class="item-text">
								Крупное предприятие<br/>Оборот свыше 1 млрд.<br/>Более 250 сотрудников
							</div>
						</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="item">
			<div class="select-box hide-on-large-only">
				<select class="mobile-synh" id="biz-period" name="biz-period-sel">
					<option value="v1" selected>Еще не создан</option>
					<option value="v2">Менее 1 года</option>
					<option value="v3">От 1 до 2 лет</option>
					<option value="v4">От 2 до 3 лет</option>
					<option value="v5">Более 3 лет</option>
				</select>
				<label for="period" class="triangle"></label>
			</div>
			<div class="dropdown-box with-text-icon">
				<div class="dropdown-value">
					<div class="item-icon circle">
						<span class="icon">0</span>
					</div>
					<div class="item-text">Еще не создан</div>
				</div>
				<ul class="dropdown-list select-synh biz-period hide-on-med-and-down" data-select="biz-period">
					<li class="dropdown-item" data-active="active">
						<input type="radio" class="dropdown-inp" name="biz-period-rad" value="v1" id="biz-period-rad-v1" checked="checked" data-value-text="Еще не создан" data-value-icon="0"/>
						<label class="dropdown-title" for="biz-period-rad-v1">
							<div class="item-text">Еще не создан</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-period-rad" value="v2" id="biz-period-rad-v2" data-value-text="Менее 1 года" data-value-icon="&lt;1"/>
						<label class="dropdown-title" for="biz-period-rad-v2">
							<div class="item-text">Менее 1 года</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-period-rad" value="v3" id="biz-period-rad-v3" data-value-text="От 1 до 2 лет" data-value-icon="1-2"/>
						<label class="dropdown-title" for="biz-period-rad-v3">
							<div class="item-text">От 1 до 2 лет</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-period-rad" value="v4" id="biz-period-rad-v4" data-value-text="От 2 до 3 лет" data-value-icon="2-3"/>
						<label class="dropdown-title" for="biz-period-rad-v4">
							<div class="item-text">От 2 до 3 лет</div>
						</label>
					</li>
					<li class="dropdown-item">
						<input type="radio" class="dropdown-inp" name="biz-period-rad" value="v5" id="biz-period-rad-v5" data-value-text="Более 3 лет" data-value-icon="3+"/>
						<label class="dropdown-title" for="biz-period-rad-v5">
							<div class="item-text">Более 3 лет</div>
						</label>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="search-results">
		<div class="tab-header">
			<div class="select-box hide-on-med-and-up">
				<select class="type-2" id="tabber" data-tab-content="sr-content">
					<option value="v1">Микрозаймы</option>
					<option value="v2">Целевые займы</option>
					<option value="v3">Лизинг</option>
					<option value="v4" selected>Гранты и субсидии</option>
					<option value="v5">Поручительство</option>
					<option value="v6">Сопровождение проектов</option>
				</select>
				<label for="rec-type" class="triangle"></label>
			</div>
			<div class="tab-box hide-on-small-only">
				<ul class="tabs-list select-synh" data-select="tabber">
					<li class="tab-item">
						<input type="radio" class="tab-inp" name="tabber" value="v1" id="tabber-v1"/>
						<label class="tab-title" for="tabber-v1">
							<div class="item-text">Микрозаймы</div>
						</label>
					</li>
					<li class="tab-item">
						<input type="radio" class="tab-inp" name="tabber" value="v2" id="tabber-v2"/>
						<label class="tab-title" for="tabber-v2">
							<div class="item-text">Целевые займы</div>
						</label>
					</li>
					<li class="tab-item">
						<input type="radio" class="tab-inp" name="tabber" value="v3" id="tabber-v3"/>
						<label class="tab-title" for="tabber-v3">
							<div class="item-text">Лизинг</div>
						</label>
					</li>
					<li class="tab-item">
						<input type="radio" class="tab-inp" name="tabber" value="v4" id="tabber-v4" checked="checked"/>
						<label class="tab-title" for="tabber-v4">
							<div class="item-text">Гранты и субсидии</div>
						</label>
					</li>
					<li class="tab-item">
						<input type="radio" class="tab-inp" name="tabber" value="v5" id="tabber-v5"/>
						<label class="tab-title" for="tabber-v5">
							<div class="item-text">Поручительство</div>
						</label>
					</li>
					<li class="tab-item">
						<input type="radio" class="tab-inp" name="tabber" value="v6" id="tabber-v6"/>
						<label class="tab-title" for="tabber-v6">
							<div class="item-text">Сопровождение проектов</div>
						</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="tab-content" id="sr-content">
			<div class="content-item" data-tab="v1">
				<div class="content-block">
					<div class="block-title item-title">Микрозаймы заголовок</div>
					<div class="item-text">
						<p>Микрозаймы текст текст текст</p>
					</div>
				</div>
			</div>
			<div class="content-item" data-tab="v2">
				<div class="content-block">
					<div class="block-title item-title">Целевые займы заголовок</div>
					<div class="item-text">
						<p>Целевые займы текст текст текст</p>
					</div>
				</div>
			</div>
			<div class="content-item" data-tab="v3">
				<div class="content-block">
					<div class="block-title item-title">Лизинг заголовок</div>
					<div class="item-text">
						<p>Лизинг текст текст текст</p>
					</div>
				</div>
			</div>
			<div class="content-item" data-tab="v4">
				<div class="content-block">
					<div class="block-title">Условия предоставления поддержки</div>
					<div class="item-text">
						<p>Субсидии предоставляются инвесторам, реализующим особо значимые инвестиционные проекты Камчатского края. Субсидии предоставляются инвесторам с целью возмещения части затрат на уплату процентов по кредитам, привлеченным в российских кредитных организациях в валюте Российской Федерации в целях реализации особо значимых инвестиционных проектов Камчатского края. Субсидии предоставляются при соблюдении следующих условий;</p>
						<p>1) заключения между Правительством Камчатского края и инвестором договора о предоставлении государственной поддержки инвестиционной деятельности в Камчатском крае в форме финансовых мер путем предоставления субсидии (далее - договор). Обязательным условием предоставления субсидии, включаемым в договор, является согласие инвестора на осуществление Министерством и органами государственного финансового контроля проверок соблюдения условий, целей и порядка ее предоставления;
						(в ред. Постановления Правительства Камчатского края от 24.03.2014 N 137-П)</p>
						<p>2) отсутствия у инвестора просроченной задолженности по заработной плате, по ранее предоставленной государственной поддержке инвестиционной деятельности в Камчатском крае и (или) по налогам и сборам в бюджеты бюджетной системы Российской Федерации;</p>
						<p>3) отсутствия у инвестора задолженности по оплате уставного капитала;</p>
						<p>4) отсутствия у инвестора процедур реорганизации, ликвидации, банкротства;</p>
						<p>5) выполнения инвестором обязательств по погашению основного долга и уплаты начисленных процентов в соответствии с кредитным договором, заключенным с российской кредитной организацией;</p>
						<p>6) предоставления инвестором полного пакета документов, предусмотренных частью 8 настоящего Порядка.</p>
					</div>
				</div>
				<div class="content-block">
					<div class="block-title">Ограничения на получение поддержки</div>
					<p>Представление неполного пакета документов, наличие в представленных документах недостоверных сведений является основанием для отказа в рассмотрении вопроса о предоставлении субсидии.</p>
				</div>
			</div>
			<div class="content-item" data-tab="v5">
				<div class="content-block">
					<div class="block-title item-title">Поручительство заголовок</div>
					<div class="item-text">
						<p>Поручительство текст текст текст</p>
					</div>
				</div>
			</div>
			<div class="content-item" data-tab="v6">
				<div class="content-block">
					<div class="block-title item-title">Сопровождение проектов заголовок</div>
					<div class="item-text">
						<p>Сопровождение проектов текст текст текст</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="print-links">
		<a href="#" class="nostyle">Распечатать результат</a>
		<a href="#" class="nostyle">Экспорт в PDF</a>
	</div>
	<a href="#" class="btn primary center">Новый поиск</a>
</div>
<?include('footer.php');?>