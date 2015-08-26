<?include('header.php');?>
<div class="contact-page">
	<div class="page-title">Контакты</div>
	<!--div class="dropdown-select-box">
		<select class="dropdown-select hide-on-large-only" id="city">
			<option value="v1" selected>Салехард</option>
			<option value="v2">Надым</option>
			<option value="v3">Новый Уренгой</option>
			<option value="v4">Губкинский</option>
		</select>
		<label for="city" class="triangle"></label>
	</div-->
	<div class="select-box hide-on-large-only">
		<select class="type-2" id="city" name="city-sel">
			<option value="v1" selected>Салехард</option>
			<option value="v2">Губкинский</option>
			<option value="v3">Муравленко</option>
			<option value="v4">Надым</option>
			<option value="v5">Новый Уренгой</option>
			<option value="v6">Ноябрьск</option>
			<option value="v7">Тазовский</option>
			<option value="v8">Тарко-Сале</option>
		</select>
		<label for="city" class="triangle"></label>
	</div>
	<div class="dropdown-box hide-on-med-and-down">
		<div class="dropdown-value">
			<div class="item-text"></div>
			<div class="triangle"></div>
		</div>
		<ul class="dropdown-list select-synh hide-on-med-and-down" data-select="city">
			<li class="dropdown-item" data-active="active">
				<input type="radio" class="dropdown-inp" name="city" value="v1" id="city-rad-v1" checked="checked" data-value-text="Салехард"/>
				<label class="dropdown-title" for="city-rad-v1">
					<div class="item-text">Салехард</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v2" id="city-rad-v2" data-value-text="Губкинский"/>
				<label class="dropdown-title" for="city-rad-v2">
					<div class="item-text">Губкинский</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v3" id="city-rad-v3" data-value-text="Муравленко"/>
				<label class="dropdown-title" for="city-rad-v3">
					<div class="item-text">Муравленко</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v4" id="city-rad-v4" data-value-text="Надым"/>
				<label class="dropdown-title" for="city-rad-v4">
					<div class="item-text">Надым</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v5" id="city-rad-v5" data-value-text="Новый Уренгой"/>
				<label class="dropdown-title" for="city-rad-v5">
					<div class="item-text">Новый Уренгой</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v6" id="city-rad-v6" data-value-text="Ноябрьск"/>
				<label class="dropdown-title" for="city-rad-v6">
					<div class="item-text">Ноябрьск</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v7" id="city-rad-v7" data-value-text="Тазовский"/>
				<label class="dropdown-title" for="city-rad-v7">
					<div class="item-text">Тазовский</div>
				</label>
			</li>
			<li class="dropdown-item">
				<input type="radio" class="dropdown-inp" name="city-rad" value="v8" id="city-rad-v8" data-value-text="Тарко-Сале"/>
				<label class="dropdown-title" for="city-rad-v8">
					<div class="item-text">Тарко-Сале</div>
				</label>
			</li>
		</ul>
	</div>
	<div class="map-box s-full-width m-full-width">
		<div class="loader"></div>
		<div class="map" id="map-cnt"></div>
	</div>
	<div class="block-title">
		Финансовая группа поддержки субъектов малого и среднего предпринимательства ЯНАО
	</div>
	<div class="row">
		<div class="col l6 m9 s12 row logos center">
			<div class="col l4 m4 s4 left-align">
				<img src="images/content/cnt-logo-1.png" class="img"/>
			</div>
			<div class="col l4 m4 s4 center-align">
				<img src="images/content/cnt-logo-2.png" class="img"/>
			</div>
			<div class="col l4 m4 s4 right-align">
				<img src="images/content/cnt-logo-3.png" class="img"/>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="item col l6 m6 s12">
			<p>
				Руководитель: Управляющий фондом Бобков Иван Алесандрович<br/>
				Адрес: г. Салехард, ул. Комсомольская, 13<br/>
				Телефон: +7 (34922) 5-28-20<br/>
				E-mail: office@fondsmp.ru
			</p>
		</div>
		<div class="clearfix"></div>
		<div class="item col l6 m6 s12">
			<div class="item-title big">Департамент Экономики Ямало-Ненецкого автономного округа</div>
			<p>
				Руководитель: Директор департамента Гусева Светлана Леонидовна<br/>
				Адрес: г. Салехард, проспект Молодежи, 9<br/>
				Телефон: +7 (34922) 2-24-13<br/>
				E-mail: de@yanao.ru
			</p>
		</div>
		<div class="item col l6 m6 s12">
			<div class="item-title big">Некоммерческая организация “Региональный инновационно-инвестиционный фонд Ямал”</div>
			<p>
				Руководитель: Директор Ганус Игорь Петрович<br/>
				Адрес: г. Салехард, ул. Ленина, 27<br/>
				Телефон: +7 (34922) 4-13-24, +7 (34922) 4-13-44
			</p>
		</div>
		<div class="item col l6 m6 s12">
			<div class="item-title big">Некоммерческая организация “Торговоромышленная палата Ямало-Ненецкого автономного округа”</div>
			<p>
				Руководитель: Президент Носкин Сергей Анатольевич<br/>
				Адрес: г. Салехард, ул. Комсомольская, 16 В<br/>
				Телефон: +7 (34922) 3-05-26<br/>
				E-mail: tpp@tpp.salekhard.ru
			</p>
		</div>
	</div>
</div>
<?include('footer.php');?>