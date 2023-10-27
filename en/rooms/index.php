<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
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
                        <span class="lg-view"><? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"), array(), array("MODE" => "html")); ?></span>
                        <a class="md-view" href="/en/rooms/">Номера</a>
                    </div>
                </div>
                <div class="header-line-center">
                    <div class="logo"><a href="/en/"><img src="/design/img/logo-black.svg" alt="" title=""/></a></div>
                </div>
                <div class="header-line-right">
                    <div class="header-line-socials lg-view">
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"), array(), array("MODE" => "html")); ?>
                    </div>
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
                </div>
            </div>
        </section>

        <section class="rooms-main-block">
            <div class="rooms-main-block-left">
                <div class="rooms-main-block-left-container">
                    <table>
                        <tr>
                            <td>
                                <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>
                                <div class="contentPage-title">
                                    <h1>Номера и цены</h1>
                                </div>
                                <div class="contentPage-zagolovok">
                                    <p>203 номер от стандарта до люкса</p>
                                </div>
                                <div class="contentPage-text">
                                    <p>Новые номера в бизнес отеле «Континент» приятно поражают индивидуальными
                                        интерьерами, гармоничными цветами, настроением уюта, домашним теплом</p>
                                </div>
                                <div class="contentPage-btn">
                                    <a href="/en/reservation/" class="btn btn-gray">Забронировать</a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="rooms-main-block-right">
                <div class="rooms-main-pic">
                    <img src="/design/img/Rectangle_72_new.png" alt="" title=""/>
                </div>
            </div>
        </section>

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "rooms-list-page",
            array(
                "COMPONENT_TEMPLATE" => "rooms-list-page",
                "IBLOCK_TYPE" => "rooms",
                "IBLOCK_ID" => "18",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "NAME",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "arrFilterSlider",
                "FIELD_CODE" => array(
                    0 => "PREVIEW_PICTURE",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
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

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>