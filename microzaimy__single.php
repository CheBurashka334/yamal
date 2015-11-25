<?include('header.php');?>
<div class="breadcrumbs first-line">
	<ul class="nostyle">
		<li class="breadcrumbs-item"><a href="#" class="breadcrumbs-link">Меры поддержки</a></li>
		<li class="breadcrumbs-item"><a href="#" class="breadcrumbs-link">Микрозаймы</a></li>
	</ul>
</div>
<div class="sup-measures-single micro-z">
	<div class="page-title first-line">Мирозайм “Северный завод”</div>
	<div class="item-content">
		<div class="table-tabs hide-on-med-and-up second-line">
			<div class="select-box">
				<select class="hide-on-med-and-up type-2" id="tabber" data-tab-content="micro-content">
					<option value="v1" selected>Краткосрочный займ</option>
					<option value="v2">Долгосрочный займ</option>
				</select>
				<label class="triangle"></label>
			</div>
			<div class="tab-content" id="micro-content">
				<div class="content-item" data-tab="v1">
					<div class="content-block">
						<div class="item-title">Срок займа</div>
						<div class="item-value">до 12 месяцев</div>
					</div>
					<div class="content-block">
						<div class="item-title">Сумма займа</div>
						<div class="item-value">от 100&nbsp;000 до 1&nbsp;000&nbsp;000 <span class="rouble">й</span></div>
					</div>
					<div class="content-block">
						<div class="item-title">Процентная ставка</div>
						<div class="item-value">6.0%</div>
					</div>
					<div class="content-block">
						<div class="item-title">Отсрочка платежа по основной сумме займа</div>
						<div class="item-value">до 9 месяцев</div>
					</div>
				</div>
				<div class="content-item" data-tab="v2">
					<div class="content-block">
						<div class="item-title">Срок займа</div>
						<div class="item-value">до 36 месяцев</div>
					</div>
					<div class="content-block">
						<div class="item-title">Сумма займа</div>
						<div class="item-value">от 100&nbsp;000 до 1&nbsp;000&nbsp;000 <span class="rouble">й</span></div>
					</div>
					<div class="content-block">
						<div class="item-title">Процентная ставка</div>
						<div class="item-value">9.0%</div>
					</div>
					<div class="content-block">
						<div class="item-title">Отсрочка платежа по основной сумме займа</div>
						<div class="item-value">до 12 месяцев</div>
					</div>
				</div>
			</div>
		</div>
		<table class="zaim hide-on-small-only second-line">
			<tr>
				<th></th>
				<th>Краткосрочный микрозайм</th>
				<th>Долгосрочный микрозайм</th>
			</tr>
			<tr>
				<th>Срок займа</th>
				<td>до 12 месяцев</td>
				<td>до 36 месяцев</td>
			</tr>
			<tr>
				<th>Сумма займа</th>
				<td colspan="2">от 100&nbsp;000 до 1&nbsp;000&nbsp;000 <span class="rouble">й</span></td>
			</tr>
			<tr>
				<th>Процентная ставка</th>
				<td>6.0%</td>
				<td>9.0%</td>
			</tr>
			<tr>
				<th>Отсрочка платежа по основной сумме займа</th>
				<td>до 9 месяцев</td>
				<td>до 12 месяцев</td>
			</tr>
		</table>
		
		<!-- калькулятор -->
		<div class="calc-block second-line">
			<div class="block-title">Калькулятор платежей</div>
			<div class="calc-form row m-full-width s-full-width">
				<div class="calc-field col l3 m5 s12">
					<div class="field-label">Сумма займа</div>
					<div class="field">
						<!-- стандартный слайдер без единиц измерения в инпуте, .money - разбивать значение на разряды -->
						<div class="calc-ui-slider money" data-min="100000" data-max="1000000" data-step="100" data-value="min">
							<input class="slider-input" type="text"/>
						</div>
					</div>
				</div>
				<div class="calc-field col l3 m5 s12">
					<div class="field-label">Срок займа</div>
					<div class="field">
						<!-- 	слайдер со склоняемой единицей измерения
								data-unit="предустановленная ед.изм." 
								напр.
								data-unit="month"
						-->
						<div class="calc-ui-slider" data-min="1" data-max="36" data-step="1" data-unit="month" data-value="max">
							<input class="slider-input" type="text"/>
						</div>
					</div>
				</div>
				<div class="calc-field col l3 m5 s12">
					<div class="field-label">Отрочка по основному долгу</div>
					<div class="field">
						<!-- 	слайдер с произвольной несклоняемой единицей измерения, 
								data-unit="ед.изм, можно html" 
								напр.
								data-unit="%"
								data-unit="<span class='rouble'>й</span>"
						-->
						<div class="calc-ui-slider" data-min="0" data-max="11" data-step="1" data-unit="%" data-value="5">
							<input class="slider-input" type="text"/>
						</div>
					</div>
				</div>
				<div class="calc-field col l3 m5 s12">
					<div class="field-label">Процентная ставка</div>
					<div class="field-value">
						8,25%
					</div>
				</div>
			</div>
			<div class="calc-res">
				<div class="calc-res-item">Максимальный платеж: <span class="value">19 000</span> <span class="rouble">й</span></div>
				<div class="calc-res-item">Общая сумма платежей:  <span class="value">119 000</span> <span class="rouble">й</span></div>
				<div class="calc-res-item">Переплата по займу:  <span class="value">9 000</span> <span class="rouble">й</span></div>
				<p><a href="#">График платежей</a></p>
			</div>
		</div>
		<!-- /калькулятор -->
		
		<a href="#" class="btn primary center order-btn third-line">Отправить заявку</a>
		<div class="content-block fourth-line">
			<div class="block-title">Дополнительные документы</div>
			<div class="row">
				<div class="col l6 m12 s12">
					<a class="file" href="#.pdf">Полное описание микрозайма “Северный завод”</a>
				</div>
				<div class="col l6 m12 s12">
					<a class="file" href="#.pdf">Перечень документов для получения займа</a>
				</div>
			</div>
		</div>
		<div class="content-block fourth-line">
			<div class="block-title">Формы документов для получения микрозайма</div>
			<div class="row">
				<div class="col l6 m12 s12">
					<a class="file" href="#.doc">Заявление анкета на получение финансовой услуги</a>
				</div>
				<div class="col l6 m12 s12">
					<a class="file" href="#.doc">Отчет о прибытиях и убытках к заявлению</a>
				</div>
			</div>
			<div class="row">
				<div class="col l6 m12 s12">
					<a class="file" href="#.doc">Баланс к заявлению</a>
				</div>
				<div class="col l6 m12 s12">
					<a class="file" href="#.doc">Анкета поручителя</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-info hide-on-small-only">
		<div class="block-title">Нужна помощь?</div>
		<p class="x-large">+7 (349) 225-28-25</p>
		<p>Просто позвоните по этому номеру или <a href="#">оставьте заявку</a> на сайте</p>
	</div>
</div>
<?include('footer.php');?>