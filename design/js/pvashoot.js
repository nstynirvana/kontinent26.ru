$(document).ready(function() {

	/*УДАЛИТЬ КОРОНАВИРУС*/
	$("body").on("click", ".popUpBanner-container .popUpBanner-close a, .popUpBanner .popUpBanner-shadow", function(){
		$(".popUpBanner").fadeOut();
		$.post( "/ajax/corona.php", function(data){
			
		}, "json");	
		return false;
	});
	/*УДАЛИТЬ КОРОНАВИРУС*/
	
	$(".rules-menu a").click(function() {
	    $('html, body').animate({
	        scrollTop: $($(this).attr("href")).offset().top
	    }, 2000);
	    return false;
	});
	
	$("body").on("submit", ".reservation-form", function(){
		
		if(!$(this).hasClass("ajax-form-send")){
			var dateStart = $(this).find(".from").val();
			var dateStartDate = new Date($(this).find(".from").val());
			var dateStopDate = new Date($(this).find(".to").val());
			
			var daysLag = Math.ceil(Math.abs(dateStartDate.getTime() - dateStopDate.getTime()) / (1000 * 3600 * 24));

			if (document.location.href.indexOf('/en/') === -1) {
				document.location.href='/reservation/?date='+dateStart+'&nights='+daysLag;
			} else {
				document.location.href='/en/reservation/?date='+dateStart+'&nights='+daysLag;
			}


			
			return false;
		}

	
	});


	$('.banner-slider-main').slick({
		dots: false,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 6000,
		speed: 2000,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 691,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
				}
			}
		]
	});

	$('.information-header-slider-container').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		//autoplay: true,
		/*
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
			  	dots: false,
			  	arrows: false,
			  }
			}
   		]
   		*/
	});

	$('.main-nomera-slider-big').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		//autoplay: true,
		asNavFor: '.main-nomera-slider-small',
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
			  	dots: false,
			  	arrows: false,
			  }
			}
   		]
	});

	$('.main-nomera-slider-small').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.main-nomera-slider-big',
		//autoplay: true,
		dots: false,
		arrows: true,
		focusOnSelect: true
	});
	
	$('.rooms-list-item-pic-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//autoplay: true,
		dots: false,
		arrows: true,
		focusOnSelect: true
	});
	
	
	$('.detail-nomer-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//autoplay: true,
		dots: false,
		asNavFor: '.detail-nomer-slider-after',
		arrows: true,
		focusOnSelect: true
	});

	$('.detail-nomer-slider-after').slick({
		slidesToShow: 10,
		slidesToScroll: 1,
		asNavFor: '.detail-nomer-slider',
		//autoplay: true,
		dots: false,
		arrows: false,
		focusOnSelect: true,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
			  	slidesToShow: 3,
			  	arrows: false,
			  }
			}
   		]
	});

	
	$('.specials-list-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//autoplay: true,
		dots: false,
		asNavFor: '.specials-list-slider-after',
		arrows: true,
		focusOnSelect: true
	});

	$('.specials-list-slider-after').slick({
		slidesToShow: 10,
		slidesToScroll: 1,
		asNavFor: '.specials-list-slider',
		//autoplay: true,
		dots: false,
		arrows: false,
		focusOnSelect: true,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
			  	slidesToShow: 3,
			  	arrows: false,
			  }
			}
   		]
	});


	$("body").on("click", ".header-line-left .main-menu a, .header-nomera-mobile-menu a", function(){

		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(".main-menu-popup").removeClass("open");
			$(".menu-control-link").removeClass("active");
		}
		else{
			$(this).addClass("active");
			$(".main-menu-popup").addClass("open");
			$(".menu-control-link").addClass("active");
		}

		return false;
	});

	$("body").on("click", ".menu-control-link", function(){

		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(".header-line-left .main-menu a").removeClass("active");
			$(".main-menu-popup").removeClass("open");
		}
		else{
			$(this).addClass("active");
			$(".header-line-left .main-menu a").addClass("active");
			$(".main-menu-popup").addClass("open");
		}

		return false;
	});

	$("body").on("click", ".main-menu-shadow", function(){

		$(".menu-control-link").click();

		return false;
	});

	$('.main-action-list').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		responsive: [
			{
			  	breakpoint: 1298,
			  	settings: {
			  		slidesToShow: 3,
			  		arrows: true,
			  	}
			},{
			  	breakpoint: 1041,
			  	settings: {
			  		slidesToShow: 2,
			  		arrows: true,
			  	}
			},{
			  	breakpoint: 785,
			  	settings: {
			  		slidesToShow: 2,
			  		arrows: true,
			  	}
			},{
			  	breakpoint: 338,
			  	settings: {
			  		slidesToShow: 1,
			  		arrows: false,
			  	}
			}
   		]
	});

	$('.main-service-list').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		responsive: [
			{
			  	breakpoint: 1298,
			  	settings: {
			  		slidesToShow: 3,
			  	}
			},{
			  	breakpoint: 1041,
			  	settings: {
			  		slidesToShow: 3,
			  	}
			},{
			  	breakpoint: 786,
			  	settings: {
			  		slidesToShow: 1,
			  	}
			},{
			  	breakpoint: 338,
			  	settings: {
			  		slidesToShow: 1,
			  		arrows: false,
			  	}
			}
   		]
	});

	$('.hotel-pluses-list.mobile-list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
	});

	$('.main-restorant-gallery.mobile-list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
	});

	$('.map-placec-list.mobile-list').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		responsive: [
			,{
			  	breakpoint: 786,
			  	settings: {
			  		slidesToShow: 3,
			  	}
			},{
			  	breakpoint: 338,
			  	settings: {
			  		slidesToShow: 1,
			  		arrows: false,
			  	}
			}
   		]
	});


	$("body").on("click", ".nomera-container-top a", function(){

		if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(".nomera-container-bottom").slideUp();
		}
		else{
			$(this).addClass("active");
			$(".nomera-container-bottom").slideDown();
		}
		
		return false;

	});











	$("body").on("click", ".mobile-menu-link a", function(){

		if(!$(this).hasClass("active")){
			$(".mobile-menu-open a").addClass("active");
			$(".mobile-menu-container").addClass("active");
		}
		else{
			$(".mobile-menu-open a").removeClass("active");
			$(".mobile-menu-container").removeClass("active");
		}

		return false;
	});

	$("body").on("click", ".mobile-menu-container .main-menu a.parent", function(){
		
		$(this).toggleClass("active");

		return false;
	});














	$("body").on("click", ".production-list-tabs a", function(){

		if(!$(this).hasClass("active")){
			$(".production-list-tabs a").removeClass("active");
			$(this).addClass("active");
			$(".production-list-box").hide();
			$(".production-list-box."+$(this).data("boxname")).show();
		}

		return false;
	});

