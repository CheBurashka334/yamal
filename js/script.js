$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
	// search 
	$('.search').keyup(function(){
		$(this).change();
	});
	$('.search').change(function(){
		if($(this).val().length > 0){
			$(this).addClass('dirty');
		} else {
			$(this).removeClass('dirty');
		}
	});
	
	// select
	// https://select2.github.io/
	if($(window).outerWidth() > 992){
		$('.customize-select option:first-child').removeAttr('value').text('');
		$('.customize-select').select2({
			language: "ru"
		});
		$('.dropdown-select').select2({
			language: "ru",
			theme: 'dropdown'
		});
		$('.select2-container').removeAttr('style');
		
	} else {
		$('select.mobile-synh').change(function(){
			var radio = $('.select-synh[data-select="'+$(this).attr('id')+'"]');
			radio.find('input[type="radio"]').not('[value="'+$(this).val()+'"]').prop('checked', false);
			radio.find('input[type="radio"][value="'+$(this).val()+'"]').prop('checked', true);
			radio.find('input[type="radio"]:checked').parent('.dropdown-item').click();
		});
	}
	$('.select-synh input[type="radio"]').change(function(){
		var select = $(this).parents('.select-synh').attr('data-select');
		if(($(window).outerWidth() > 992) || (!$('#'+select).hasClass('mobile-synh'))){
			$('#'+select).val($(this).val());
			$('#'+select).change();
		}
	});
	
	// dropdown init
	$('.dropdown-box').each(function(){
		var value = $(this).find('.dropdown-item[data-active="active"]').find('[data-value-text]');
		$(this).find('.dropdown-value > .item-text').html(value.attr('data-value-text'));
		if($(this).hasClass('with-icon')){
			$(this).find('.dropdown-value > .item-icon > .icon > use').attr('xlink:href', value.attr('data-value-icon'));
		}
		if($(this).hasClass('with-text-icon')){
			$(this).find('.dropdown-value > .item-icon > .icon').html(value.attr('data-value-icon'));
		}
	});
	// dropdown open
	$('.dropdown-box').click(function(e){
		$('.dropdown-box').not($(this)).removeClass('open');
		$(this).toggleClass('open');
		e.stopPropagation();
	});
	$('.page').click(function(){
		$('.dropdown-box, .more').removeClass('open');
	});
	$('.more').click(function(e){
		e.stopPropagation();
		$(this).addClass('open');
	});
	$('.more.open .tab-title').click(function(e){
		e.stopPropagation();
		$('.more').removeClass('open');
	});
	// dropdown change
	$('.dropdown-box .dropdown-item').click(function(e){
		var value = $(this).find('[data-value-text]');
		var box = $(this).parent('.dropdown-list').parent('.dropdown-box');
		
		$(this).attr('data-active', 'active').siblings().removeAttr('data-active');
		box.find('.dropdown-value > .item-text').html(value.attr('data-value-text'));
		
		if(box.hasClass('with-icon')){
			box.find('.dropdown-value > .item-icon > .icon > use').attr('xlink:href', value.attr('data-value-icon'));
		}
		if(box.hasClass('with-text-icon')){
			box.find('.dropdown-value > .item-icon > .icon').html(value.attr('data-value-icon'));
		}
		e.stopPropagation();
		box.removeClass('open');
	});
	// tabs init
	$('[data-tab-content]').each(function(){
		var content = $(this).attr('data-tab-content');
		var tab = $(this).val();
		$('#'+content).find('[data-tab='+tab+']').addClass('active');
	});
	// tabs change
	$('[data-tab-content]').change(function(){
		var content = $(this).attr('data-tab-content');
		var tab = $(this).val();
		$('#'+content).find('[data-tab]').removeClass('active');
		$('#'+content).find('[data-tab='+tab+']').addClass('active');
	});
	
	
	/*
	$(window).scroll(function(){
		if($(window).scrollTop() > 50) {
			$('.header').addClass('fixed');
		} else {
			$('.header').removeClass('fixed');
		}
	});
	*/
	
	// modal
	/*
	$('.btn-modal').click(function(){
		var modal = $(this).attr('data-modal');
		$('.dark-bg, #'+modal).fadeIn(500);
	});
	$('.modal .btn-close, .dark-bg').click(function(){
		$('.dark-bg, .modal').fadeOut(500);
	});
	*/
	
	// menu
	$('.js-menu').click(function(){
		var act = $(this).attr('data-action');
		switch(act){
			case 'open':
				$('.page-aside').addClass('open');
				$('.js-menu').attr('data-action', 'close');
			break;
			case 'close':
			default:
				$('.page-aside').removeClass('open');
				$('.js-menu').attr('data-action', 'open');
		}
	});
	
	// scrollFire
	// http://materializecss.com/scrollfire.html
	/*
	var options = [
		
	];
	Materialize.scrollFire(options);
	*/
	
	// jcarousel
	// http://sorgalla.com/jcarousel/docs/
	
	$('.carousel').jcarousel({
		list: '.carousel-inner',
		wrap: 'circular'
	});
	
	$('.carousel-pagination')
		.jcarouselPagination({
			item: function(page){
				return '<li class="nav-item"><a class="nav-link" href="#'+page+'"></a></li>';
			}
		})
		.on('jcarouselpagination:active', 'a', function(){ // - вот эта херня не работает почему-то
			$(this).addClass('active');
		})
		.on('jcarouselpagination:inactive', 'a', function(){ // - и эта (а должна!)
			$(this).removeClass('active');
		});
	
	$('.carousel-controlls .prev')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl({
			target: '-=1'
		});
	$('.carousel-controlls .next')
		.on('jcarouselcontrol:active', function(){
			$(this).addClass('active');
		})
		.on('jcarouselcontrol:inactive', function(){
			$(this).removeClass('active');
		})
		.jcarouselControl({
			target: '+=1'
		});

});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}

// angularjs 
// https://docs.angularjs.org/guide
// http://angular.ru/guide/
var yamal = angular.module('yamal',[]);
yamal.controller('addProj1Ctrl', ['$scope', function($scope){
	$scope.form = {};
	$scope.form.file = {'isset': false};
	$scope.setFiles = function(element){
		$scope.$apply(function(scope){
			if(element.files.length == 1){
				$scope.form.file.isset = true;
				$scope.form.file.value = element.files[0].name;
			} else if (element.files.length > 1) {
				$scope.form.file.isset = true;
				$scope.form.file.value = 'Выбрано файлов: '+element.files.length;
			}
		});
	}
	$scope.deleteFile = function(element){
		$scope.$apply(function(scope){
			angular.element(element).val(null); // не удаляется файл :(
			$scope.form.file.isset = false;
			$scope.form.file.value = '';
		});
	}
	// удалить
	$scope.formSubmit = function(){
		console.log($scope.form);
	}
}]);
yamal.controller('addProj2Ctrl', ['$scope', function($scope){
	$scope.form = {};
}]);
