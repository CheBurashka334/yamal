<?include('header.php');?>
<div class="add-project-page">
	<div class="page-title">Предложить проект</div>
	<form name="add-project-1" ng-controller="addProj1Ctrl" novalidate>
		<div class="form-block row">
			<div class="block-title col">Информация об инвесторе</div>
			<div class="field-box col l6">
				<label>Имя <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.name" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Отчество</label>
				<input type="text" class="inputtext" ng-model="form.patronym" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Фамилия</label>
				<input type="text" class="inputtext" ng-model="form.familyname" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Электронная почта <sup class="required-mark">*</sup></label>
				<input type="email" class="inputtext" ng-model="form.email" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Телефон <sup class="required-mark">*</sup></label>
				<input type="tel" class="inputtext" ng-model="form.phone" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Компания <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.company" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Город <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.city" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
		</div>
		<div class="form-block row">
			<div class="block-title col">Информация о проекте</div>
			<div class="field-box col l12">
				<label>Название проекта <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.project" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Планируемый объем инвестиций, млн. руб <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.invest" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Источники средств: заемная доля <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.source" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Период реализации проекта, лет <sup class="required-mark">*</sup></label>
				<div class="select-box hide-on-large-only">
					<select class="type-2" id="add-proj-period" name="add-proj-period-sel" ng-model="form.period" ng-required="true">
						<option value="v1" selected>0,5</option>
						<option value="v2">1</option>
						<option value="v3">3</option>
						<option value="v4">5</option>
						<option value="v5">10</option>
					</select>
					<label for="add-project-sel" class="triangle"></label>
				</div>
				<div class="dropdown-box">
					<div class="dropdown-value">
						<div class="item-text"></div>
						<div class="triangle"></div>
					</div>
					<ul class="dropdown-list select-synh hide-on-med-and-down" data-select="add-proj-period">
						<li class="dropdown-item" data-active="active">
							<input type="radio" class="dropdown-inp" name="add-proj-period" value="v1" id="add-proj-period-rad-v1" checked="checked" data-value-text="0,5"/>
							<label class="dropdown-title" for="add-proj-period-rad-v1">
								<div class="item-text">0,5</div>
							</label>
						</li>
						<li class="dropdown-item">
							<input type="radio" class="dropdown-inp" name="add-proj-period-rad" value="v2" id="add-proj-period-rad-v2" data-value-text="1"/>
							<label class="dropdown-title" for="add-proj-period-rad-v2">
								<div class="item-text">1</div>
							</label>
						</li>
						<li class="dropdown-item">
							<input type="radio" class="dropdown-inp" name="add-proj-period-rad" value="v3" id="add-proj-period-rad-v3" data-value-text="3"/>
							<label class="dropdown-title" for="add-proj-period-rad-v3">
								<div class="item-text">3</div>
							</label>
						</li>
						<li class="dropdown-item">
							<input type="radio" class="dropdown-inp" name="add-proj-period-rad" value="v4" id="add-proj-period-rad-v4" data-value-text="5"/>
							<label class="dropdown-title" for="add-proj-period-rad-v4">
								<div class="item-text">5</div>
							</label>
						</li>
						<li class="dropdown-item">
							<input type="radio" class="dropdown-inp" name="add-proj-period-rad" value="v5" id="add-proj-period-rad-v5" data-value-text="10"/>
							<label class="dropdown-title" for="add-proj-period-rad-v5">
								<div class="item-text">10</div>
							</label>
						</li>
					</ul>
				</div>
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Планируемая к выпуску продукция, услуги <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.product" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Средний уровень заработной платы: руб <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.pay" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Количество создаваемых рабочих мест <sup class="required-mark">*</sup></label>
				<input type="text" class="inputtext" ng-model="form.positions" ng-required="true" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<label>Описание проекта</label>
				<textarea class="inputtext" row="4" ng-model="form.desc" ng-required="true"></textarea>
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box inputfile-box col l12">
				<div class="inputfile">
					<input type="file" ng-model="form.file" accept="image/png,image/jpg,application/pdf,application/excel,application/msword,text/plane,application/powerpoint,application/vnd.openxmlformats-officedocument.wordprocessingml.document"  onchange="angular.element(this).scope().setFiles(this)" />
					<div class="inputfile-value" ng-if="file">
						<span class="item-text">{{$scope.addProject1.file.value}}</span>
						<button class="btn-delete"></button>
					</div>
					<button class="btn-inputfile">Прикрепить файл</button>
				</div>
				<div class="note-text">
					Размер файла: не более 10 Мб.<br/>
					Тип файла: *ppt, *pptx, *doc, *docx, *xls, *xlsx, *txt, *pdf, *png, *jpg.
				</div>
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box captcha-box col l12">
				<img class="captcha" />
				<input type="text" class="inputtext" ng-model="form.captcha" />
				<label>Введите код, указанный на картинке</label>
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l12">
				<input type="checkbox" checked ng-model="form.agreement" />
				<label>Я даю свое разрешение на обработку и хранение персональных данных</label>
			</div>
		</div>
		<button class="btn btn-submit primary center">Отправить</button>
	</form>
</div>
<?include('footer.php');?>