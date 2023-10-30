<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "От 1500 руб./чел. Центр Ставрополя. Wi-Fi. Парковка. Шведский стол. 203 комфортабельных номера. Один из лучших видов на город. Завтрак включен.");
$APPLICATION->SetPageProperty("title", "Бизнес отель «Континент» - гостиница в центре Ставрополя");
$APPLICATION->SetTitle("Бизнес отель «Континент» ");
?>

<? //global $USER;?>
<? //if(!$USER->IsAdmin()):?>

    <section class="main-block new-style">

        <div class="main-block_slider" >
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banner-slider-main",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
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
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "34",
                    "IBLOCK_TYPE" => "slider",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
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
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "banner-slider-main"
                ),
                false
            ); ?>
        </div>



        <div class="header-line-menu">
            <div class="header-line-menu-sect1">
                <div class="wrapper-inside">
                    <div class="header-nomera-menu xs-view">
                        <div class="header-nomera-mobile-menu">
                            <a href="#">
                                <span class="icon icon-buter"></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-line-logo">
                        <a href="/">
                            <img src="/design/img/logo.svg" alt="" title=""/>
                        </a>
                    </div>

                    <div class="header-button-lang">
                        <a href="/en<?=$_SERVER['REQUEST_URI']?>">
                            <img src="/design/img/switch-en.svg" alt="" title=""/>
                        </a>
                    </div>

                    <div class="header-line-service lg-view">
                        <div class="icon-service-ite">
                            <a href="https://www.tripadvisor.ru/Hotel_Review-g675739-d2468067-Reviews-Kontinent-Stavropol_Stavropol_Krai_North_Caucasian_District.html"
                               target="_blank" class="tripadvisor">
                                <span class="icon icon-trip"></span>
                                <span class="icon icon-trip-text"></span>
                                <span class="icon text">4.0</span>
                            </a>
                        </div>
                        <div class="icon-service-ite">
                            <a href="https://www.booking.com/hotel/ru/continent.ru.html" class="booking"
                               target="_blank">
                                <span class="icon icon-booking"></span>
                                <span class="icon icon-booking-text"></span>
                                <span class="icon text">8.5</span>
                            </a>
                        </div>
                    </div>
                    <div class="header-line-socials">
                        <div class="header-line-social-item">
                            <a href="mailto:kontinent26@bk.ru">
                                <span class="icon icon-social-mail-white"></span>
                            </a>
                        </div>
                        <div class="header-line-social-item">
                            <a href="skype:kontinent26?chat">
                                <span class="icon icon-social-skype-white"></span>
                            </a>
                        </div>
                        <div class="header-line-social-item">
                            <a href="https://www.instagram.com/kontinent.hotel/" target="_blank">
                                <span class="icon icon-social-inst-white"></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-line-contacts lg-view md-view">
                        <div class="header-line-contacts-phone">
                            <a href="tel:+78652947575">+7 (8652) <b>94 75 75</b></a>
                        </div>
                        <div class="header-line-contacts-adress">
                            г. Ставрополь, ул. Дзержинского, 114
                            <br/><span>Центр города</span>
                        </div>
                    </div>
                    <div class="header-nomera-menu md-view">
                        <div class="header-nomera-link">
                            <a href="#">Номера и цены</a>
                        </div>
                        <div class="header-nomera-mobile-menu">
                            <a href="#">
                                <span class="icon icon-buter"></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-phones-line-mobile xs-view">
                        <a href="tel:+78652947575"></a>
                    </div>
                </div>
            </div>
            <div class="header-line-menu-sect2">
                <div class="wrapper-inside">
                    <div class="main-menu">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "main-menu",
                            array(
                                "COMPONENT_TEMPLATE" => "main-menu",
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(),
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "left",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N"
                            ),
                            false
                        ); ?>
                    </div>
                    <div class="header-line-lang">
                        <div class="select-lang">
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-page-header-block">
            <div class="wrapper-inside">

                <div class="main-page-header-block-container">

                    <div class="mobile-style-banner-content xs-view">
                        <div class="header-line-service">
                            <div class="icon-service-ite">
                                <a href="https://www.tripadvisor.ru/Hotel_Review-g675739-d2468067-Reviews-Kontinent-Stavropol_Stavropol_Krai_North_Caucasian_District.html"
                                   target="_blank" class="tripadvisor">
                                    <span class="icon icon-trip"></span>
                                    <span class="icon icon-trip-text"></span>
                                    <span class="icon text">4.0</span>
                                </a>
                            </div>
                            <br/>
                            <div class="icon-service-ite">
                                <a href="https://www.booking.com/hotel/ru/continent.ru.html" class="booking"
                                   target="_blank">
                                    <span class="icon icon-booking"></span>
                                    <span class="icon icon-booking-text"></span>
                                    <span class="icon text">8.5</span>
                                </a>
                            </div>
                        </div>
                        <div class="mobile-address">
                            <span class="upper">Центр города</span><br/>
                            <span class="adress">г. Ставрополь, ул. Дзержинского, 114</span>
                        </div>
                    </div>

                    <div class="header-line-form xs-view">
                        <div class="header-line-form-container">
                            <div class="header-line-form-title">Бронирование номеров</div>
                            <div class="header-line-form-text"><? /*При бронировании на сайте действует постоянная скидка 10%*/ ?> </div>
                            <div class="header-line-form-body">
                                <form action="" method="" class="reservation-form">
                                    <div class="bronirovanie-items-fields">
                                        <div class="bronirovanie-item">
                                            <span class="icon icon-data"></span>
                                            <input type="text" class="from" name="" placeholder="Заезд"/>
                                        </div>
                                        <div class="bronirovanie-item">
                                            <span class="icon icon-data"></span>
                                            <input type="text" class="to" name="" placeholder="Отъезд"/>
                                        </div>
                                    </div>
                                    <div class="bronirovanie-item bronirovanie-item-btn">
                                        <button type="submit" class="btn btn-gray">Забронировать</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="information-header-slider">

                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "main-slider-actions", array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                            "IBLOCK_ID" => "8",    // Код информационного блока
                            "NEWS_COUNT" => "5",    // Количество новостей на странице
                            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                            "SORT_BY2" => "NAME",    // Поле для второй сортировки новостей
                            "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                            "FILTER_NAME" => "",    // Фильтр
                            "FIELD_CODE" => array(    // Поля
                                0 => "",
                                1 => "",
                            ),
                            "PROPERTY_CODE" => array(    // Свойства
                                0 => "",
                                1 => "DOP_TEXT",
                                2 => "SHOW_PERCENT",
                                3 => "",
                            ),
                            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "AJAX_MODE" => "N",    // Включить режим AJAX
                            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                            "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                            "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                            "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                            "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                            "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                            "PARENT_SECTION" => "",    // ID раздела
                            "PARENT_SECTION_CODE" => "",    // Код раздела
                            "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                            "DISPLAY_NAME" => "Y",    // Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                            "PAGER_TITLE" => "Новости",    // Название категорий
                            "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                            "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                            "SHOW_404" => "N",    // Показ специальной страницы
                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                        ),
                            false
                        ); ?>


                        <div class="header-line-service md-view">
                            <div class="icon-service-ite">
                                <a href="https://www.tripadvisor.ru/Hotel_Review-g675739-d2468067-Reviews-Kontinent-Stavropol_Stavropol_Krai_North_Caucasian_District.html"
                                   target="_blank" class="tripadvisor">
                                    <span class="icon icon-trip"></span>
                                    <span class="icon icon-trip-text"></span>
                                    <span class="icon text">4.0</span>
                                </a>
                            </div>
                            <div class="icon-service-ite">
                                <a href="https://www.booking.com/hotel/ru/continent.ru.html" class="booking"
                                   target="_blank">
                                    <span class="icon icon-booking"></span>
                                    <span class="icon icon-booking-text"></span>
                                    <span class="icon text">8.5</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="header-line-form lg-view md-view">
                        <div class="header-line-form-container">
                            <div class="header-line-form-title">Бронирование номеров</div>
                            <div class="header-line-form-text"><? /*При бронировании на сайте действует постоянная скидка 10%*/ ?> </div>
                            <div class="header-line-form-body">
                                <form action="" method="" class="reservation-form">
                                    <div class="bronirovanie-items-fields">
                                        <div class="bronirovanie-item">
                                            <span class="icon icon-data"></span>
                                            <input type="text" class="from" name="" placeholder="Заезд"/>
                                        </div>
                                        <div class="bronirovanie-item">
                                            <span class="icon icon-data"></span>
                                            <input type="text" class="to" name="" placeholder="Отъезд"/>
                                        </div>
                                    </div>
                                    <div class="bronirovanie-item bronirovanie-item-btn">
                                        <button type="submit" class="btn btn-gray">Забронировать</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