/*
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 'auto',
		spaceBetween: 120,
		centeredSlides: true,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
    });
*/


    $("body").on("click", ".scrollmenu a",function(){

    	if($(this).hasClass('menu-dop-open')){
    		$(".production-list-tabs a[data-boxname="+$(this).data("boxname")+"]").click();
    	}

    	$(".header-line-2-container .mobile-menu-open a.active").click();

    	$("html, body").animate({
        	scrollTop: $("div[data-menu="+$(this).attr("href")+"]").offset().top + "px"
    	}, {
         	duration: 500,
         	easing: "swing"
    	});

    	return false;
    });

	$('.portfolioContainer').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		autoplay: false,
	});

	$('.videoGallery').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		autoplay: false,
	});

	$('.otherProducts').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: false,
		autoplay: false,
		responsive: [
			{
			  breakpoint: 1280,
			  settings: {
			    slidesToShow: 2,
			    slidesToScroll: 3,
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
			    slidesToShow: 1,
			    slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
			    slidesToShow: 1,
			    slidesToScroll: 1
			  }
			}
   		]
	});


	$('.sertificats-list').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		autoplay: false,
		responsive: [
			{
			  breakpoint: 1280,
			  settings: {
			    slidesToShow: 3,
			    slidesToScroll: 3,
			  }
			},
			{
			  breakpoint: 768,
			  settings: {
			    slidesToShow: 3,
			    slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
			    slidesToShow: 2,
			    slidesToScroll: 1
			  }
			}
   		]
	});

	$("body").on("click", ".openOtherList", function(){
		if(!$(this).hasClass("active")){
			$(this).addClass("active");
			$(this).children(".text").text("Скрыть");
			$(".partner-podkat").slideDown();
		}
		else{
			$(this).removeClass("active");
			$(this).children(".text").text("Показать все");
			$(".partner-podkat").slideUp();
		}
		return false;
	});
	
	$("body").on("click", ".openMainMenu", function(){

		if($(this).hasClass("active")){
			$(".main-menu").removeClass("active");
		}
		else{
			$(".main-menu").addClass("active");
		}

		return false;
	});


	$("body").on("click", ".openForm", function(){
		var formId = $(this).data("formopen");
		$.fancybox.open({
			src  : '#'+formId,
			type : 'inline',
			opts : {
				afterShow : function( instance, current ) {
					console.info( 'done!' );
				}
			}
		});
		return false;
	});

	$("body").on("click", ".closePopUp", function(){
		$.fancybox.close();
		return false;
	});


	$("input.phoneNumber").mask("+7 (999)-999-99-99");

	$(".fancybox").fancybox();

	$("body").on("click", ".catalogDetail-tabs-menu a", function(){

		if(!$(this).hasClass("active")){
			$(".catalogDetail-tabs-menu a").removeClass("active");
			$(this).addClass("active");
			$(".catalogDetail-tab-item").hide();
			$("#"+$(this).data("type")).show();
		}

		return false;
	});

	$("body").on("click", ".history-links .show-podkat", function(){

		if($(this).parent().hasClass("active")){
			$(this).parent().removeClass("active");
			$(this).parent().children(".history-items-list").slideUp(300);
		}
		else{
			$(this).parent().addClass("active");
			$(this).parent().children(".history-items-list").slideDown(300);
		}

		return false;
	});

	$("body").on("click", ".konferencZalOpenForm", function(){

		var name = $(this).data("zalname");
		$(".konferencZalSelected").val(name);

		return false;
	});

	$("body").on("submit", ".ajax-form-send", function(){
		
		var form = $(this);
			
		var string = $(this).serialize();
		$.ajax({
			type: "POST",
			url: '/ajax/sendForm-formID1.php',
			data: string,
			cache: false,
			processData: false,
			error: function (jqXHR, exception) {
			    if (jqXHR.status === 0) {
					alert('Not connect.\n Verify Network.');
				} else if (jqXHR.status == 404) {
					alert('Requested page not found. [404]');
				} else if (jqXHR.status == 500) {
					alert('Internal Server Error [500].');
				} else if (exception === 'parsererror') {
					alert('Requested JSON parse failed.');
				} else if (exception === 'timeout') {
					alert('Time out error.');
				} else if (exception === 'abort') {
					alert('Ajax request aborted.');
				} else {
					alert('Uncaught Error.\n' + jqXHR.responseText);
				}
			},
			success: function(result) {
				
				if(result.indexOf("success") != -1){
					
					$(form).find("input[type=text]").val("");
					
					$.fancybox.open({
						src  : '#successSended',
						type : 'inline',
						opts : {
							afterShow : function( instance, current ) {
								console.info( 'done!' );
							}
						}
					});						
				}
				
			}
		});

		return false;
	});


});

