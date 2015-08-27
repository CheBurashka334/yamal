<?include('header.php');?>
<div class="news-page">
<div class="page-title first-line first-line">Новости</div>
<div class="filter row second-line">
	<div class="col s12 hide-on-med-and-up">
		<select class="news-select" id="news-cat" name="news-cat-sel">
			<option value="v0" selected>Все новости</option>
			<option value="v1">Новости группы</option>
			<option value="v2">Официально</option>
			<option value="v3">Пресса</option>
		</select>
		<label for="newscat" class="triangle"></label>
	</div>
	<div class="col l12 m12 hide-on-small-only">
		<ul class="tabs-list select-synh" data-select="news-cat">
			<li class="tab-item">
				<input class="tab-inp" type="radio" name="news-cat-rad" value="v0" id="news-cat-v0" checked="checked"/>
				<label class="tab-title" for="news-cat-v0">Все новости</label>
			</li>
			<li class="tab-item">
				<input class="tab-inp" type="radio" name="news-cat-rad" value="v1" id="news-cat-v1"/>
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
<div class="news-list">
	<div class="row">
		<div class="news-item trans-line col l6 m12 s12">
			<div class="item-img">
				<a href="#"><img src="images/content/news-img-1.jpg" /></a>
			</div>
			<div class="item-title"><a href="#">Более 5,5 млрд рублей частных инвестиций направлено в экономику Камчатки с начала года</a></div>
			<span class="item-date light-text">22.07.2015</span>
		</div>
		<div class="news-item trans-line col l6 m12 s12">
			<div class="item-img">
				<a href="#"><img src="images/content/news-img-2.jpg" /></a>
			</div>
			<div class="item-title"><a href="#">Путин поручил поддержать несырьевые производства</a></div>
			<span class="item-date light-text">22.07.2015</span>
		</div>
	</div>
	<div class="row">
		<div class="news-item trans-line col l6 m12 s12">
			<div class="item-img">
				<a href="#"><img src="images/content/news-img-3.jpg" /></a>
			</div>
			<div class="item-title"><a href="#">Свободная экономическая зона в Крыму</a></div>
			<span class="item-date light-text">22.07.2015</span>
		</div>
		<div class="news-item trans-line col l6 m12 s12">
			<div class="item-img">
				<a href="#"><img src="images/content/news-img-4.jpg" /></a>
			</div>
			<div class="item-title"><a href="#">В Тюменской области строят четыре крупных логистических центра</a></div>
			<span class="item-date light-text">22.07.2015</span>
		</div>
	</div>
	<div class="row">
		<div class="news-item trans-line col l6 m12 s12">
			<div class="item-img">
				<a href="#"><img src="images/content/news-img-5.jpg" /></a>
			</div>
			<div class="item-title"><a href="#">"Глория" строит форелевое хозяйство в Челябинской области</a></div>
			<span class="item-date light-text">22.07.2015</span>
		</div>
		<div class="news-item trans-line col l6 m12 s12">
			<div class="item-img">
				<a href="#"><img src="images/content/news-img-6.jpg" /></a>
			</div>
			<div class="item-title"><a href="#">Инвестиционная стратегия Ярославля </a></div>
			<span class="item-date light-text">22.07.2015</span>
		</div>
	</div>
</div>
<a class="btn center" href="#">Показать еще</a>
</div>
<?include('footer.php');?>