<?include('header.php');?>
<div class="page-title">Банк проектов</div>
<div class="filter row">
	<div class="col l4 m6 s12 field-box">
		<select class="customize-select hide-on-large-only" id="type" data-placeholder="Тип проекта">
			<option value="v0">Тип проекта</option>
			<option value="v1">Социальный проект</option>
			<option value="v2">Бизнес-проект</option>
			<option value="v3">Образовательный проект</option>
		</select>
		<label for="type" class="triangle"></label>
	</div>
	<div class="col l4 m6 s12 field-box">
		<select class="customize-select hide-on-large-only" id="depart" data-placeholder="Отрасль">
			<option value="v0">Отрасль</option>
			<option value="v1">Отрасль 1</option>
			<option value="v2">Отрасль 2</option>
			<option value="v3">Отрасль 3</option>
		</select>
		<label for="depart" class="triangle"></label>
	</div>
	<div class="col l4 m12 s12 search-box">
		<input type="text" class="search" id="name-search" placeholder="Поиск по названию проекта" />
		<label for="name-search" class="btn-icon btn-search default"><svg class="icon"><use xlink:href="#magnifying-glass"/></svg></label>
	</div>
</div>
<div class="project-list row">
	<div class="project-item col l6 m12 s12">
		<div class="item-img">
			<a href="#"><img src="images/content/proj-1.jpg" /></a>
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
			<a href="#"><img src="images/content/proj-3.jpg" /></a>
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