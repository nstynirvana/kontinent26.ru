<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>

<?$APPLICATION->ShowHead();?>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle()?> - гостиница «Континент» г. Ставрополь</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@400;600;700&family=Rubik:wght@300;400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/banqueting_hall/design/css/style.css">
    <link href="/design/css/style.css?v=23" rel="stylesheet" />

<!-- Yandex.Metrika counter -->

    <script src="https://api-maps.yandex.ru/2.1/?apikey=60effeca-5cb2-411c-b375-a6cefaea1420&amp;lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript" src="/design/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/design/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/design/js/jquery.maskedinput-1.2.2.js"></script>
    <script type="text/javascript" src="/design/js/slick.min.js"></script>
    <script type="text/javascript" src="/design/js/jquery.selectric.js"></script>
    <script type="text/javascript" src="/design/js/fancybox/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="/design/js/pvashoot.js?v=4"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


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

    	<?$APPLICATION->ShowPanel()?>


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
                <a href="/reservation/" class="btn btn-gray">Забронировать номер</a>
            </div>
        </div>
    </div>

    <section class="main-block detail-page service-page">

        <div class="konference-detail-nomer-slider">

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banner-slider-banket",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "banner-slider-banket",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0=>"",1=>"",),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "10",
                    "IBLOCK_TYPE" => "banqueting",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "5",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0=>"",1=>"",),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>


        </div>


        <div class="header-line service-style">

            <div class="header-line-left">
                <div class="main-menu">
                    <a href="#"><span class="icon icon-buter"></span></a>
                </div>
                <div class="main-phone">
                    <span class="lg-view"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"),Array(),Array("MODE"=>"html"));?></span>
                    <a class="md-view" href="/rooms/">Номера</a>
                </div>
            </div>
            <div class="header-line-center">
                <div class="logo"><a href="/"><img src="/design/img/logo.svg" alt="" title="" /></a></div>
            </div>
            <div class="header-line-right">
                <div class="header-line-socials lg-view">
                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"),Array(),Array("MODE"=>"html"));?>
                </div>
                <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"),Array(),Array("MODE"=>"html"));?>
            </div>
        </div>

    </section>











