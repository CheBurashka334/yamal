<?include('header.php');?>
<div class="add-project-page">
	<div class="page-title">Предложить проект</div>
	<form name="add-project-2" ng-controller="addProj2Ctrl" novalidate>
		<div class="form-block row">
			<div class="block-title col"></div>
			<div class="field-box col l12">
				<label>Организационно-правовая форма предприятия (ООО, ЗАО, ИП)</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Предприятие зарегистрировано на территории ЯНАО</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Дата регистрации</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Сколько времени ведется реальная финансово-хозяйственная деятельность на предприятии </label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Имеется ли просроченная задолженность по уплате налогов, сборов и других обязательных платежей ( если да, то указать сумму цифрами )</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Укажите размер среднемесячной выручки предприятия за последние 6 месяцев</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Имеются ли у предприятия взятые и непогашенные кредиты в Кредитных организациях? (Если да, то указать суму кредита, размер ежемесячного платежа и срок погашения)</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Имеются ли решения суда, которое предприятие не исполнило?</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Предъявлены ли к предприятию иски гражданского или арбитражного судопроизводства?</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Вводилось или вводится на предприятии продедура банкротства (наблюдение, внешнее управление, конкурсное производство, мировое соглашение, ликвидация)? (Если да, то на каком этапе)</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Укажите размер и срок погашения планируемого займа</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Из какого источника вы узнали о группе?</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Фамилия, Имя, Отчество</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Контактный телефон</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Контактный телефон</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<input type="checkbox" checked />
				<label>Я даю свое разрешение на обработку и хранение персональных данных</label>
			</div>
		</div>
		<button class="btn btn-submit primary center">Отправить</button>
	</form>
</div>
<?include('footer.php');?>