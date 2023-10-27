<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Спецпредложения");
?>


    <section class="main-block detail-page specials-correct">

        <? $APPLICATION->IncludeComponent("bitrix:news.list", "specials-list", array(
            "COMPONENT_TEMPLATE" => "rooms-list-page",
            "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
            "IBLOCK_ID" => "21",    // Код информационного блока
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
                12 => "MORE_PHOTO",
                13 => "",
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

        <div class="header-line service-style">

            <div class="header-line-left">
                <div class="main-menu">
                    <a href="#"><span class="icon icon-buter"></span></a>
                </div>
                <div class="main-phone">
                    <span class="lg-view"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"), array(), array("MODE" => "html")); ?></span>
                    <a class="md-view" href="/en/rooms/">Номера</a>
                </div>
            </div>
            <div class="header-line-center">
                <div class="logo"><a href="/en/"><img src="/design/img/logo-en.svg" alt="" title=""/></a></div>
            </div>
            <div class="header-line-right">
                <div class="header-line-socials lg-view">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"), array(), array("MODE" => "html")); ?>
                </div>
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
            </div>
        </div>

    </section>

    <section class="specials-list-on-page">
        <div class="wrapper-inside">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "action-list-page",
                array(
                    "COMPONENT_TEMPLATE" => "action-list-page",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "21",
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
    </section>

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>