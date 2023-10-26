<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Местоположение");
?>

<section class="main-block detail-page service-page">
	
	<div class="konference-detail-nomer-slider">
		<img src="/design/img/about-locations-page.png" alt="" title="" />
	</div>
	<div class="detail-nomer-content konference">
		
		<?include($_SERVER['DOCUMENT_ROOT']."/include/template/breadcrumbs.php");?>
		
		<div class="rooms-list-item-title">Расположение</div>
		
		<div class="rooms-list-text">
			<p>Расположенный в центре города бизнес отель «Континент» – идеальный «второй дом» для гостей, будь они туристами, представителями властных структур или бизнесменами</p>
		</div>
		
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
				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social-white.php"),Array(),Array("MODE"=>"html"));?>
			</div>	
			<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"),Array(),Array("MODE"=>"html"));?>
		</div>
	</div>
	
</section>

<section class="page-podmenu">
	<div class="wrapper-inside">
		<div class="page-podmenu-line">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "podmenu-template", Array(
	
				),
				false
			);?>
		</div>
	</div>
</section>

<section class="about-location-content">
	<div class="wrapper-inside">
		<div class="main-hotel-transport">
			<div class="main-hotel-transport-title">Транспортная доступность</div>
			<div class="main-hotel-transport-item-container">
				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/transport-table.php"),Array(),Array("MODE"=>"php"));?>
			</div>
		</div>
	</div>
</section>

<section class="main-map">
	<div class="wrapper-inside">
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "maps-container", Array(
			"COMPONENT_TEMPLATE" => ".default",
				"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_ID" => "6",	// Код информационного блока
				"NEWS_COUNT" => "20",	// Количество новостей на странице
				"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
				"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
				"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
				"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				"FILTER_NAME" => "",	// Фильтр
				"FIELD_CODE" => array(	// Поля
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(	// Свойства
					0 => "MAP",
					1 => "COORDS",
					2 => "METRS",
					3 => "",
				),
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"PARENT_SECTION" => "",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
				"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				"DISPLAY_DATE" => "Y",	// Выводить дату элемента
				"DISPLAY_NAME" => "Y",	// Выводить название элемента
				"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SHOW_404" => "N",	// Показ специальной страницы
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			),
			false
		);?>
	</div>
</section>

<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>