<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Местоположение");
?>

    <section class="main-block detail-page service-page">

        <div class="konference-detail-nomer-slider">
            <img src="/design/img/about-locations-page.png" alt="" title=""/>
        </div>
        <div class="detail-nomer-content konference">

            <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>

            <div class="rooms-list-item-title">Location</div>

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
                <div class="logo"><a href="/en/"><img src="/design/img/logo-en.svg" alt="" title=""/></a></div>
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

    <section class="about-location-content">
        <div class="wrapper-inside">
            <div class="main-hotel-transport">
                <div class="main-hotel-transport-title">Transport availability</div>
                <div class="main-hotel-transport-item-container">
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/transport-table-en.php"), array(), array("MODE" => "php")); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="main-map">
        <div class="wrapper-inside">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "maps-container",
                array(
                    "COMPONENT_TEMPLATE" => "maps-container",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => "23",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE" => array(
                        0 => "MAP",
                        1 => "COORDS",
                        2 => "METRS",
                        3 => "",
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