<?include('header.php');?>
<div class="page-title">Банк проектов</div>
<div class="filter row">
	<div class="col l3 m6 s12 field-box">
		<div class="select-box hide-on-large-only">
			<select class="type-3" id="type">
				<option value="v0" selected>Тип проекта</option>
				<option value="v1">Социальный проект</option>
				<option value="v2">Бизнес-проект</option>
				<option value="v3">Образовательный проект</option>
			</select>
			<label for="type" class="triangle"></label>
		</div>
		<div class="dropdown-box hide-on-med-and-down type-2">
			<div class="dropdown-value">
				<div class="item-text"></div>
				<div class="triangle"></div>
			</div>
			<ul class="dropdown-list select-synh hide-on-med-and-down" data-select="type">
				<li class="dropdown-item" data-active="active">
					<input type="radio" class="dropdown-inp" name="type" value="v0" id="type-rad-v0" checked="checked" data-value-text="Тип проекта"/>
					<label class="dropdown-title" for="type-rad-v0">
						<div class="item-text">Тип проекта</div>
					</label>
				</li>
				<li class="dropdown-item">
					<input type="radio" class="dropdown-inp" name="type" value="v1" id="type-rad-v1" data-value-text="Социальный проект"/>
					<label class="dropdown-title" for="type-rad-v1">
						<div class="item-text">Социальный проект</div>
					</label>
				</li>
				<li class="dropdown-item">
					<input type="radio" class="dropdown-inp" name="type" value="v2" id="type-rad-v2" data-value-text="Бизнес-проект"/>
					<label class="dropdown-title" for="type-rad-v2">
						<div class="item-text">Бизнес-проект</div>
					</label>
				</li>
				<li class="dropdown-item">
					<input type="radio" class="dropdown-inp" name="type" value="v3" id="type-rad-v3" data-value-text="Образовательный проект"/>
					<label class="dropdown-title" for="type-rad-v3">
						<div class="item-text">Образовательный проект</div>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="col l3 m6 s12 field-box">
		<div class="select-box hide-on-large-only">
			<select class="type-3" id="depart">
				<option value="v0">Отрасль</option>
				<option value="v1">Отрасль 1</option>
				<option value="v2">Отрасль 2</option>
				<option value="v3">Отрасль 3</option>
			</select>
			<label for="depart" class="triangle"></label>
		</div>
		<div class="dropdown-box hide-on-med-and-down type-2">
			<div class="dropdown-value">
				<div class="item-text"></div>
				<div class="triangle"></div>
			</div>
			<ul class="dropdown-list select-synh hide-on-med-and-down" data-select="depart">
				<li class="dropdown-item" data-active="active">
					<input type="radio" class="dropdown-inp" name="depart" value="v0" id="depart-rad-v0" checked="checked" data-value-text="Отрасль"/>
					<label class="dropdown-title" for="depart-rad-v0">
						<div class="item-text">Отрасль</div>
					</label>
				</li>
				<li class="dropdown-item">
					<input type="radio" class="dropdown-inp" name="depart" value="v1" id="depart-rad-v1" data-value-text="Отрасль 1"/>
					<label class="dropdown-title" for="depart-rad-v1">
						<div class="item-text">Отрасль 1</div>
					</label>
				</li>
				<li class="dropdown-item">
					<input type="radio" class="dropdown-inp" name="depart" value="v2" id="depart-rad-v2" data-value-text="Отрасль 2"/>
					<label class="dropdown-title" for="depart-rad-v2">
						<div class="item-text">Отрасль 2</div>
					</label>
				</li>
				<li class="dropdown-item">
					<input type="radio" class="dropdown-inp" name="depart" value="v3" id="depart-rad-v3" data-value-text="Отрасль 3"/>
					<label class="dropdown-title" for="depart-rad-v3">
						<div class="item-text">Отрасль 3</div>
					</label>
				</li>
			</ul>
		</div>
	</div>
	<div class="col l6 m12 s12 search-box">
		<input type="text" class="search" id="name-search" placeholder="Поиск по названию проекта" />
		<label for="name-search" class="btn-icon btn-search default"><svg class="icon"><use xlink:href="#magnifying-glass"/></svg></label>
	</div>
</div>
<div class="project-list row">
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#" class="img" style="background-image:url(images/content/proj-1.jpg)"></a>
		</div>
		<div class="item-title"><a href="#">ООО «Уральские локомотивы»</a></div>
	</div>
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#"><img src="images/content/proj-2.jpg" /></a>
		</div>
		<div class="item-title"><a href="#">ООО «Либхерр-Нижний Новгород»</a></div>
	</div>
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#" class="img" style="background-image:url(images/content/proj-3.jpg)"></a>
		</div>
		<div class="item-title"><a href="#">ОАО «Ямалтрансстрой»</a></div>
	</div>
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#"><img src="images/content/proj-4.jpg" /></a>
		</div>
		<div class="item-title"><a href="#">ООО «Юрхаровнефтегаз»</a></div>
	</div>
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#"><img src="images/content/proj-5.jpg" /></a>
		</div>
		<div class="item-title"><a href="#">ОАО «Пургаздобыча»</a></div>
	</div>
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#"><img src="images/content/proj-6.jpg" /></a>
		</div>
		<div class="item-title"><a href="#">ОАО НК «Таркосаленефтегаз»</a></div>
	</div>
</div>
<a class="btn center" href="#">Показать еще</a>
<?include('footer.php');?>