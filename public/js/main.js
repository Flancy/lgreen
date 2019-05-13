;(function () {
	
	'use strict';



	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var fullHeight = function() {

		if ( !isMobile.any() ) {
			$('.js-fullheight').css('height', $(window).height());
			$(window).resize(function(){
				$('.js-fullheight').css('height', $(window).height());
			});
		}

	};

	// Animations

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight animated');
							} else {
								el.addClass('fadeInUp animated');
							}

							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '85%' } );
	};


	var burgerMenu = function() {

		$('.js-fh5co-nav-toggle').on('click', function(event){
			event.preventDefault();
			var $this = $(this);

			if ($('body').hasClass('offcanvas')) {
				$this.removeClass('active');
				$('body').removeClass('offcanvas');	
			} else {
				$this.addClass('active');
				$('body').addClass('offcanvas');	
			}
		});



	};

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#fh5co-aside, .js-fh5co-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
			
	    	}
	    	
	    }
		});

		$(window).scroll(function(){
			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
			
	    	}
		});

	};

	var sliderMain = function() {
		
	  	$('#fh5co-hero .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000,
			directionNav: true,
			start: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			},
			before: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			}

	  	});

	};

	// Document on load.
	$(function(){
		fullHeight();
		contentWayPoint();
		burgerMenu();
		mobileMenuOutsideClick();
		sliderMain();

		//New code
		if($(window).width() <= 1024 && $(window).width() >= 769) {
			$(window).on('load resize', function() {
				$(".price .row, .portfolio .row").each(function () {
					var container = $(this);
					var mh = 0;
					container.children().each(function () {
					   $(this).height('auto');
					   var h_block = parseInt($(this).height());
					   if(h_block > mh) {
						  mh = h_block;
					   };
					});
					container.children().height(mh);
				})
			});
		}
		//$('#test').scrollTo();

		$('.work.image-popup, button[data-target=".modalBuy"], a[data-target=".bd-example-modal-lg"]').click(function(event) {
			$('body').css('overflow', 'hidden');
			setTimeout(function() {
				$('.modal-backdrop.in').addClass('modal_full_bg');
				$('.modal.in .modal-dialog').addClass('modal_full');
			}, 300);
		});
		$('button[data-target=".modalBuy"]').click(function(event) {
			var title = $(this).closest('tr').find('.titleProduct').text();
			$('.modal-title-price').text(title);
			$('body').css('overflow', 'hidden');
			setTimeout(function() {
				$('.modal-backdrop.in').addClass('modal_full_bg');
				$('.modal.in .modal-dialog').addClass('modal_full');
			}, 300);
		});

		$(document).on('click', 'button[data-target="#modalOrderCatalog"]', function(event) {
			var title = $(this).closest('tr').find('td:first-of-type').text();
			var count = $(this).closest('tr').find('input').val();

			$('#modalOrderCatalog .titlePriceItem').text('"'+title+'"');
			$('#modalOrderCatalog input[name="item"]').val(title);
			$('#modalOrderCatalog input[name="count"]').val(count);
		});

		$('.modal-header .close').click(function(event) {
			$('body').css('overflow', 'auto');
		});
		$('button[data-target=".modalBuy"]').click(function(event) {
			var title = $(this).closest('tr').find('.titleProduct').text();
			$('#modalBuyTitle').text('Вы хотите приобрести "'+title+'"');
		});

		$('a[data-target=".bd-example-modal-lg"]').click(function(event) {
			var idCategory = parseInt($(this).attr('data-id'));
			var titlePrice = $(this).attr('data-title');
			$('.modal-title-price').text(titlePrice);
			console.log(idCategory);
			$.ajax({
				url: '/priceList',
				type: 'POST',
				dataType: 'JSON',
				data: {"category": idCategory, "_token": $('#csrf').text()},
			})
			.done(function(data) {
				$('.modal tbody').html('');
				var data = data;
				var arrData = $.map(data, function( obj, i ) { return obj; } ); 
				var lengthData = arrData.length;
				var i = 0;
				$.each(arrData, function(key, data) {
					$('.modal tbody').append('<tr>'+
                        '<td>'+data.title+'</td>'+
                        '<td>'+data.price+' рублей.</td>'+
                        '<td>'+data.priceOpt+' рублей.</td>'+
                        '<td><input type="text" class="form-control" id="col" placeholder="Кол-во"></td>'+
                        '<td><center><button type="button" class="btn btn-primary modalOrderPrice" data-toggle="modal" data-target="#exampleModalPrice">'+
                            'Сделать заказ'+
                        '</button></center></td>'+
                    '</tr>');
                    i++;
				});
			})
			.fail(function(error) {
				console.log(error);
			});
		});
		$(document).on('click', '.modalOrderPrice', function(event) {
			var title = $(this).closest('tr').find('td:first-of-type').text();
			var count = $(this).closest('tr').find('input').val();

			$('#exampleModalPrice .titlePriceItem').text('"'+title+'"');
			$('#exampleModalPrice input[name="item"]').val(title);
			$('#exampleModalPrice input[name="count"]').val(count);
		});
	});


}());