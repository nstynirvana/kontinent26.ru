<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Detailed room page");
?>

    <section class="main-block detail-page">

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "nomer-detail-page",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BROWSER_TITLE" => "-",
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
                "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
                "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
                "FIELD_CODE" => array("", ""),
                "IBLOCK_ID" => "18",
                "IBLOCK_TYPE" => "rooms",
                "IBLOCK_URL" => "",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "MESSAGE_404" => "",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Страница",
                "PROPERTY_CODE" => array("TRAVELLINE_ID", "SLIDER_SHOW", "FOR_WHO", "COUNTS", "SHORT_NAME", "SLIDER_NAME", "KING", "PLUSES_LIST", "DISCOUNT", "DISCOUNT_SIZE", "PANORAMA", "SLIDER_PRICE", ""),
                "SET_BROWSER_TITLE" => "Y",
                "SET_CANONICAL_URL" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "STRICT_SECTION_CHECK" => "N",
                "USE_PERMISSIONS" => "N",
                "USE_SHARE" => "N"
            )
        ); ?>

        <div class="header-line">
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
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
                <div class="nomera-container">
                    <div class="nomera-container-top nomera-top lg-view xs-view">
                        <a href="/en/rooms/" class="">Rooms</a>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "rooms-list-header",
                        array(
                            "COMPONENT_TEMPLATE" => "rooms-list-header",
                            "IBLOCK_TYPE" => "rooms",
                            "IBLOCK_ID" => "18",
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
                        <a href="#" class="">Rooms</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? /*$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"nomer-detail-page-text", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
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
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "rooms",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "TRAVELLINE_ID",
			1 => "ANNYLATION",
			2 => "SLIDER_SHOW",
			3 => "FOR_WHO",
			4 => "DOP_MESTA",
			5 => "ZAEZD_PRI_PRODLENII",
			6 => "ZAEZD_RANNIY",
			7 => "ZAEZD_RASCHETNIY_CHAS",
			8 => "COUNTS",
			9 => "SHORT_NAME",
			10 => "SLIDER_NAME",
			11 => "KING",
			12 => "PLUSES_LIST",
			13 => "DISCOUNT",
			14 => "DISCOUNT_SIZE",
			15 => "LGOTNIKI",
			16 => "CHILDREN",
			17 => "PANORAMA",
			18 => "TARIFS",
			19 => "SLIDER_PRICE",
			20 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "nomer-detail-page-text"
	),
	false
);*/ ?>

    <div class="wrapper-content">
        <div class="wrapper-inside">
            <div class="detail-page-text">
                <div class="detail-page-text-title">The room rate includes:</div>
                <div class="detail-page-text-content">
                    <div class="detail-page-text-content-left">
                        <div class="detail-page-text-item item-tafirs">
                            <div class="detail-page-text-item-title">Rates</div>
                            <div class="detail-page-text-item-list">
                                <div class="detail-page-text-item-list-item">
                                    <span class="title">Basic Rate</span>
                                    <span class="text">accommodation, buffet breakfast</span>
                                </div>
                                <div class="detail-page-text-item-list-item">
                                    <span class="title">Half Board Rate</span>
                                    <span class="text">accommodation, buffet breakfast, set dinner</span>
                                </div>
                                <div class="detail-page-text-item-list-item">
                                    <span class="title">Full Board Rate</span>
                                    <span class="text">accommodation, buffet breakfast, set lunch and dinner
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="detail-page-text-item item-zaezd">
                            <div class="detail-page-text-item-title">Сheck-in</div>
                            <div class="detail-page-text-item-list">
                                <p><b>Check-out time</b> - check-in at 14:00 PM, check-out at 12:00 PM.</p>
                                <p><b>When extending stay:</b> - from 12:00 to 23:00 - payment per day.</p>
                                <p><b>Early check-in</b> - early check-in is possible if rooms are available, with
                                    guaranteed check-in payment one day prior to the date of check-in.</p>
                            </div>
                        </div>
                        <div class="detail-page-text-item item-annylirovanie">
                            <div class="detail-page-text-item-title">Cancellation of booking</div>
                            <div class="detail-page-text-item-list">
                                <p>Deadline for full or partial cancellation without a fee for bookings made by individual clients: by 14:00, 1 day prior to the date of arrival.</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-page-text-content-right">
                        <div class="detail-page-text-item item-dopmesta">
                            <div class="detail-page-text-item-title">Extra beds</div>
                            <div class="detail-page-text-item-list">
                                The cost of an extra bed is 1700 RUB. The cost of an extra bed includes: buffet breakfast
                            </div>
                        </div>
                        <div class="detail-page-text-item item-deti">
                            <div class="detail-page-text-item-title">Special accommodations for children</div>
                            <div class="detail-page-text-item-list">
                                <p><b>Up to 6 years old</b> if staying with parents (parent) in the room, free of
                                    charge, including buffet breakfast, without an extra bed. </p>
                                <p><b>From 6 to 12 years old</b> if staying with parents (parent) in the room, an
                                    additional payment of 1000 RUB of the room cost, an extra bed is provided. The extra
                                    charge includes: accommodation, buffet breakfast.</p></div>
                        </div>
                        <div class="detail-page-text-item item-lgotniki">
                            <div class="detail-page-text-item-title">Special conditions for accommodation of the
                                privileged category of citizens
                            </div>
                            <div class="detail-page-text-item-list">
                                <p></p>
                                <p>Special conditions for accommodation of the privileged category of citizens of the
                                    Russian Federation in accordance with the legislation:</p>
                                <p>A 50% discount on accommodation is provided upon presenting a document certifying the
                                    right to receive benefits.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="main-form">
        <div class="wrapper-inside">
            <div class="main-clients-title">Rooms booking</div>
            <div class="form-container">
                <div class="header-line-form-body">
                    <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/page-form-container-en.php"); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>