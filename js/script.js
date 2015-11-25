$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
	setTimeout(function(){
		$('.layout').addClass('animation');
	},10);
	setTimeout(function(){
		$('.animation .first-line').addClass('anim');
	},50);
	setTimeout(function(){
		$('.animation .second-line').addClass('anim');
	},250);
	setTimeout(function(){
		$('.animation .third-line, .animation .trans-line:eq(0), .animation .trans-line:eq(3), .animation .trans-line:eq(5)').addClass('anim');
	},400);
	setTimeout(function(){
		$('.animation .fourth-line, .animation .trans-line:eq(1), .animation .trans-line:eq(2), .animation .trans-line:eq(4)').addClass('anim');
	},600);
	
	// modals
	// open
	$('.show-modal').click(function(){
		var modal = $(this).attr('data-modal');
		$('.dark-bg,'+modal).addClass('open');
	});
	/*setTimeout(function(){
		$('.dark-bg,#modal-opros').addClass('open');
	},20000);
	setTimeout(function(){
		$('.dark-bg,#modal-soc').addClass('open');
	},60000);
	*/
	
	// close
	$('.btn-close, .dark-bg').click(function(){
		$('.dark-bg, .modal').removeClass('open');
	});
	
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
	
	if($(window).outerWidth() < 992){
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
		$('.dropdown-sublist').removeClass('open');
		$(this).toggleClass('open');
		e.stopPropagation();
	});
	$('.page').click(function(){
		$('.dropdown-box, .dropdown-sublist, .more').removeClass('open');
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
		if($(this).hasClass('parent')){
			$(this).siblings('.dropdown-item').find('.dropdown-sublist').removeClass('open');
			$(this).find('.dropdown-sublist').toggleClass('open');
			e.stopPropagation();
		} else {
			var value = $(this).find('[data-value-text]');
			var box = $(this).parents('.dropdown-box');
			
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
		}
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
		$(this).find('[required]').each(function(){
			validateRequired($(this));
		});
		if($(this).find('.invalid-required, .invalid-pattern, .invalid-file').length > 0){
			return false;
		} 
	});
	
	// ui-slider
	// http://api.jqueryui.com/slider/
	$('.calc-ui-slider').each(function(){
		$(this).slider();
		if($(this).attr('data-min')){
			var min = parseInt($(this).attr('data-min'),10);
			if(!isNaN(min)){
				$(this).slider("option", "min", min);
				if($(this).hasClass('money')){
					$(this).append('<span class="min">'+convert(min,'toMoney')+'</span>');
				} else {
					$(this).append('<span class="min">'+min+'</span>');
				}
			}
		}
		if($(this).attr('data-max')){
			var max =  parseInt($(this).attr('data-max'),10);
			if(!isNaN(max)){
				$(this).slider("option", "max", max);
				if($(this).hasClass('money')){
					$(this).append('<span class="max">'+convert(max,'toMoney')+'</span>');
				} else {
					$(this).append('<span class="max">'+max+'</span>');
				}
			}
		}
		if($(this).attr('data-step')){
			var step = parseInt($(this).attr('data-step'),10);
			if(!isNaN(step)){
				$(this).slider("option", "step", step);
			}
		}
		if($(this).attr('data-value')){
			var value;
			if(($(this).attr('data-value') == 'max') && max){
				value = max;
			} else if(($(this).attr('data-value') == 'min') && min){
				value = min;
			} else {
				value = parseInt($(this).attr('data-value'),10);
			}
		} else {
			if(min) {
				var value = min;
			} else {
				var value = 0;
			}
		}
		$(this).slider("option", "value", value);
		if($(this).find('.slider-input').length >  0){
			if($(this).hasClass('money')){
				$(this).find('.slider-input').val(convert($(this).slider("option", "value"),'toMoney'));
			} else {
				$(this).find('.slider-input').val($(this).slider("option", "value"));
			}
		}
		if($(this).attr('data-unit')){
			var unit = $(this).attr('data-unit');
			$(this).append('<span class="unit"></span>');
			getSliderUnit($(this),value,unit);
		}
	});
	// change-slide
	$('.calc-ui-slider').on("slidechange slide", function(event, ui){
		if($(this).find('.slider-input').length >  0){
			//$(this).find('.slider-input').val($(this).slider("option", "value"));
			if($(this).hasClass('money')){
				$(this).find('.slider-input').val(convert($(this).slider("option", "value"),'toMoney'));
				//console.log($(this).find('.slider-input').val());
			} else {
				$(this).find('.slider-input').val($(this).slider("option", "value"));
			}
			if($(this).attr('data-unit')){
				getSliderUnit($(this),$(this).slider("option", "value"),$(this).attr('data-unit'));
			}
		}
	});
	// change input
	/*$('.calc-ui-slider .slider-input').keyup(function(){
		//var value = parseInt($(this).val(),10);
		var value = $(this).val();
		if(!isNaN(value)){
			$(this).parent('.calc-ui-slider').slider("option","value", value);
		} else {
			$(this).val($(this).parent('.calc-ui-slider').slider("option","value"));
		}
		//console.log(value);
	});*/
	$('.calc-ui-slider .slider-input').change(function(){
		var value = convert($(this).val(),'toInt');
		if(!isNaN(value)){
			if(value < $(this).parent('.calc-ui-slider').slider("option","min")){
				value = $(this).parent('.calc-ui-slider').slider("option","min");
			}
			if(value > $(this).parent('.calc-ui-slider').slider("option","max")){
				value = $(this).parent('.calc-ui-slider').slider("option","max");
			}
			if(value % $(this).parent('.calc-ui-slider').slider("option","step") != 0){
				value = Math.floor(value/$(this).parent('.calc-ui-slider').slider("option","step"))*$(this).parent('.calc-ui-slider').slider("option","step");
			}
			$(this).parent('.calc-ui-slider').slider("option","value", value);
		} else {
			console.error('не надо так');
			$(this).val(convert($(this).parent('.calc-ui-slider').slider("option","value"),'toMoney'));
		}
	});
		
});

function getSliderUnit(el,value,unit){
	switch(unit) {
		case 'month':
			if ((value % 10 == 1)&& !((value % 100 > 10) && (value % 100 < 20))) {
				unit = 'месяц';
			} else if(((value % 10 > 1) && (value % 10 < 5)) && !((value % 100 > 10) && (value % 100 < 20))) {
				unit = 'месяца';
			} else {
				unit = 'месяцев';
			}
			el.children('.unit').html(unit);
		break;
		default:
			el.children('.unit').html(unit);
		break;
	}
	el.children('.unit').css('left', (value.toString().length+1)*8+12);
}
function convert(value,view){
	switch(view){
		case 'toMoney':
			value = value.toString().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
		break;
		case 'toInt':
		default:
			value = parseInt(value.replace(/\s+/g, ''),10);
		break;
	}
	return value;
}

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