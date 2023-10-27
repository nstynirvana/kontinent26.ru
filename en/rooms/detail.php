<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Детальная страница номера");
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
                    <a class="md-view" href="/en/rooms/">Номера</a>
                </div>
            </div>
            <div class="header-line-center">
                <div class="logo"><a href="/en/"><img src="/design/img/logo.svg" alt="" title=""/></a></div>
            </div>
            <div class="header-line-right">
                <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
                <div class="nomera-container">
                    <div class="nomera-container-top nomera-top lg-view xs-view">
                        <a href="/en/rooms/" class="">Номера</a>
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
                        <a href="#" class="">Номера</a>
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
                <div class="detail-page-text-title">В стоимость номера включено:</div>
                <div class="detail-page-text-content">
                    <div class="detail-page-text-content-left">
                        <div class="detail-page-text-item item-tafirs">
                            <div class="detail-page-text-item-title">Тарифы</div>
                            <div class="detail-page-text-item-list">
                                <div class="detail-page-text-item-list-item">
                                    <span class="title">Базовый тариф</span>
                                    <span class="text">проживание, завтрак «Шведский стол»</span>
                                </div>
                                <div class="detail-page-text-item-list-item">
                                    <span class="title">Тариф "Полупансион"</span>
                                    <span class="text">проживание, завтрак «Шведский стол», комплексный ужин</span>
                                </div>
                                <div class="detail-page-text-item-list-item">
                                    <span class="title">Тариф "Полный пансион"</span>
                                    <span class="text">проживание, завтрак «Шведский стол», комплексный обед и ужин</span>
                                </div>
                            </div>
                        </div>
                        <div class="detail-page-text-item item-zaezd">
                            <div class="detail-page-text-item-title">Заезд</div>
                            <div class="detail-page-text-item-list">
                                <p><b>Расчетный час</b> - заезд в 14:00 ч., выезд в 12:00 ч.</p>
                                <p><b>При продлении проживания:</b> - с 12:00 до 23:00 оплата за сутки.</p>
                                <p><b>Ранний заезд</b> - заезд ранее указанного срока возможен при наличии свободных
                                    номеров, при гарантированном заезде оплата за сутки до даты заезда.</p>
                            </div>
                        </div>
                        <div class="detail-page-text-item item-annylirovanie">
                            <div class="detail-page-text-item-title">Аннуляция бронирования</div>
                            <div class="detail-page-text-item-list">
                                <p>Сроки полной или частичной аннуляции без штрафных санкций при бронировании для
                                    индивидуальных клиентов: до 14:00 за 1 сутки до даты заезда.</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-page-text-content-right">
                        <div class="detail-page-text-item item-dopmesta">
                            <div class="detail-page-text-item-title">Дополнительные места</div>
                            <div class="detail-page-text-item-list">
                                Стоимость дополнительного места составляет 1700 рублей. В стоимость дополнительного
                                места включено: завтрак – «Шведский стол»
                            </div>
                        </div>
                        <div class="detail-page-text-item item-deti">
                            <div class="detail-page-text-item-title">Специальные условия размещения для детей</div>
                            <div class="detail-page-text-item-list">
                                <p><b>До 5 лет</b> при условии проживания с родителями (родителем) в номере, бесплатно,
                                    включая завтрак «Шведский стол», без предоставления дополнительного места.</p>
                                <p><b>От 6 до 12 лет</b> при условии проживания с родителями (родителем) в номере,
                                    доплата составляет 1700 рублей от стоимости номера, предоставляется дополнительное
                                    место. Доплата включает: проживание, завтрак «Шведский стол».</p></div>
                        </div>
                        <div class="detail-page-text-item item-lgotniki">
                            <div class="detail-page-text-item-title">Специальные условия для размещения льготной
                                категории гражда
                            </div>
                            <div class="detail-page-text-item-list">
                                <p></p>
                                <p>Специальные условия для размещения льготной категории граждан РФ в соответствии с
                                    законодательством:</p>
                                <p>Предоставляется скидка 50% на проживание при предъявлении документа, удостоверяющего
                                    право на получение льгот.</p>
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