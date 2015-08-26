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

		
	// forms
	$('[required]').change(function(){
		validateRequired($(this));
	});
	$('input[type="email"]').change(function(){
		validateEmail($(this));
	});
	$('input[type="tel"]').change(function(){
		validateTel($(this));
	});
	$('input[type="file"]').change(function(){
		if($(this).val().length > 0){
			var isValid = validateFile($(this));
			$(this).siblings('.inputfile-value').find('.item-text').text($(this)[0].files[0].name);
			$(this).siblings('.inputfile-value').addClass('shown');
		} else {
			$(this).parents('.inputfile').removeClass('invalid-file');
			$(this).siblings('.inputfile-value .item-text').text('');
			$(this).siblings('.inputfile-value').removeClass('shown');
		}
	});
	$('.inputfile .btn-delete').click(function(){
		$(this).parents('.inputfile').find('input[type="file"]').val('');
		$(this).parents('.inputfile').removeClass('invalid-file');
		$(this).parents('.inputfile').find('input[type="file"]').change();
		return false;
	});
	$('form').submit(function(){
		if(($(this).find('.invalid-required, .invalid-pattern, .invalid-file').length > 0) || ($(this).find('[required]').val().length == 0)){
			if($(this).find('[required]').val().length == 0){
				$(this).find('[required]').each(function(){
					validateRequired($(this));
				});
			}
			return false;
		} 
	});
		
});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}
// validation functions
function validateEmail(el){
	var pattern = /.+@.+\..+/i;
	if(pattern.test(el.val())){
		el.removeClass('invalid-pattern');
	} else {
		el.addClass('invalid-pattern');
	}
}
function validateTel(el){
	var pattern = /\d{10,11}/;
	if(pattern.test(el.val())){
		el.removeClass('invalid-pattern');
	} else {
		el.addClass('invalid-pattern');
	}
}
function validateFile(el){
	var typePattern = /ppt|pptx|doc|docx|xls|xlsx|txt|pdf|png|jpg/i;
	if((el[0].files[0].size > 10485760) || !(typePattern.test(el[0].files[0].name.split('.').pop()))) {
		el.parents('.inputfile').addClass('invalid-file');
		return false;
	} else {
		el.parents('.inputfile').removeClass('invalid-file');
		return true;
	}
}
function validateRequired(el){
	if((el.val().length == 0) || ((el.attr('type') == 'checkbox') && (el.prop('checked') == false))){
		el.addClass('invalid-required');
	} else {
		el.removeClass('invalid-required');
	}
}