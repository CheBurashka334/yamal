<?include('header.php');?>
<div class="add-project-page form-2">
	<div class="page-title">Предложить проект</div>
	<form name="add-project-2" novalidate>
		<div class="form-block row">
			<div class="field-box col l12">
				<label>Организационно-правовая форма предприятия (ООО, ЗАО, ИП) <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Предприятие зарегистрировано на территории ЯНАО <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Дата регистрации <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Сколько времени ведется реальная финансово-хозяйственная деятельность на предприятии </label>
				<input type="text" class="inputtext" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Имеется ли просроченная задолженность по уплате налогов, сборов и других обязательных платежей ( если да, то указать сумму цифрами ) <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Укажите размер среднемесячной выручки предприятия за последние 6 месяцев <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Имеются ли у предприятия взятые и непогашенные кредиты в Кредитных организациях? (Если да, то указать суму кредита, размер ежемесячного платежа и срок погашения) <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Имеются ли решения суда, которое предприятие не исполнило? <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Предъявлены ли к предприятию иски гражданского или арбитражного судопроизводства? <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Вводилось или вводится на предприятии продедура банкротства (наблюдение, внешнее управление, конкурсное производство, мировое соглашение, ликвидация)? (Если да, то на каком этапе) <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Укажите размер и срок погашения планируемого займа <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" required />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Из какого источника вы узнали о группе?</label>
				<input type="text" class="inputtext" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Фамилия, Имя, Отчество</label>
				<input type="text" class="inputtext" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Контактный телефон</label>
				<input type="tel" class="inputtext" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Электронная почта</label>
				<input type="email" class="inputtext" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<input id="agreement" type="checkbox" checked required />
				<label for="agreement">Я даю свое разрешение на обработку и хранение персональных данных <sup class="required-mark">*</sup></label>
				<div class="error-text">Нельзя отправить данные без этого разрешения</div>
			</div>
		</div>
		<input type="submit" class="btn btn-submit primary center" value="Отправить"/>
	</form>
</div>
<?include('footer.php');?>