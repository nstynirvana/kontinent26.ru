<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(26105076, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/26105076" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<?include($_SERVER['DOCUMENT_ROOT']."/include/template/head-en.php");?>
</head>

<body>

	<?$APPLICATION->ShowPanel()?>

	<?/*if($_SESSION["SHOW_CORONA"] == ""):?>
	<div class="popUpBanner">
		<div class="popUpBanner-shadow"></div>
		<div class="popUpBanner-container">
			<div class="popUpBanner-close"><a href="#"></a></div>
			<div class="popUpBanner-img">
				<img src="/design/img/banner.jpg" alt="" title="" />
			</div>
		</div>
	</div>
	<?endif;*/?>

	<div class="main-menu-popup">
		<div class="main-menu-shadow"></div>
		<div class="main-menu-container">
			<div class="main-menu-top">
				<a href="#" class="menu-control-link active"><span class="icon icon-buter"></span></a>
				<div class="main-phone"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"),Array(),Array("MODE"=>"html"));?></div>
			</div>
			<div class="main-menu-center">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "main-menu", Array(
					"COMPONENT_TEMPLATE" => ".default",
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					),
					false
				);?>

			</div>
			<div class="main-menu-bottom">
				<a href="/en/reservation/" class="btn btn-gray">Book a room</a>
			</div>	
		</div>
	</div>
	
	<div class="wrapper-outside">