$(document).ready(function(){
	
	$('#svg-placeholder').html(svg);
	
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
	/*
	$('.js-menu').click(function(){
		var act = $(this).attr('data-action');
		switch(act){
			case 'open':
				position();
				$('.page-aside').addClass('open');
				$('.js-menu').attr('data-action', 'close');
			break;
			case 'close':
			default:
				var pos = parseInt($('.page').css('top'), 10);
				$('.page-aside').removeClass('open');
				$('.js-menu').attr('data-action', 'open');
				$('.page').css({'position': 'relative', 'top': '0px'});
				$(window).scrollTop(-pos);
		}
	});
	*/
	
	/*
	$('.dropdown-btn').dropdown({
		//gutter: 40,
		constrain_width: false,
		beloworigin: true
	});
	*/
	
	// scrollFire
	// http://materializecss.com/scrollfire.html
	/*
	var options = [
		
	];
	Materialize.scrollFire(options);
	*/
	
	// jcarousel
	// http://sorgalla.com/jcarousel/docs/
	/*
	$('.carousel').jcarousel({
		list: '.carousel-inner',
		wrap: 'circular'
	});
	*/
	/*$('.carousel-nav')
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
		});*/
	/*
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
	
	*/

});

function position() {
	var pos = $(window).scrollTop();
	$('.page').css({'position': 'fixed', 'top': - pos+'px'});
}

// angularjs 
// https://docs.angularjs.org/guide
// http://angular.ru/guide/
