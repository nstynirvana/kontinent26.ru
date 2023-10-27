<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="main-map-left">
	<div class="main-map-left-container">
		<div class="main-restorant-title">Places nearby</div>
		<div class="map-placec-list lg-view">
			
		</div>
	</div>

	<div class="map-placec-list mobile-list xs-view md-view">
		
	</div>
</div>
<div class="main-map-right">
	<div id="map"></div>
	<script>
		ymaps.ready(init);

		function init() {

		    // Создание экземпляра карты.
		    var myMap = new ymaps.Map('map', {
		            center: [45.044209, 41.970323],
		            zoom: 16
		        }, {
		            searchControlProvider: 'yandex#search'
		        }),
		        
		        menu = $('<div class="map-placec-list lg-view"/>'),
		        menu2 = $('<div class="map-placec-list mobile-list xs-view md-view"/>'),
		        
		        <?foreach($arResult["ITEMS"] as $arItem):?>
		        
	        		submenuItem = $('<div class="map-placec-item"><a class="hitTheFloor" href="#" data-clickid="<?=$arItem["ID"]?>"><span class="title"><?=$arItem["NAME"]?></span><span class="metrs"><?=$arItem["PROPERTIES"]["METRS"]["VALUE"]?></span></a></div>'),
	        		submenuItem2 = $('<div class="map-placec-item"><a class="hitTheFloor" href="#" data-clickid="<?=$arItem["ID"]?>"><span class="title"><?=$arItem["NAME"]?></span><span class="metrs"><?=$arItem["PROPERTIES"]["METRS"]["VALUE"]?></span></a></div>'),
	        	
	        	
			        myPlacemark<?=$arItem["ID"]?> = new ymaps.Placemark([<?=$arItem["PROPERTIES"]["COORDS"]["VALUE"]?>], {
			            hintContent: '<?echo $arItem["NAME"]?>',
			            balloonContent: '<?=$arItem["NAME"]?>'
			        }/*, {
			            iconLayout: 'default#image',
			            iconImageHref: '/images/icons/iconformap.png',
			            iconImageSize: [32, 32],
			            iconImageOffset: [-16, -16]
			        }*/);
			        
			        submenuItem
		            	.appendTo(menu)
		            	//.appendTo(menu2)
		            	// При клике по пункту подменю открываем/закрываем баллун у метки.
		            	.find('.hitTheFloor')
		            	.bind('click', function () {
			                if (!myPlacemark<?=$arItem["ID"]?>.balloon.isOpen()) {
			                    myPlacemark<?=$arItem["ID"]?>.balloon.open();
			                } else {
			                    myPlacemark<?=$arItem["ID"]?>.balloon.close();
			                }
			                
			                $(".hitTheFloor").removeClass("active");
			                $(this).addClass("active");
			                
			                return false;
			            });
		        
		    		myMap.geoObjects.add(myPlacemark<?=$arItem["ID"]?>);
		    		
		    		submenuItem2
		            	.appendTo(menu2)
		            	// При клике по пункту подменю открываем/закрываем баллун у метки.
		            	.find('.hitTheFloor')
		            	.bind('click', function () {
			                if (!myPlacemark<?=$arItem["ID"]?>.balloon.isOpen()) {
			                    myPlacemark<?=$arItem["ID"]?>.balloon.open();
			                } else {
			                    myPlacemark<?=$arItem["ID"]?>.balloon.close();
			                }
			                
			                $(".hitTheFloor").removeClass("active");
			                $(this).addClass("active");
			                
			                return false;
			            });
		        
		    		myMap.geoObjects.add(myPlacemark<?=$arItem["ID"]?>);
		    	
		    	<?endforeach;?>	
		        
		        //menu.appendTo($('.map-placec-list'));
		        $(".map-placec-list.lg-view").replaceWith(menu);
		        $(".map-placec-list.mobile-list.xs-view.md-view").replaceWith(menu2);
		        
		        $('.map-placec-list.mobile-list').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: false,
				});
		       
		}
	
	</script>
</div>