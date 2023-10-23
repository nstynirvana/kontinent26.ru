<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Номера");
?>


<div class="wrapper-content">
	
	<section class="content-header header-white">
		<div class="header-line">
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
				<div class="logo"><a href="/"><img src="/design/img/logo-black.svg" alt="" title="" /></a></div>
			</div>
			<div class="header-line-right">
				<div class="header-line-socials lg-view">
					<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"),Array(),Array("MODE"=>"html"));?>
				</div>	
				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"),Array(),Array("MODE"=>"html"));?>
			</div>
		</div>
	</section>

	<section class="rooms-main-block">
		<div class="rooms-main-block-left">
			<div class="rooms-main-block-left-container">
				<table>
					<tr>
						<td>
							<?include($_SERVER['DOCUMENT_ROOT']."/include/template/breadcrumbs.php");?>
							<div class="contentPage-title">
								<h1>Номера и цены</h1>
							</div>
							<div class="contentPage-zagolovok">
								<p>203 номер от стандарта до люкса</p>
							</div>
							<div class="contentPage-text">
								<p>Новые номера в бизнес отеле «Континент» приятно поражают индивидуальными интерьерами, гармоничными цветами, настроением уюта, домашним теплом</p>
							</div>
							<div class="contentPage-btn">
								<a href="/reservation/" class="btn btn-gray">Забронировать</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="rooms-main-block-right">
			<div class="rooms-main-pic">
				<img src="/design/img/Rectangle_72_new.png" alt="" title="" />
			</div>
		</div>
	</section>

	<?$APPLICATION->IncludeComponent("bitrix:news.list", "rooms-list-page", Array(
		"COMPONENT_TEMPLATE" => "rooms-list-header",
			"IBLOCK_TYPE" => "rooms",	// Тип информационного блока (используется только для проверки)
			"IBLOCK_ID" => "1",	// Код информационного блока
			"NEWS_COUNT" => "20",	// Количество новостей на странице
			"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
			"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
			"SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"FILTER_NAME" => "arrFilterSlider",	// Фильтр
			"FIELD_CODE" => array(	// Поля
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(	// Свойства
				0 => "TRAVELLINE_ID",
				1 => "SLIDER_SHOW",
				2 => "FOR_WHO",
				3 => "COUNTS",
				4 => "SHORT_NAME",
				5 => "SLIDER_NAME",
				6 => "KING",
				7 => "PLUSES_LIST",
				8 => "DISCOUNT",
				9 => "DISCOUNT_SIZE",
				10 => "SLIDER_PRICE",
				11 => "MORE_PHOTO",
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

<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>