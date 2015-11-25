<!DOCTYPE html>
<html>
<head>
	<title>Ямал</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/layoutvisibily.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<div id="svg-placeholder" class="hide"></div>
<div class="layout noanim">
<div class="page-aside hide-on-large-only">
	<div class="inner">
		<?include('mobile-menu.php');?>
	</div>
</div>
<div class="page">
	<div class="header">
		<div class="header-content">
			<div class="container row">
				<div class="logo-box col l3 hide-on-small-only">
					<img class="logo" src="images/logo.png" />
				</div>
				<div class="phone-box col l6 s8">
					<a class="nostyle" href="callto:+73492252825">+7&nbsp;(349)&nbsp;225&#8209;28&#8209;25</a>
				</div>
				<div class="btns-box col l3 hide-on-small-only">
					<button class="btn primary">Отправить заявку</button>
					<button class="btn-icon show-modal" data-modal="#modal-links"><svg class="icon"><use xlink:href="#lock"/></svg></button>
				</div>
			</div>
		</div>
		<div class="header-menu">
			<div class="container row">
				<button class="js-menu btn-menu btn-icon default hide-on-large-only" data-action="open"><svg class="icon"><use xlink:href="#menu"/></svg></button>
				<div class="main-menu-box hide-on-med-and-down">
					<ul class="main-menu">
						<li class="menu-item"><a class="menu-link active" href="#">О Ямале</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Инфраструктура поддержки</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Меры поддержки</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Полезная информация</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Контакты</a></li>
					<ul>
				</div>
				<div class="search-box hide-on-small-only">
					<input type="text" class="search" id="search" />
					<label for="search" class="btn-icon btn-search default"><svg class="icon"><use xlink:href="#magnifying-glass"/></svg></label>
					<span class="placeholder">Найти</span>
				</div>
			</div>
		</div>
	</div>
	<div class="workarea container">