<? /*else:?>

	<section class="main-block">

		<div class="play-video">
			<a href="https://youtu.be/wjxxmsGgkdk" class="fancybox"><span class="icon icon-play"></span></a>
		</div>
		
		<div class="header-line">
			<div class="header-line-form">
				<div class="header-line-form-container">
					<div class="header-line-form-title">Бронирование номеров</div>
					<div class="header-line-form-text">Максимальная скидка только при бронировании на официальном сайте!</div>
					<div class="header-line-form-body">
						<form action="" method="" class="reservation-form">
							<div class="bronirovanie-items-fields">
								<div class="bronirovanie-item">
									<span class="icon icon-data"></span>
									<input type="text" class="from" name="" placeholder="Заезд" />
								</div>
								<div class="bronirovanie-item">
									<span class="icon icon-data"></span>
									<input type="text" class="to" name="" placeholder="Отъезд" />
								</div>
							</div>
							<div class="bronirovanie-item bronirovanie-item-btn">
								<button type="submit" class="btn btn-gray">Забронировать</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="icon-services">
				<div class="icon-service-ite">
					<a href="https://www.tripadvisor.ru/Hotel_Review-g675739-d2468067-Reviews-Kontinent-Stavropol_Stavropol_Krai_North_Caucasian_District.html" target="_blank"><img src="/design/img/icon-trip.svg" alt="" title="" /></a>
				</div>
				<div class="icon-service-ite">
					<a href="https://www.booking.com/hotel/ru/continent.ru.html" target="_blank"><img src="/design/img/icon-booking.svg" alt="" title="" /></a>
				</div>
			</div>

			<div class="header-line-left">
				<div class="main-menu">
					<a href="#">
						<span class="icon icon-buter"></span></a>
				</div>
				<div class="main-phone">
					<span class="lg-view"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"),Array(),Array("MODE"=>"html")); ?></span>
					<a class="md-view" href="/rooms/">Номера</a>
				</div>
			</div>
			<div class="header-line-center">
				<div class="logo">
					<a href="/"><img src="/design/img/logo.svg" alt="" title="" /></a></div>
			</div>
			<div class="header-line-right">
				<div class="nomera-container">
					<div class="nomera-container-top nomera-top lg-view xs-view">
						<a href="/rooms/" class="">Номера</a>
					</div>
					<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"rooms-list-header",
					array(
					"COMPONENT_TEMPLATE" => "rooms-list-header",
					"IBLOCK_TYPE" => "rooms",
					"IBLOCK_ID" => "1",
					"NEWS_COUNT" => "20",
					"SORT_BY1" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_BY2" => "NAME",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "",
					"FIELD_CODE" => array(
					0 => "",
					1 => "",
					),
					"PROPERTY_CODE" => array(
					0 => "COUNTS",
					1 => "SHORT_NAME",
					2 => "KING",
					3 => "DISCOUNT",
					4 => "DISCOUNT_SIZE",
					5 => "",
					),
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"SET_TITLE" => "N",
					"SET_BROWSER_TITLE" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_LAST_MODIFIED" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => ""
					),
					false
					); ?>
					<div class="nomera-container-top md-view">
						<a href="#" class="">Номера</a>
					</div>
				</div>
			</div>
		</div>

		<div class="dop-about">
			<a href="/about_hotel/about/" class="scrollToAbout">Подробнее об отеле</a>
		</div>

	</section>

<?endif; */ ?>


    <section class="main-action">
        <div class="wrapper">
            <div class="main-action-header">
                <h2>Акции</h2>
                <a href="/specials/">Все акции</a>
            </div>
            <div class="main-action-container">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "action-list-main-page",
                    array(
                        "COMPONENT_TEMPLATE" => "action-list-main-page",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "2",
                        "NEWS_COUNT" => "20",
                        "SORT_BY1" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "NAME",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "DOP_TEXT",
                            1 => "SHOW_PERCENT",
                            2 => "",
                            3 => "",
                            4 => "",
                            5 => "",
                            6 => "",
                            7 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "STRICT_SECTION_CHECK" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    ),
                    false
                ); ?>
            </div>
        </div>
    </section>

