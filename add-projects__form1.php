<?include('header.php');?>
<div class="add-project-page">
	<div class="page-title">Предложить проект</div>
	<form name="add-project-1">
		<div class="form-block row">
			<div class="block-title col">Информация об инвесторе</div>
			<div class="field-box col l6">
				<label>Имя</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Отчество</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Фамилия</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Электронная почта</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Телефон</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Компания</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text">Заполните поля формы</div>
			</div>
			<div class="field-box col l6">
				<label>Город</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
		</div>
		<div class="form-block row">
			<div class="block-title col">Информация о проекте</div>
			<div class="field-box col l12">
				<label>Название проекта</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l12">
				<label>Планируемый объем инвестиций, млн. руб</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Источники средств: заемная доля</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Период реализации проекта, лет</label>
				<div class="select-box hide-on-large-only">
					<select class="type-2" id="add-proj-period" name="add-proj-period-sel">
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
				<div class="error-text"></div>
			</div>
			<div class="field-box col l12">
				<label>Планируемая к выпуску продукция, услуги</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Средний уровень заработной платы: руб</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l6">
				<label>Количество создаваемых рабочих мест</label>
				<input type="text" class="inputtext" ng-model="" />
				<div class="error-text"></div>
			</div>
			<div class="field-box col l12">
				<label>Описание проекта</label>
				<textarea class="inputtext" row="4" ng-model=""></textarea>
				<div class="error-text"></div>
			</div>
			<div class="field-box inputfile-box col l12">
				<div class="inputfile">
					<input type="file" ng-model="" accept="image/png,image/jpg,application/pdf,application/excel,application/msword,text/plane,application/powerpoint,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
					<div class="inputfile-value">
						<span class="item-text"></span>
						<button class="btn-delete"></button>
					</div>
					<button class="btn-inputfile">Прикрепить файл</button>
				</div>
				<div class="note-text">
					Размер файла: не более 10 Мб.<br/>
					Тип файла: *ppt, *pptx, *doc, *docx, *xls, *xlsx, *txt, *pdf, *png, *jpg.
				</div>
				<div class="error-text"></div>
			</div>
			<div class="field-box captcha-box col l12">
				<img class="captcha" />
				<input type="text" class="inputtext" ng-model="" />
				<label>Введите код, указанный на картинке</label>
				<div class="error-text"></div>
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