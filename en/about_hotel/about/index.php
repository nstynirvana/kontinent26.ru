<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об отеле");
?>

<?header("Location: /about_hotel/");?>

<section class="main-block detail-page service-page">
	
	<div class="konference-detail-nomer-slider">
		<img src="/design/img/about-page-bg.png" alt="" title="" />
	</div>
	<div class="detail-nomer-content konference">
		
		<?include($_SERVER['DOCUMENT_ROOT']."/include/template/breadcrumbs.php");?>
		
		<div class="rooms-list-item-title"><?$APPLICATION->ShowTitle(false)?></div>
		
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
				<a class="md-view" href="/en/rooms/">Номера</a>
			</div>
		</div>
		<div class="header-line-center">
			<div class="logo"><?include($_SERVER['DOCUMENT_ROOT']."/include/template/footer-logo-en.php");?></div>
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

<section class="about-rooms-block">
	<div class="wrapper-inside">
		<div class="about-rooms-block-container">
			<div class="about-rooms-block-left">
				<div class="main-restorant-title">Наши номера</div>
				<div class="text">
					<p>Новые номера в бизнес отеле «Континент» приятно поражают индивидуальными интерьерами, гармоничными цветами, настроением уюта, домашним теплом. Изюминка каждого нового номера – в панораме, открывающейся из окон верхних этажей отеля. Зимними долгими вечерами – это волшебное сияние огней города, в ясную погоду – необъятный простор.</p>
					<p>Гостей порадуют удобные номера класса Стандарт. Номера Бизнес класса покорят комфортом. Респектабельные номера класса Люкс превратят ваш отдых и работу в удовольствие.</p>
				</div>	
				<div class="text-prezentation">
					<span class="text-inside">Бизнес отель «Континент» – это предприятие высокого уровня, что подтверждено широким спектром услуг</span>
				</div>	
			</div>
			<div class="about-rooms-block-right">
				<?$APPLICATION->IncludeComponent("bitrix:news.list", "rooms-list-about-page", Array(
					"COMPONENT_TEMPLATE" => "rooms-list-header",
						"IBLOCK_TYPE" => "rooms",	// Тип информационного блока (используется только для проверки)
						"IBLOCK_ID" => "1",	// Код информационного блока
						"NEWS_COUNT" => "20",	// Количество новостей на странице
						"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
						"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
						"SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
						"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
						"FILTER_NAME" => "",	// Фильтр
						"FIELD_CODE" => array(	// Поля
							0 => "",
							1 => "",
						),
						"PROPERTY_CODE" => array(	// Свойства
							0 => "COUNTS",
							1 => "SHORT_NAME",
							2 => "KING",
							3 => "DISCOUNT",
							4 => "DISCOUNT_SIZE",
							5 => "",
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
		</div>
	</div>
</section>


<section class="about-page-video">
	<div class="wrapper-inside">
		<div class="about-page-video-container">
			<div class="about-page-video-right">
				<div class="video-view-block">
					<a href="https://www.youtube.com/embed/eczs1Y53anY" class="fancybox">
						<img src="/design/img/video-view-bg.png">
						<span class="icon icon-play"></span>
					</a>
				</div>
			</div>
			<div class="about-page-video-left">
				<div class="main-restorant-title">Видео-обзор</div>
				<div class="text">
					<p class="big-text">Посмотрите небольшой видео-ролик о нашем отеле</p>
					<p>За 6 минут вы узнаете об основных преимуществах и особенностях, увидите интерьеры номеров и живописный вид, открывающийся из окон на окресности Ставрополя.</p>
				</div>	
			</div>
			
		</div>
	</div>
</section>

<section class="main-restorant-picture-container konference">
	<img src="/design/img/about-page-service-bg.png" alt="" title="">
</section>

<section class="main-restorant-content about-service">
	<div class="wrapper-inside">
		<div class="main-restorant-info">
			<div class="main-restorant-title">Возможности</div>
			<div class="main-restorant-text">
				Бизнес отель «Континент» – это предприятие высокого уровня, что подтверждено широким спектром услуг
			</div>
			<div class="main-restorant-text-small">
				<p>На территории бизнес-отеля оборудованы и оснащены современной техникой 3 комфортабельных конференц-зала и бизнес-холл с удобной для рабочих встреч и кофе-брейков обстановкой. Беспроводной WiFi обеспечивает доступ в Интернет. Здесь предусмотрено все необходимое для любых важных событий – собраний, семинаров, мастерклассов, тренингов или презентаций.</p>
				<p>Гости и посетители бизнес отеля «Континент» окружены вниманием. Они могут воспользоваться банковскими и почтовыми услугами, забронировать авиа- и железнодорожные билеты, воспользоваться услугой трансфер и выбрать интересные подарки для семьи и друзей в сувенирной лавке бизнес-отеля.</p>
				<p>Для наших гостей распахнуты двери магазинов, предлагающих брендовые товары – одежду, косметику, технику.</p>
			</div>
		</div>
		<div class="main-restorant-text second">
			<div class="main-restorant-text-small">
				<div class="about-service-list">
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "service-page-list-about", Array(
						"COMPONENT_TEMPLATE" => "rooms-list-slider",
							"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
							"IBLOCK_ID" => "3",	// Код информационного блока
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
								0 => "",
								1 => "TRAVELLINE_ID",
								2 => "SLIDER_SHOW",
								3 => "FOR_WHO",
								4 => "COUNTS",
								5 => "SHORT_NAME",
								6 => "SLIDER_NAME",
								7 => "KING",
								8 => "PLUSES_LIST",
								9 => "DISCOUNT",
								10 => "DISCOUNT_SIZE",
								11 => "SLIDER_PRICE",
								12 => "",
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
							"PARENT_SECTION" => "2",	// ID раздела
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
			</div>
		</div>
	</div>
</section>

<section class="about-page-dosug">
	<div class="wrapper-inside">
		<div class="main-restorant-text second">
			<div class="main-restorant-title">Досуг и развлечения</div>
			<div class="main-restorant-text-small">
				<p>В кафе «Самовар» или «Молинари» бизнес-отеля «Континент» гости могут вкусно перекусить и выпить любимые напитки. Шеф-повар приготовит для Вас блюда русской, европейской, а также японской кухни.</p>
				<p>В караоке-клубе «Синатра» спойте тёплые для сердца песни. Превосходный звук плюс огромный перечень знакомых песен в каталогах. Персонал внимателен - это залог хорошего отдыха.</p>
				<p>За день накопилась усталость – не беда, ведь опытный массажист справится с ней. Тело испытает радость в массажном кабинете, ведь оно почувствует здоровье и прилив сил.</p>
				<p>С берёзовым веничком да в русской бане, а может расслабиться в римской сауне – выбор за Вами. Нужна потрясающая причёска, макияж, впечатляющий маникюр, тогда обратитесь в салон красоты нашего отеля.</p>
			</div>
		</div>
		<div class="main-restorant-info">
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "service-page-list-about", Array(
				"COMPONENT_TEMPLATE" => "rooms-list-slider",
					"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
					"IBLOCK_ID" => "3",	// Код информационного блока
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
						0 => "",
						1 => "TRAVELLINE_ID",
						2 => "SLIDER_SHOW",
						3 => "FOR_WHO",
						4 => "COUNTS",
						5 => "SHORT_NAME",
						6 => "SLIDER_NAME",
						7 => "KING",
						8 => "PLUSES_LIST",
						9 => "DISCOUNT",
						10 => "DISCOUNT_SIZE",
						11 => "SLIDER_PRICE",
						12 => "",
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
					"PARENT_SECTION" => "3",	// ID раздела
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
		
	</div>
</section>

<section class="about-page-docs">
	<div class="wrapper-inside">
		<div class="about-page-docs-container">
			<div class="about-page-docs-left">
				<div class="hotel-pluses-item form-item">
					<div class="header-line-form-container">
						<div class="header-line-form-title">Документы</div>
						<div class="docs-list">
							<div class="docs-item">
								<a href="/design/img/inn.jpg" class="fancybox"><span>Свидетельство о постановке на учет в налоговом органе</span></a>
							</div>
							<div class="docs-item">
								<a href="/design/img/ogrnip.jpg" class="fancybox"><span>Свидетельство о регистрации</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="about-page-docs-right">
				<div class="hotel-pluses-item form-item">
					<div class="header-line-form-container">
						<div class="header-line-form-title">Бронирование номеров</div>
						<div class="header-line-form-body">
							<?include($_SERVER['DOCUMENT_ROOT']."/include/template/page-form-container.php");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>