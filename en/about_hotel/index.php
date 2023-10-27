<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("About hotel");
?>


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
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "rooms-list-about-page",
                        array(
                            "COMPONENT_TEMPLATE" => "rooms-list-about-page",
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
                    <p>Our guests can enjoy shopping in stores offering brand items such as clothing, cosmetics, and
                        appliances.</p>
                </div>
            </div>
            <div class="main-restorant-text second">
                <div class="main-restorant-text-small">
                    <div class="about-service-list">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "service-page-list-about",
                            array(
                                "COMPONENT_TEMPLATE" => "service-page-list-about",
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
                                "PARENT_SECTION" => "11",
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
            </div>
        </div>
    </section>

    <section class="about-page-dosug">
        <div class="wrapper-inside">
            <div class="main-restorant-text second">
                <div class="main-restorant-title">Entertainment</div>
                <div class="main-restorant-text-small">
                    <p>In the Samovar or Molinari Café of the Continent Business Hotel, guests can enjoy a tasty snack
                        and have their favorite drinks. The chef will prepare Russian, European and Japanese dishes for
                        you.</p>
                    <p>Sing some heart-warming songs at Sinatra's Karaoke Club. Excellent sound plus a huge list of
                        popular familiar songs in the catalogs. Attentive personnel means a good holiday.</p>
                    <p>Got tired after a long day? No problem, a skilled masseur can help you out. Your body will find
                        joy in the massage room, as it will feel healthy and energized.</p>
                    <p>You can choose a birch bath room in a Russian sauna or relax in a Roman one. Need a stunning
                        hairstyle, makeup, impressive manicur? Contact our hotel's beauty salon.</p>
                </div>
            </div>
            <div class="main-restorant-info">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "service-page-list-about",
                    array(
                        "COMPONENT_TEMPLATE" => "service-page-list-about",
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
                        "PARENT_SECTION" => "12",
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