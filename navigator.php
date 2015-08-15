<?include('header.php');?>
<div class="page-title">Навигатор мер государственной поддержки бизнеса</div>
<div class="navigator filter">
	<div class="nav-item">
		<div class="block-title">Тип получателя поддержки</div>
		<div class="select-box hide-on-med-and-up">
			<select class="" id="rec-type" name="rec-type-sel">
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
		<div class="tab-box hide-on-small-only">
			<ul class="tabs-list select-synh rec-type" data-select="rec-type">
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v1" id="rec-type-v1" checked="checked"/>
					<label class="tab-title" for="rec-type-v1">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#starter"/></svg>
						</div>
						<div class="item-text">Начинающий <br/>предприниматель</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v2" id="rec-type-v2"/>
					<label class="tab-title" for="rec-type-v2">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#young"/></svg>
						</div>
						<div class="item-text">Молодой <br/>предприниматель</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v3" id="rec-type-v3"/>
					<label class="tab-title" for="rec-type-v3">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#soc-pred"/></svg>
						</div>
						<div class="item-text">Социальный <br/>предприниматель</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v4" id="rec-type-v4"/>
					<label class="tab-title" for="rec-type-v4">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#act-bis"/></svg>
						</div>
						<div class="item-text">Действующий <br/>бизнес</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v5" id="rec-type-v5"/>
					<label class="tab-title" for="rec-type-v5">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#export"/></svg>
						</div>
						<div class="item-text">Экспортер</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v6" id="rec-type-v6"/>
					<label class="tab-title" for="rec-type-v6">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#innovation"/></svg>
						</div>
						<div class="item-text">Инноватор</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-type-rad" value="v7" id="rec-type-v7"/>
					<label class="tab-title" for="rec-type-v7">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#investor"/></svg>
						</div>
						<div class="item-text">Инвестор</div>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="nav-item">
		<div class="block-title">Категория получателя поддержки</div>
		<div class="select-box hide-on-med-and-up">
			<select class="" id="rec-cat" name="rec-cat-sel">
				<option value="v1" selected>Юридическое лицо</option>
				<option value="v2">Индивидуальный предприниматель</option>
				<option value="v3">Фермерское хозяйство</option>
			</select>
			<label for="rec-cat" class="triangle"></label>
		</div>
		<div class="tab-box hide-on-small-only">
			<ul class="tabs-list select-synh horz-label rec-cat" data-select="rec-cat">
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-cat-rad" value="v1" id="rec-cat-v1" checked="checked"/>
					<label class="tab-title" for="rec-cat-v1">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#justice"/></svg>
						</div>
						<div class="item-text">Юридическое лицо</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-cat-rad" value="v2" id="rec-cat-v2"/>
					<label class="tab-title" for="rec-cat-v2">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#individual"/></svg>
						</div>
						<div class="item-text">Индивидуальный <br/>предприниматель</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="rec-cat-rad" value="v3" id="rec-cat-v3"/>
					<label class="tab-title" for="rec-cat-v3">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#farm"/></svg>
						</div>
						<div class="item-text">Фермерское хозяйство</div>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="nav-item">
		<div class="block-title">Срок существования бизнеса</div>
		<div class="select-box hide-on-med-and-up">
			<select class="" id="biz-period" name="biz-period-sel">
				<option value="v1" selected>Еще не создан</option>
				<option value="v2">Менее 1 года</option>
				<option value="v3">От 1 до 2 лет</option>
				<option value="v4">От 2 до 3 лет</option>
				<option value="v5">Более 3 лет</option>
			</select>
			<label for="period" class="triangle"></label>
		</div>
		<div class="tab-box hide-on-small-only">
			<ul class="tabs-list select-synh biz-period" data-select="biz-period">
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-period-rad" value="v1" id="biz-period-rad-v1" checked="checked"/>
					<label class="tab-title" for="biz-period-rad-v1">
						<div class="item-icon circle">
							<span class="icon">0</span>
						</div>
						<div class="item-text">Еще не создан</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-period-rad" value="v2" id="biz-period-rad-v2"/>
					<label class="tab-title" for="biz-period-rad-v2">
						<div class="item-icon circle">
							<span class="icon">&lt;1</span>
						</div>
						<div class="item-text">Менее 1 года</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-period-rad" value="v3" id="biz-period-rad-v3"/>
					<label class="tab-title" for="biz-period-rad-v3">
						<div class="item-icon circle">
							<span class="icon">1-2</span>
						</div>
						<div class="item-text">От 1 до 2 лет</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-period-rad" value="v4" id="biz-period-rad-v4"/>
					<label class="tab-title" for="biz-period-rad-v4">
						<div class="item-icon circle">
							<span class="icon">2-3</span>
						</div>
						<div class="item-text">От 2 до 3 лет</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-period-rad" value="v5" id="biz-period-rad-v5"/>
					<label class="tab-title" for="biz-period-rad-v5">
						<div class="item-icon circle">
							<span class="icon">3+</span>
						</div>
						<div class="item-text">Более 3 лет</div>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="nav-item">
		<div class="block-title">Размер бизнеса</div>
		<div class="select-box hide-on-med-and-up">
			<select class="" id="biz-size" name="biz-size-sel">
				<option value="v1" selected>Микропредприятие</option>
				<option value="v2">Малое предприятие</option>
				<option value="v3">Среднее предприятие</option>
				<option value="v4">Крупное предприятие</option>
			</select>
			<label for="size" class="triangle"></label>
		</div>
		<div class="tab-box hide-on-small-only">
			<ul class="tabs-list select-synh horz-label biz-size" data-select="biz-size">
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-size-rad" value="v1" id="biz-size-rad-v1" checked="checked"/>
					<label class="tab-title" for="biz-size-rad-v1">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#micro"/></svg>
						</div>
						<div class="item-text">
							Микропредприятие<br/>
							Оборот до 60 млн.<br/>
							Не более 15 сотрудников
						</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-size-rad" value="v2" id="biz-size-rad-v2"/>
					<label class="tab-title" for="biz-size-rad-v2">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#mini"/></svg>
						</div>
						<div class="item-text">
							Малое предприятие<br/>
							Оборот до 400 млн.<br/>
							Не более 100 сотрудников
						</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-size-rad" value="v3" id="biz-size-rad-v3"/>
					<label class="tab-title" for="biz-size-rad-v3">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#srednee"/></svg>
						</div>
						<div class="item-text">
							Среднее предприятие<br/>
							Оборот до 1 млрд.<br/>
							Не более 250 сотрудников
						</div>
					</label>
				</li>
				<li class="tab-item">
					<input type="radio" class="tab-inp" name="biz-size-rad" value="v4" id="biz-size-rad-v4"/>
					<label class="tab-title" for="biz-size-rad-v4">
						<div class="item-icon circle">
							<svg class="icon"><use xlink:href="#big"/></svg>
						</div>
						<div class="item-text">
							Крупное предприятие<br/>
							Оборот свыше 1 млрд.<br/>
							Более 250 сотрудников
						</div>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<input type="submit" value="Найти" class="btn primary center"/>
</div>
<?include('footer.php');?>