<? $arrFilterSlider = array("PROPERTY_SLIDER_SHOW_VALUE" => "Y"); ?>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "rooms-list-slider", array(
    "COMPONENT_TEMPLATE" => "rooms-list-header",
    "IBLOCK_TYPE" => "rooms",    // Тип информационного блока (используется только для проверки)
    "IBLOCK_ID" => "1",    // Код информационного блока
    "NEWS_COUNT" => "20",    // Количество новостей на странице
    "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
    "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
    "SORT_BY2" => "NAME",    // Поле для второй сортировки новостей
    "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
    "FILTER_NAME" => "arrFilterSlider",    // Фильтр
    "FIELD_CODE" => array(    // Поля
        0 => "",
        1 => "",
    ),
    "PROPERTY_CODE" => array(    // Свойства
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
        11 => "",
    ),
    "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "AJAX_MODE" => "N",    // Включить режим AJAX
    "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
    "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
    "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
    "CACHE_TYPE" => "A",    // Тип кеширования
    "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
    "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",    // Учитывать права доступа
    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
    "SET_TITLE" => "N",    // Устанавливать заголовок страницы
    "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
    "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
    "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
    "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
    "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
    "PARENT_SECTION" => "",    // ID раздела
    "PARENT_SECTION_CODE" => "",    // Код раздела
    "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
    "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
    "DISPLAY_DATE" => "Y",    // Выводить дату элемента
    "DISPLAY_NAME" => "Y",    // Выводить название элемента
    "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
    "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
    "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
    "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
    "PAGER_TITLE" => "Новости",    // Название категорий
    "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
    "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
    "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
    "SET_STATUS_404" => "N",    // Устанавливать статус 404
    "SHOW_404" => "N",    // Показ специальной страницы
    "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
),
    false
); ?>


    <section class="main-service">
        <div class="wrapper-inside">
            <div class="main-action-header">
                <h2>Услуги</h2>
                <a href="/services/">Все услуги</a>
            </div>

            <? $arrFilterSlider = array("PROPERTY_SHOW_MAIN_VALUE" => "Y"); ?>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "service-list-main-page", array(
                "COMPONENT_TEMPLATE" => "rooms-list-slider",
                "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "3",    // Код информационного блока
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                "SORT_BY2" => "NAME",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "arrFilterSlider",    // Фильтр
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(    // Свойства
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
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SHOW_404" => "N",    // Показ специальной страницы
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            ),
                false
            ); ?>

        </div>
    </section>

    <section class="main-hotel-pluses">
        <div class="wrapper-inside">
            <div class="hotel-pluses-list lg-view md-view">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/hotel-pluses.php"), array(), array("MODE" => "php")); ?>
                <div class="hotel-pluses-item form-item">
                    <div class="header-line-form-container">
                        <div class="header-line-form-title">Бронирование номеров</div>
                        <div class="header-line-form-body">
                            <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/page-form-container.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hotel-pluses-list mobile-list xs-view">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/hotel-pluses.php"), array(), array("MODE" => "php")); ?>
            </div>
        </div>
        <div class="hotel-pluses-item form-item xs-view">
            <div class="header-line-form-container">
                <div class="header-line-form-title">Бронирование номеров</div>
                <div class="header-line-form-body">
                    <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/page-form-container.php"); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="main-restorant-picture-container main-page">
        <img src="/design/img/image_18.png" alt="" title=""/>
    </section>

    <section class="main-restorant-content">
        <div class="wrapper-inside">
            <div class="main-restorant-info">
                <div class="main-restorant-title">Ресторан</div>
                <div class="main-restorant-text">
                    Для гостей бизнес отеля «Континет» предусмотренны завтраки по системе Шведский стол. Вкусное,
                    полезное и разнообразное меню ждёт вас каждое утро.
                </div>
                <div class="main-restorant-cases">
                    <div class="case-list">
                        <div class="case-item">Просторный зал</div>
                        <div class="case-item">Вкусные десерты</div>
                        <div class="case-item">Свежие овощи</div>
                        <div class="case-item">Еда на любой вкус</div>
                        <div class="case-item">Крепкий кофе</div>
                    </div>
                </div>
                <div class="main-restorant-links">
                    <div class="main-restorant-links-item">
                        <a href="/3d/konferenc/panorama/tour.html" target="_blank" class="tour-link">3D-тур</a>
                    </div>
                    <? /*
				<div class="main-restorant-links-item">
					<a href="#" class="menu-link"><span>Посмотреть меню</span></a>
				</div>
				*/ ?>
                </div>
            </div>
            <div class="main-restorant-pic">
                <div class="main-restorant-pic-item">
                    <div class="main-restorant-pic-picture">
                        <img src="/design/img/Rectangle_21.png" alt="" title=""/>
                    </div>
                    <div class="main-restorant-pic-name">Шведский стол</div>
                </div>
                <div class="main-restorant-pic-item">
                    <div class="main-restorant-pic-picture">
                        <img src="/design/img/Rectangle_22.jpg" alt="" title=""/>
                    </div>
                    <div class="main-restorant-pic-name">Бизнес-обеды</div>
                </div>
            </div>
        </div>
        <div class="main-restorant-gallery lg-view md-view">
            <div class="wrapper-inside">
                <div class="main-restorant-gallery-item small">
                    <a href="/design/img/svedstol.jpg" class="fancybox"><img src="/design/img/svedstol-min.jpg"></a>
                </div>
                <div class="main-restorant-gallery-item big">
                    <a href="/design/img/svedstol2.jpg" class="fancybox"><img src="/design/img/svedstol2-min.jpg"></a>
                    <div class="main-restorant-gallery-item">
                        <a href="/design/img/svedstol3.jpg" class="fancybox"><img
                                    src="/design/img/svedstol3-min.jpg"></a>
                    </div>
                    <div class="main-restorant-gallery-item">
                        <a href="/design/img/svedstol4.jpg" class="fancybox"><img
                                    src="/design/img/svedstol4-min.jpg"></a>
                    </div>
                </div>
                <div class="main-restorant-gallery-item middle">
                    <a href="/design/img/svedstol5.jpg" class="fancybox"><img src="/design/img/svedstol5-min.jpg"></a>
                    <a href="/design/img/stol6.jpg" class="fancybox"><img src="/design/img/stol6.jpg"></a>
                </div>
            </div>
        </div>
        <div class="main-restorant-gallery mobile-list xs-view">
            <div class="main-restorant-gallery-item">
                <a href="/design/img/image_9.png" class="fancybox"><img src="/design/img/image_9.png"></a>
            </div>
            <div class="main-restorant-gallery-item">
                <a href="/design/img/image_11.png" class="fancybox"><img src="/design/img/image_11.png"></a>
            </div>
            <div class="main-restorant-gallery-item">
                <a href="/design/img/image_22.png" class="fancybox"><img src="/design/img/image_22.png"></a>
            </div>
            <div class="main-restorant-gallery-item">
                <a href="/design/img/image_23.png" class="fancybox"><img src="/design/img/image_23.png"></a>
            </div>
            <div class="main-restorant-gallery-item">
                <a href="/design/img/image_8.png" class="fancybox"><img src="/design/img/image_8.png"></a>
            </div>
            <div class="main-restorant-gallery-item">
                <a href="/design/img/image_19.png" class="fancybox"><img src="/design/img/image_19.png"></a>
            </div>
        </div>
    </section>

    <section class="main-restorant-picture-container main-page">
        <img src="/design/img/image_192.png" alt="" title=""/>
    </section>

    <section class="main-restorant-content">
        <div class="wrapper-inside">
            <div class="main-restorant-info">
                <div class="main-restorant-title">Расположение</div>
                <div class="main-restorant-text">
                    Расположенный в центре города бизнес отель «Континент» – идеальный «второй дом» для гостей, будь они
                    туристами, представителями властных структур или бизнесменами
                </div>
                <div class="main-restorant-text-small">
                    Гости и посетители бизнес отеля «Континент» окружены вниманием. Они могут воспользоваться
                    банковскими и почтовыми услугами, забронировать авиа- и железнодорожные билеты, воспользоваться
                    услугой трансфер и выбрать интересные подарки для семьи и друзей в сувенирной лавке бизнес-отеля.
                </div>
            </div>

            <div class="main-restorant-pic lg-view md-view">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/panorama-link-block.php"), array(), array("MODE" => "php")); ?>
            </div>

            <div class="main-hotel-transport lg-view md-view">
                <div class="main-hotel-transport-title">Транспортная доступность</div>
                <div class="main-hotel-transport-item-container">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/transport-table.php"), array(), array("MODE" => "php")); ?>
                </div>
            </div>

        </div>

        <div class="main-restorant-pic xs-view">
            <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/panorama-link-block.php"), array(), array("MODE" => "php")); ?>
        </div>

        <div class="main-hotel-transport xs-view">
            <div class="main-hotel-transport-title">Транспортная доступность</div>
            <div class="main-hotel-transport-item-container">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/transport-table.php"), array(), array("MODE" => "php")); ?>
            </div>
        </div>

    </section>

    <section class="main-map">
        <div class="wrapper-inside">
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "maps-container", array(
                "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "6",    // Код информационного блока
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "",    // Фильтр
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "MAP",
                    1 => "COORDS",
                    2 => "METRS",
                    3 => "",
                ),
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SHOW_404" => "N",    // Показ специальной страницы
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            ),
                false
            ); ?>
        </div>
    </section>

    <section class="main-clients">
        <div class="wrapper-inside">
            <div class="main-clients-title">Наши клиенты</div>
            <? $APPLICATION->IncludeComponent("bitrix:news.list", "klients-main-page", array(
                "COMPONENT_TEMPLATE" => ".default",
                "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_ID" => "7",    // Код информационного блока
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                "FILTER_NAME" => "",    // Фильтр
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "",
                    1 => "",
                    2 => "",
                    3 => "",
                    4 => "",
                ),
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                "PARENT_SECTION" => "",    // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "PAGER_TITLE" => "Новости",    // Название категорий
                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SHOW_404" => "N",    // Показ специальной страницы
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            ),
                false
            ); ?>
        </div>
    </section>

    <section class="main-form">
        <div class="wrapper-inside">
            <div class="main-clients-title">Бронирование номеров</div>
            <div class="form-container">
                <div class="header-line-form-body">
                    <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/page-form-container.php"); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>