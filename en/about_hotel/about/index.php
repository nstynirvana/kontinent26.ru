<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("About the hotel");
?>

<? header("Location: /en/about_hotel/"); ?>

    <section class="main-block detail-page service-page">

        <div class="konference-detail-nomer-slider">
            <img src="/design/img/about-page-bg.png" alt="" title=""/>
        </div>
        <div class="detail-nomer-content konference">

            <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>

            <div class="rooms-list-item-title">About hotel</div>

            <div class="rooms-list-text">
                <p>Located in the city center, the Continent Business Hotel is an ideal “second home” for guests,
                    whether they are tourists, government officials or businessmen</p>
            </div>

        </div>

        <div class="header-line service-style">

            <div class="header-line-left">
                <div class="main-menu">
                    <a href="#"><span class="icon icon-buter"></span></a>
                </div>
                <div class="main-phone">
                    <span class="lg-view"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"), array(), array("MODE" => "html")); ?></span>
                    <a class="md-view" href="/en/rooms/">Rooms</a>
                </div>
            </div>
            <div class="header-line-center">
                <div class="logo"><? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/footer-logo-en.php"); ?></div>
            </div>
            <div class="header-line-right">
                <div class="header-line-socials lg-view">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social-white.php"), array(), array("MODE" => "html")); ?>
                </div>
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
            </div>
        </div>

    </section>

    <section class="page-podmenu">
        <div class="wrapper-inside">
            <div class="page-podmenu-line">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "podmenu-template", array(),
                    false
                ); ?>
            </div>
        </div>
    </section>

    <section class="about-rooms-block">
        <div class="wrapper-inside">
            <div class="about-rooms-block-container">
                <div class="about-rooms-block-left">
                    <div class="main-restorant-title">Our rooms</div>
                    <div class="text">
                        <p>New rooms in the Continent Business Hotel surprise with unique interiors, harmonious colors,
                            cozy atmosphere, and domestic warmth. The highlight of each new room is the sweeping view
                            from the windows on the upper floors of the hotel. During long winter evenings it's the
                            magical sparkling of the city lights, in clear weather it's the vastness of the city.</p>
                        <p>Guests will be pleased with comfortable Standard class rooms. Business class rooms will win
                            you over with comfort. Prestigious deluxe rooms will make your vacation and work a
                            pleasure.</p>
                    </div>
                    <div class="text-prezentation">
                        <span class="text-inside">Continent Business Hotel is a high-level facility, which is confirmed by a wide range of services.</span>
                    </div>
                </div>
                <div class="about-rooms-block-right">
                    <? $APPLICATION->IncludeComponent("bitrix:news.list", "rooms-list-about-page", array(
                        "COMPONENT_TEMPLATE" => "rooms-list-header",
                        "IBLOCK_TYPE" => "rooms",    // Тип информационного блока (используется только для проверки)
                        "IBLOCK_ID" => "1",    // Код информационного блока
                        "NEWS_COUNT" => "20",    // Количество новостей на странице
                        "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                        "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                        "SORT_BY2" => "NAME",    // Поле для второй сортировки новостей
                        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                        "FILTER_NAME" => "",    // Фильтр
                        "FIELD_CODE" => array(    // Поля
                            0 => "",
                            1 => "",
                        ),
                        "PROPERTY_CODE" => array(    // Свойства
                            0 => "COUNTS",
                            1 => "SHORT_NAME",
                            2 => "KING",
                            3 => "DISCOUNT",
                            4 => "DISCOUNT_SIZE",
                            5 => "",
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
                    <div class="main-restorant-title">Video-review</div>
                    <div class="text">
                        <p class="big-text">Watch a short clip about our hotel</p>
                        <p>In 6 minutes you will learn about the main advantages and features, see the interiors of the
                            rooms and the picturesque view of the Stavropol surroundings.</p>
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
                <div class="main-restorant-title">Possibilities</div>
                <div class="main-restorant-text">
                    Continent Business Hotel is a high-level facility, which is confirmed by a wide range of services.
                </div>
                <div class="main-restorant-text-small">
                    <p>There are 3 comfortable conference halls and a business hall with a comfortable environment for
                        working meetings and coffee breaks. WiFi ensures Internet access. Everything necessary for any
                        important events — meetings, seminars, workshops, master classes, trainings or presentations —
                        is here.</p>
                    <p>Guests and visitors of the Continent Business Hotel are surrounded by care. They can use bank and
                        postal services, book plane and train tickets, use the transfer service and choose fun gifts for
                        your family and friends in the business hotel's gift shop.</p>
                    <p>Our guests can enjoy shopping in stores offering brand items such as clothing, cosmetics, and appliances.</p>
                </div>
            </div>
            <div class="main-restorant-text second">
                <div class="main-restorant-text-small">
                    <div class="about-service-list">
                        <? $APPLICATION->IncludeComponent("bitrix:news.list", "service-page-list-about", array(
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
                            "PARENT_SECTION" => "2",    // ID раздела
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
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-dosug">
        <div class="wrapper-inside">
            <div class="main-restorant-text second">
                <div class="main-restorant-title">Entertainment</div>
                <div class="main-restorant-text-small">
                    <p>In the Samovar or Molinari Café of the Continent Business Hotel, guests can enjoy a tasty snack and have their favorite drinks. The chef will prepare Russian, European and Japanese dishes for you.</p>
                    <p>Sing some heart-warming songs at Sinatra's Karaoke Club. Excellent sound plus a huge list of popular familiar songs in the catalogs. Attentive personnel means a good holiday.</p>
                    <p>Got tired after a long day? No problem, a skilled masseur can help you out. Your body will find joy in the massage room, as it will feel healthy and energized.</p>
                    <p>You can choose a birch bath room in a Russian sauna or relax in a Roman one. Need a stunning hairstyle, makeup, impressive manicur? Contact our hotel's beauty salon.</p>
                </div>
            </div>
            <div class="main-restorant-info">
                <? $APPLICATION->IncludeComponent("bitrix:news.list", "service-page-list-about", array(
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
                    "PARENT_SECTION" => "3",    // ID раздела
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

        </div>
    </section>

    <section class="about-page-docs">
        <div class="wrapper-inside">
            <div class="about-page-docs-container">
                <div class="about-page-docs-left">
                    <div class="hotel-pluses-item form-item">
                        <div class="header-line-form-container">
                            <div class="header-line-form-title">Documents</div>
                            <div class="docs-list">
                                <div class="docs-item">
                                    <a href="/design/img/inn.jpg" class="fancybox"><span>Certificate of registration with the tax authority</span></a>
                                </div>
                                <div class="docs-item">
                                    <a href="/design/img/ogrnip.jpg"
                                       class="fancybox"><span>Registration certificate</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-page-docs-right">
                    <div class="hotel-pluses-item form-item">
                        <div class="header-line-form-container">
                            <div class="header-line-form-title">Rooms booking</div>
                            <div class="header-line-form-body">
                                <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/page-form-container-en.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>