<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Банкетный зал");


?>
    <section class="banner-info">
        <div class="container">
            <div class="banner-info-wrapper">
                <div class="banner-info-title">
                    <h1><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/banket-title.php"), array(), array("MODE" => "html")); ?>
                        <br>
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/banket-title-span.php"), array(), array("MODE" => "html")); ?>
                    </h1>
                </div>
                <div class="banner-info-block">
                    <div class="banner-info-descr">
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/banket-descr.php"), array(), array("MODE" => "html")); ?>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "banner-info-block-banket",
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
                            "COMPONENT_TEMPLATE" => "banner-info-block-banket",
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
                            "IBLOCK_ID" => "31",
                            "IBLOCK_TYPE" => "banqueting",
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
                            "PARENT_SECTION" => "16",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        ),
                        false
                    ); ?>
                </div>
            </div>
            <hr class="solid-line">
        </div>
    </section>
    <section class="price">
        <div class="container price-container">
            <!-- <h2>Минимальная стоимость на 1 персону</h2> -->
            <div class="price-wrapper">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "price-list-banket",
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
                        "COMPONENT_TEMPLATE" => "price-list-banket",
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
                        "IBLOCK_ID" => "30",
                        "IBLOCK_TYPE" => "banqueting",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MEDIA_PROPERTY" => "",
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
                            0 => "DESCRIPTION",
                            1 => "PRICE",
                            2 => "",
                        ),
                        "SEARCH_PAGE" => "/search/",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SLIDER_PROPERTY" => "",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N",
                        "TEMPLATE_THEME" => "blue",
                        "USE_RATING" => "N",
                        "USE_SHARE" => "N"
                    ),
                    false
                ); ?>
                <div class="price-block-img">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/banket-price-block-img.php"), array(), array("MODE" => "html")); ?>
                </div>
            </div>
            <!--  --> <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banket-price-list-slider",
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
                    "IBLOCK_ID" => "29",
                    "IBLOCK_TYPE" => "banqueting",
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
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "banket-price-list-slider"
                ),
                false
            ); ?>
            <hr class="solid-line">
        </div>
    </section>
    <section class="halls">
        <div class="container">
            <h2>Банкетные залы</h2>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "event-list-banket",
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
                    "COMPONENT_TEMPLATE" => "event-list-banket",
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
                    "IBLOCK_ID" => "28",
                    "IBLOCK_TYPE" => "banqueting",
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
                        0 => "QUANTITY",
                        1 => "DESCRIPTION",
                        2 => "SQUARE",
                        3 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                ),
                false
            ); ?>
        </div>
    </section>
    <section class="food">
        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/banket-food-img.php"), array(), array("MODE" => "html")); ?>
        <div class="container">
            <h2>Банкетное меню</h2>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banket-products-menu",
                array(
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
                    "COMPONENT_TEMPLATE" => "banket-products-menu",
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
                    "IBLOCK_ID" => "26",
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
                    "PARENT_SECTION" => "14",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "WEIGHT",
                        1 => "PRICE",
                        2 => "",
                    ),
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
                ),
                false
            ); ?> <a href="https://kontinent26.ru/banqueting_hall/Банкетное меню.pdf" class="food-banket-download">банкетное
                меню (PDF)</a>
            <!--  -->

            <h2>Фуршетное меню</h2>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banket-products-menu",
                array(
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
                    "COMPONENT_TEMPLATE" => "banket-products-menu",
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
                    "IBLOCK_ID" => "26",
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
                    "PARENT_SECTION" => "15",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "WEIGHT",
                        1 => "PRICE",
                        2 => "",
                    ),
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
                ),
                false
            ); ?> <a href="#" class="food-banket-download fursh">фуршетное меню (PDF)</a>
        </div>
    </section>
    <section class="price-list">
        <div class="container">
            <h3>Прейскурант аренды</h3>
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "banket-rental-price-list",
                array(
                    "COMPONENT_TEMPLATE" => "banket-rental-price-list",
                    "IBLOCK_TYPE" => "banqueting",
                    "IBLOCK_ID" => "27",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "TITLE",
                        1 => "PRICE",
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
                    "SET_TITLE" => "Y",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
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
    <section class="events">
        <div class="container container-events">
            <div class="events-wrapper">
                <div class="events-container">
                    <div class="events-link-block">
                        <div class="events-link-block-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                 fill="none">
                                <circle cx="30" cy="30" r="30" fill="white"/>
                                <circle cx="29.9997" cy="29.9999" r="25.8415" stroke="#C7A462"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M26.3388 34.6022C30.2075 38.471 36.48 38.471 40.3487 34.6022C44.2174 30.7335 44.2174 24.4611 40.3487 20.5924C36.48 16.7236 30.2075 16.7236 26.3388 20.5924C22.4701 24.4611 22.4701 30.7335 26.3388 34.6022ZM32.6001 27.4535C33.8193 28.6727 35.7961 28.6727 37.0153 27.4535C38.2345 26.2342 38.2345 24.2575 37.0153 23.0382C35.7961 21.819 33.8193 21.819 32.6001 23.0382C31.3808 24.2575 31.3808 26.2342 32.6001 27.4535Z"
                                      fill="#C7A462"/>
                                <path d="M25.1404 31.4023L28.8717 35.1336L21.1996 42.8057L17.3325 42.9415L17.4683 39.0744L25.1404 31.4023Z"
                                      fill="#C7A462"/>
                            </svg>
                            <div class="events-link-block-content-text">
                                Мероприятия<br>
                                под ключ
                            </div>
                            <a href="tel:+78652947575" class="events-link-block-content-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18"
                                     fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.40343 11.1295C9.01791 12.7355 10.8866 14.2697 11.6203 13.5289C12.6707 12.4685 13.3173 11.546 15.6483 13.4089C17.9793 15.2727 16.1991 16.527 15.1817 17.5546C14.0076 18.74 9.61027 17.6376 5.25156 13.3028C0.893115 8.96706 -0.240495 4.56896 0.934413 3.38295C1.95211 2.3554 3.19044 0.562508 5.06655 2.88485C6.94356 5.20601 6.02789 5.86105 4.97744 6.92173C4.24414 7.66224 5.78869 9.52312 7.40343 11.1295ZM9.74449 3.46751C9.74449 3.46751 9.25746 3.39125 8.91645 3.73325C8.56541 4.08503 8.5501 4.69103 8.92 5.06142C9.1386 5.28048 9.44685 5.32717 9.44685 5.32717C10.0478 5.44011 10.9534 5.63134 11.9171 6.59682C12.8805 7.56225 13.0714 8.46978 13.1841 9.07227C13.1841 9.07227 13.2306 9.38118 13.4492 9.60024C13.8189 9.97067 14.4236 9.95558 14.7746 9.6038C15.1156 9.26211 15.0398 8.77405 15.0398 8.77405C14.8489 7.55434 14.259 6.28025 13.246 5.26513C12.2327 4.25001 10.9613 3.65904 9.74449 3.46751ZM14.3129 4.19588C16.0793 5.96604 16.8324 7.97502 16.5872 9.60293C16.5872 9.60293 16.5017 10.1185 16.8377 10.4552C17.2158 10.8342 17.8152 10.8123 18.1692 10.4579C18.3967 10.2299 18.4462 9.85894 18.4462 9.85894C18.6489 8.45213 18.394 5.62195 15.6418 2.8642C12.8896 0.106396 10.0657 -0.149004 8.66185 0.0537947C8.66185 0.0537947 8.29194 0.103179 8.0642 0.331366C7.71022 0.6861 7.6887 1.2868 8.06685 1.66575C8.40287 2.00249 8.91727 1.91672 8.91727 1.91672C10.5418 1.67105 12.5465 2.42578 14.3129 4.19588Z"
                                          fill="#C7A462"/>
                                </svg>
                                <p>
                                    + 7 (8652) 94 75 75
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="events-text-block">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="22" viewBox="0 0 27 22" fill="none">
                            <path d="M14.9897 15.0085C14.9897 11.5904 16.2931 8.4209 18.9 5.5C21.5069 2.5791 23.7414 0.745764 25.6034 0L27 1.95763C25.1379 2.95198 23.5552 4.38136 22.2517 6.24577C21.0103 8.11017 20.2966 10.0367 20.1103 12.0254C20.6069 11.7147 21.3828 11.5593 22.4379 11.5593C23.5552 11.5593 24.5172 12.0565 25.3241 13.0508C26.131 13.9831 26.5345 15.226 26.5345 16.7797C26.5345 18.3333 25.9448 19.6073 24.7655 20.6017C23.6483 21.5339 22.2517 22 20.5759 22C18.9 22 17.5345 21.4096 16.4793 20.2288C15.4862 19.048 14.9897 17.3079 14.9897 15.0085ZM5.58621 22C3.97241 22 2.63793 21.1299 1.58276 19.3898C0.527586 17.6497 0 15.7232 0 13.6102C0 11.4972 0.434483 9.63277 1.30345 8.01695C2.17241 6.33898 3.25862 4.97175 4.56207 3.91525C7.04483 1.92655 9.06207 0.621468 10.6138 0L12.0103 1.95763C10.1483 2.95198 8.56552 4.38136 7.26207 6.24577C6.02069 8.11017 5.3069 10.0367 5.12069 12.0254C5.61724 11.7147 6.3931 11.5593 7.44828 11.5593C8.56552 11.5593 9.52759 12.0565 10.3345 13.0508C11.1414 13.9831 11.5448 15.226 11.5448 16.7797C11.5448 18.3333 10.9552 19.6073 9.77586 20.6017C8.65862 21.5339 7.26207 22 5.58621 22Z"
                                  fill="#C7A462"/>
                        </svg>
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/banket-events-text.php"), array(), array("MODE" => "html")); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="container container-contacts">
            <div class="contacts-wrapper">
                <div class="contacts-info">
                    <h3>Контакты</h3>
                    <div class="contacts-info-item">
                        <div class="contacts-info-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.9969 2C7.59096 2 4 5.27438 4 9.29752C4 12.0326 7.71469 16.6332 10.2405 19.7613C10.9604 20.6529 11.5837 21.4249 11.9969 22C12.411 21.4238 13.0363 20.6498 13.7586 19.7559C16.2859 16.6278 20 12.031 20 9.29752C20 5.27438 16.409 2 11.9969 2ZM14 10C14 11.1046 13.1046 12 12 12C10.8954 12 10 11.1046 10 10C10 8.89543 10.8954 8 12 8C13.1046 8 14 8.89543 14 10Z"
                                      fill="#C7A462"/>
                            </svg>
                        </div>
                        <p>
                            г. Ставрополь, ул. Дзержинского, 114
                        </p>
                    </div>
                    <div class="contacts-info-item">
                        <div class="contacts-info-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <rect x="4" y="4" width="16" height="3" fill="#C7A462"/>
                                <path d="M4 8H20V12L16 10L12 12L8 10L4 12V8Z" fill="#C7A462"/>
                                <rect x="11" y="13" width="2" height="7" fill="#C7A462"/>
                                <rect x="8" y="18" width="8" height="2" fill="#C7A462"/>
                            </svg>
                        </div>
                        <div class="contacts-info-item-text">
                            <p>
                                Банкетный зал
                            </p>
                            Пн - Вс: 08:00-00:00 <a href="tel:+79624415416">+7 (962) 441 54 16</a>
                        </div>
                    </div>
                    <div class="contacts-info-item">
                        <div class="contacts-info-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.9969 2C7.59096 2 4 5.27438 4 9.29752C4 12.0326 7.71469 16.6332 10.2405 19.7613C10.9604 20.6529 11.5837 21.4249 11.9969 22C12.411 21.4238 13.0363 20.6498 13.7586 19.7559C16.2859 16.6278 20 12.031 20 9.29752C20 5.27438 16.409 2 11.9969 2ZM14 10C14 11.1046 13.1046 12 12 12C10.8954 12 10 11.1046 10 10C10 8.89543 10.8954 8 12 8C13.1046 8 14 8.89543 14 10Z"
                                      fill="#C7A462"/>
                            </svg>
                        </div>
                        <div class="contacts-info-item-text">
                            <p>
                                Ресторан «Molinari»
                            </p>
                            Вс - Чт: 12:00-00:00 Пт - Сб: 12:00 - 02:00 <a href="tel:+79624415416">+7 (962) 441 54
                                16</a>
                        </div>
                    </div>
                    <div class="contacts-info-item">
                        <div class="contacts-info-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12.0217 2L14.9284 8.53531L22 9.27107L16.7072 14.0319L18.1822 21L12.0217 17.451L5.81779 21L7.29284 14.0319L2 9.27107L9.11497 8.53531L12.0217 2Z"
                                      fill="#C7A462"/>
                            </svg>
                        </div>
                        <div style="border: none;" class="contacts-info-item-text">
                            <p>
                                Гостиница «Континент»
                            </p>
                            Круглосуточно <a href="tel:+79624415416">+7 (962) 441 54 16</a>
                        </div>
                    </div>
                </div>
                <div class="contacts-map">
                    <div class="map">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>