/*
ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [44.616610, 41.921302],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),
		
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'design/wool-company.com/img/map-point.png',
            // Размеры метки.
            iconImageSize: [68, 88],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-34, -88]
        }),
		
        myPlacemarkWithContent = new ymaps.Placemark([44.616610, 41.921302], {
            hintContent: 'ул. Краснофлотская, оф. 14',
            balloonContent: '',
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'img/icon-map-point.png',
            // Размеры метки.
            iconImageSize: [48, 65],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-29, -65],
            // Макет содержимого.
            iconContentLayout: MyIconContentLayout
        });

    myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects
        //.add(myPlacemark)
        .add(myPlacemarkWithContent);
});

function sendAjax(string, action){
	$.ajax({
		type: "POST",
		url: '/ajax/putAjax.php',
		data: string,
		cache: false,
		processData: false,
		error: function (jqXHR, exception) {
		    if (jqXHR.status === 0) {
				alert('Not connect.\n Verify Network.');
			} else if (jqXHR.status == 404) {
				alert('Requested page not found. [404]');
			} else if (jqXHR.status == 500) {
				alert('Internal Server Error [500].');
			} else if (exception === 'parsererror') {
				alert('Requested JSON parse failed.');
			} else if (exception === 'timeout') {
				alert('Time out error.');
			} else if (exception === 'abort') {
				alert('Ajax request aborted.');
			} else {
				alert('Uncaught Error.\n' + jqXHR.responseText);
			}
		},
		success: function(result) {
			console.log(result);
			if(action == "USER_MESSAGE"){
				$(".contactForm .resultMessage").text(result).fadeIn(300);
				$(".contactForm input.inputText").attr("value", "").addClass("success");
			}
			else if(action == "USER_SERVICE"){
				$(".orderServiceForm .resultMessage").text(result).fadeIn(300);
				$(".orderServiceForm input.inputText").addClass("success");
				//$(".orderServiceForm input.inputText").attr("value", "").addClass("success");
			}
			else if(action == "KONTACT_UPDATE"){
				
			}
		}
	});
}
*/