</head>
<body>

    <div class="mobile-menu">
        <div class="mobile-menu-wrapper">
            <div class="mobile-menu-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                    <rect width="30" height="2" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 23 21.2134)" fill="#C7A462"/>
                    <rect y="21.2134" width="30" height="2" transform="rotate(-45 0 21.2134)" fill="#C7A462"/>
                </svg>
            </div>
            <div class="mobile-menu-header">
                <div class="mobile-menu-header-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
                        <rect width="30" height="2" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 23.001 22)" fill="#C7A462"/>
                        <rect x="0.000976562" y="22" width="30" height="2" transform="rotate(-45 0.000976562 22)" fill="#C7A462"/>
                    </svg>
                </div>
                <a href="#" class="mobile-menu-header-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.505 0L41.0768 3.54973L44.9006 3.94937L42.0386 6.53526L42.8362 10.3201L39.505 8.39241L36.1503 10.3201L36.948 6.53526L34.0859 3.94937L37.9332 3.54973L39.505 0Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.505 68.6799L41.0768 72.2297L44.9006 72.6293L42.0386 75.2152L42.8362 79.0235L39.505 77.0723L36.1503 79.0235L36.948 75.2152L34.0859 72.6293L37.9332 72.2297L39.505 68.6799Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41907 34L6.99083 37.5497L10.8381 37.9494L7.95265 40.5353L8.77373 44.3436L5.41907 42.3924L2.06441 44.3436L2.88548 40.5353L0 37.9494L3.8473 37.5497L5.41907 34Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M74.4191 34L75.9908 37.5497L79.8381 37.9494L76.9527 40.5353L77.7737 44.3436L74.4191 42.3924L71.0644 44.3436L71.8855 40.5353L69 37.9494L72.8473 37.5497L74.4191 34Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9552 18L12.527 21.5497L16.3743 21.9494L13.5122 24.5353L14.3099 28.3201L10.9552 26.3924L7.624 28.3201L8.42161 24.5353L5.53613 21.9494L9.38344 21.5497L10.9552 18Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0519 6L23.6236 9.52622L27.4709 9.92586L24.5855 12.5353L25.3831 16.3201L22.0519 14.3689L18.6972 16.3201L19.4948 12.5353L16.6328 9.92586L20.4801 9.52622L22.0519 6Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M68.6183 18L67.0465 21.5262L63.1992 21.9259L66.0612 24.5353L65.2636 28.3201L68.6183 26.3689L71.9495 28.3201L71.1519 24.5353L74.0139 21.9259L70.1666 21.5262L68.6183 18Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M57.5216 6L55.9498 9.52622L52.1025 9.92586L54.988 12.5353L54.1669 16.3201L57.5216 14.3689L60.8763 16.3201L60.0787 12.5353L62.9407 9.92586L59.0934 9.52622L57.5216 6Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9552 51L12.527 54.5497L16.3743 54.9494L13.5122 57.5353L14.3099 61.3201L10.9552 59.3924L7.624 61.3201L8.42161 57.5353L5.53613 54.9494L9.38344 54.5497L10.9552 51Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M68.6183 51L67.0465 54.5497L63.1992 54.9494L66.0612 57.5353L65.2636 61.3201L68.6183 59.3924L71.9495 61.3201L71.1519 57.5353L74.0139 54.9494L70.1666 54.5497L68.6183 51Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0519 64L23.6236 67.5262L27.4709 67.9494L24.5855 70.5353L25.3831 74.3201L22.0519 72.3924L18.6972 74.3201L19.4948 70.5353L16.6328 67.9494L20.4801 67.5262L22.0519 64Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M57.5226 64L55.9508 67.5262L52.1035 67.9494L54.989 70.5353L54.1679 74.3201L57.5226 72.3924L60.8772 74.3201L60.0796 70.5353L62.9417 67.9494L59.0944 67.5262L57.5226 64Z" fill="#C7A462"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 22H36.1067V33.6913L44.6675 22H51.9156L40.8722 37.1588L53 56H45.8375L36.1067 40.9025V56H30V22Z" fill="#C7A462"/>
                    </svg>
                </a>
                <a href="#" class="mobile-menu-header-call">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M2.23352 0.539582C2.95661 -0.179861 4.12897 -0.179861 4.85205 0.539583L8.48175 4.15099C9.65677 5.32009 9.65677 7.21556 8.48176 8.38465L7.08015 9.77919C7.6606 11.3797 8.59546 12.8816 9.88473 14.1643C11.1633 15.4365 12.6584 16.3618 14.252 16.9403L15.5146 15.6841C16.6896 14.515 18.5947 14.515 19.7697 15.6841L23.5054 19.401C24.1649 20.0571 24.1649 21.1209 23.5054 21.777L23.4229 21.7501C18.7192 25.1228 12.1192 24.7036 7.88693 20.4927L3.52504 16.1528C-0.712228 11.9369 -1.12945 5.35947 2.27339 0.678505L2.23352 0.539582Z" fill="#C7A462"/>
                    </svg>
                </a>
            </div>
            <div class="mobile-menu-list">
                <div class="mobile-menu-item"><a href="/">Гостиница</a></div>
                <div class="mobile-menu-item"><a class="active" href="/banqueting_hall/">Банкетный зал</a></div>
                <div class="mobile-menu-item"><a href="#">Ресторан Molinari</a></div>
                <div class="mobile-menu-item"><a href="#">Меню</a></div>
            </div>
            <div class="mobile-menu-change">
                <!-- <div class="mobile-menu-change-item"><a href="#">RU</a></div>
                <div class="mobile-menu-change-bord"></div>
                <div class="mobile-menu-change-item"><a href="#">EN</a></div> -->
            </div>
        </div>
    </div>
    <main class="main">


    	<?/*


<!DOCTYPE html>
<html>
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

	<?include($_SERVER['DOCUMENT_ROOT']."/include/template/head.php");
</head>

<body> 

	<?$APPLICATION->ShowPanel()

	
	<div class="main-menu-popup">
		<div class="main-menu-shadow"></div>
		<div class="main-menu-container">
			<div class="main-menu-top">
				<a href="#" class="menu-control-link active"><span class="icon icon-buter"></span></a>
				<div class="main-phone"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"),Array(),Array("MODE"=>"html"));</div>
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
				);
			</div>
			<div class="main-menu-bottom">
				<a href="/reservation/" class="btn btn-gray">Забронировать номер</a>
			</div>	
		</div>
	</div>
	
	<div class="wrapper-outside">
		*/?>