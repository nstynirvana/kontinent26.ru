<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>


    <section class="main-block detail-page service-page">

        <div class="konference-detail-nomer-slider">
            <img src="/design/img/zal_continent_622.png" alt="" title=""/>
        </div>
        <div class="detail-nomer-content konference">

            <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>

            <div class="rooms-list-item-title">Услуги</div>

            <div class="rooms-list-text">
                <p>На территории гостиницы оборудованы и оснащены современной техникой 7 комфортабельных конференц-зала
                    и бизнес-холл с удобной для рабочих встреч и кофе-брейков обстановкой</p>
            </div>

        </div>

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
                <div class="logo"><a href="/en/"><img src="/design/img/logo.svg" alt="" title=""/></a></div>
            </div>
            <div class="header-line-right">
                <div class="header-line-socials lg-view">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"), array(), array("MODE" => "html")); ?>
                </div>
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
            </div>
        </div>

    </section>

    <section class="page-podmenu">
        <div class="wrapper-inside">
            <div class="page-podmenu-line">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "service-list-menu",
                    array(
                        "COMPONENT_TEMPLATE" => "service-list-menu",
                        "IBLOCK_TYPE" => "content",
                        "IBLOCK_ID" => "25",
                        "SECTION_ID" => "",
                        "SECTION_CODE" => "",
                        "COUNT_ELEMENTS" => "Y",
                        "TOP_DEPTH" => "1",
                        "SECTION_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "sectionsFilter",
                        "VIEW_MODE" => "LINE",
                        "SHOW_PARENT_NAME" => "Y",
                        "SECTION_URL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_FILTER" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CURRENT_SECTION" => $_REQUEST["SECTION_CODE"],
                        "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE"
                    ),
                    false
                ); ?>
            </div>
        </div>
    </section>

    <section class="servicePageContainer">
        <div class="wrapper-inside">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "service-page-list",
                array(
                    "COMPONENT_TEMPLATE" => "service-page-list",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "25",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "NAME",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "arrFilterSlider",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
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
                    "PARENT_SECTION_CODE" => $_REQUEST["SECTION_CODE"],
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