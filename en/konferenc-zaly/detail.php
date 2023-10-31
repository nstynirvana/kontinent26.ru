<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Детальная страница конференцзала");
?>

    <section class="main-block detail-page konferenc-mobile">

        <? $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "konferenc-detail-page",
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
                    0 => "PREVIEW_PICTURE",
                    1 => "",
                ),
                "IBLOCK_ID" => "33",
                "IBLOCK_TYPE" => "conference",
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
                    0 => "PANORAMA",
                    1 => "TRAVELLINE_ID",
                    2 => "PEOPLES",
                    3 => "PLOSHAD",
                    4 => "RASSADKA",
                    5 => "DISCOUNT",
                    6 => "PRICE",
                    7 => "",
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
                "COMPONENT_TEMPLATE" => "konferenc-detail-page"
            ),
            false
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
                        <a href="/en/konferenc-zaly/" class="">Halls</a>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "konferenc-list-header",
                        array(
                            "COMPONENT_TEMPLATE" => "konferenc-list-header",
                            "IBLOCK_TYPE" => "conference",
                            "IBLOCK_ID" => "33",
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
                                0 => "PANORAMA",
                                1 => "TRAVELLINE_ID",
                                2 => "PEOPLES",
                                3 => "PLOSHAD",
                                4 => "RASSADKA",
                                5 => "DISCOUNT",
                                6 => "PRICE",
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
                            "MESSAGE_404" => "",
                            "ELEMENT_CODE_CUR" => $_REQUEST["ELEMENT_CODE"]
                        ),
                        false
                    ); ?>
                    <div class="nomera-container-top md-view">
                        <a href="#" class="">Halls</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?
$defaultMenu = false; // Default image
$pageUrl = $_SERVER['REQUEST_URI'];
if (strpos($pageUrl, '/konferents-zal-kontinent.html') !== false ||
    strpos($pageUrl, '/konferents-zal-premer.html') !== false ||
    strpos($pageUrl, '/konferents-zal-panorama.html') !== false ||
    strpos($pageUrl, '/konferents-zal-klassik.html') !== false) {
    $defaultMenu = true;
}

?>


    <section class="konferenc-detail-after">

        <div class="konferenc-detail-after-textinfo">

            <? if ($defaultMenu): ?>
                <div class="konferenc-text-after-container">
                    <div class="konferenc-text-after-left">
                        <div class="konferenc-text-after-title">Optional</div>
                        <div class="konferenc-text-after-table">
                            <div class="konferenc-text-after-table-header">
                                <span class="name">Service name</span>
                                <span class="value">Price (RUB)</span>
                            </div>
                            <div class="konferenc-text-after-table-body">

                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Cooler rental (1 pc./1 day)</span>
                                    <span class="value">500</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Sparkling mineral water/still water <br> (in a glass bottle) (0,5)</span>
                                    <span class="value">100</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Sparkling mineral water/still water <br> (in a plastic bottle) (0,5)</span>
                                    <span class="value">50</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Screen, projector/plasma TV 92 inches</span>
                                    <span class="value">2 000 ₽ per day</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Sound equipment, mixing <br> console and 2 microphones</span>
                                    <span class="value">2 000 ₽ per day</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Amplified Internet 100 Mbps</span>
                                    <span class="value">1 000 ₽ per day</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Flipchart, Magnetic marker board <br> (with stationery)</span>
                                    <span class="value">2 000 ₽ per day</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Technical support specialist <br> (sound, video/presentation)</span>
                                    <span class="value">On request</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Online conference specialist</span>
                                    <span class="value">On request</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Additional specialists<br> (waiters, bartenders, cooks)</span>
                                    <span class="value">On request</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="konferenc-text-after-right">
                        <div class="konferenc-text-after-title">Feeding</div>
                        <div class="konferenc-text-after-table">
                            <div class="konferenc-text-after-table-header">
                                <span class="name">Name</span>
                                <span class="value">Price per person (RUB)</span>
                            </div>
                            <div class="konferenc-text-after-table-body">
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Business Lunch</span>
                                    <span class="value">500</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Business Dinner</span>
                                    <span class="value">700</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Coffee break</span>
                                    <span class="value">On request</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Buffet</span>
                                    <span class="value">On request</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? else: ?>
                <div class="konferenc-text-after-container">
                    <div class="konferenc-text-after-left">
                        <div class="konferenc-text-after-title">Optional</div>
                        <div class="konferenc-text-after-table">
                            <div class="konferenc-text-after-table-header">
                                <span class="name">Service name</span>
                                <span class="value">Price (RUB)</span>
                            </div>
                            <div class="konferenc-text-after-table-body">

                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Cooler rental (1 pc./1 day)</span>
                                    <span class="value">500</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Sparkling mineral water/still water <br> (in a glass bottle) (0,5)</span>
                                    <span class="value">100</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Sparkling mineral water/still water <br> (in a plastic bottle) (0,5)</span>
                                    <span class="value">50</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Flipchart</span>
                                    <span class="value">500</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Multi-media projector</span>
                                    <span class="value">included in the price</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Screen</span>
                                    <span class="value">included in the price</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Laptop</span>
                                    <span class="value">included in the price</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Microphone</span>
                                    <span class="value">included in the price</span>
                                </div>
                                <? /*
                                    <div class="konferenc-text-after-table-body-line">
                                        <span class="name">Изменение первоначальной рассадки</span>
                                        <span class="value">1000</span>
                                    </div>
                                    */ ?>
                            </div>
                        </div>
                    </div>
                    <div class="konferenc-text-after-right">
                        <div class="konferenc-text-after-title">Feeding</div>
                        <div class="konferenc-text-after-table">
                            <div class="konferenc-text-after-table-header">
                                <span class="name">Name</span>
                                <span class="value">Price per person (RUB)</span>
                            </div>
                            <div class="konferenc-text-after-table-body">
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Business Lunch</span>
                                    <span class="value">500</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Business Dinner</span>
                                    <span class="value">700</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Coffee break</span>
                                    <span class="value">On request</span>
                                </div>
                                <div class="konferenc-text-after-table-body-line">
                                    <span class="name">Buffet</span>
                                    <span class="value">On request</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? endif ?>

        </div>

    </section>


<?
$imageSrc = '/design/img/image_19-1.png'; // Default image

$hall_area_p = false;
$hall_area_c = false;

$pageUrl = $_SERVER['REQUEST_URI'];

if (strpos($pageUrl, '/konferents-zal-1.html') !== false) {
    $imageSrc = '/design/img/conf_zal_1.png'; // Image for konferents-zal-1
} elseif (strpos($pageUrl, '/konferents-zal-2.html') !== false) {
    $imageSrc = '/design/img/conf_zal_2.png'; // Image for konferents-zal-2
} elseif (strpos($pageUrl, '/konferents-zal-3.html') !== false) {
    $imageSrc = '/design/img/image_19-1.png'; // Image for konferents-zal-3
} elseif (strpos($pageUrl, '/konferents-zal-kontinent.html') !== false) {
    $imageSrc = '/design/img/conf_zal_kontinent_new_370.png'; // Image for konferents-zal-1
    $hall_area_c = true;
} elseif (strpos($pageUrl, '/konferents-zal-premer.html') !== false) {
    $imageSrc = '/design/img/conf_zal_premer.png'; // Image for konferents-zal-1

} elseif (strpos($pageUrl, '/konferents-zal-panorama.html') !== false) {
    $imageSrc = '/design/img/conf_zal_panorama.png'; // Image for konferents-zal-1
    $hall_area_p = true;
} elseif (strpos($pageUrl, '/konferents-zal-klassik.html') !== false) {
    $imageSrc = '/design/img/zal_klassik_370.png'; // Image for konferents-zal-1
}

?>


    <section class="main-restorant-picture-container konference">
        <img src="<? echo $imageSrc; ?>" alt="" title="">
    </section>

    <section class="main-restorant-content konference">
        <? if ($hall_area_p): ?>
            <div class="wrapper-inside">
                <div class="main-restorant-info">
                    <div class="main-restorant-title">Conference halls</div>
                    <div class="main-restorant-text">
                        Continent Business Hotel is the heart of business life in Stavropol!
                    </div>
                    <div class="main-restorant-text-small">
                        <p>We offer a wide range of congress center services: VIP rooms for business negotiations, 7
                            conference halls for video conferences, seminars, trainings, presentations and other
                            corporate events. Location in the city center, convenient free parking,
                            quality service, luxurious interior - all this will allow you to hold the event at the
                            highest level!
                        </p>

                    </div>
                </div>
                <div class="main-restorant-text second">
                    <div class="main-restorant-text-small">
                        <p>The name of this room speaks for itself - it is 100 m2 with a gorgeous view of the city
                            center.
                            An excellent opportunity to combine working meetings with staying in the aesthetic
                            atmosphere of the hall.
                            premium class. The space is equipped with professional sound equipment and comfortably
                            accommodates up to 50 participants. At the request of the event organizer the employees of
                            the complex
                            "Continent" will help with any questions within the competence, as well as at your request
                            organize complex catering for the participants of the event.</p>

                    </div>
                </div>
            </div>
        <? elseif ($hall_area_c): ?>
            <div class="wrapper-inside">
                <div class="main-restorant-info">
                    <div class="main-restorant-title">Conference halls</div>
                    <div class="main-restorant-text">
                        Continent Business Hotel is the heart of business life in Stavropol!
                    </div>
                    <div class="main-restorant-text-small">
                        <p>We offer a wide range of congress center services: VIP rooms for business negotiations, 7
                            conference halls for video conferences, seminars, trainings, presentations and other
                            corporate events. Location in the city center, convenient free parking,
                            quality service, luxurious interior - all this will allow you to hold the event at the
                            highest level!
                        </p>
                        <p>Continent Conference hall is the largest hall of the complex accommodating up to 200 people,
                            featuring professional sound equipment, projector and TVs. It hosts large-scale weddings,
                            anniversaries, corporate parties and conferences.</p>
                    </div>
                </div>
                <div class="main-restorant-text second">
                    <div class="main-restorant-text-small">
                        <p>Spacious bright hall decorated in white colors looks nice to everybody, while photos and
                            videos on the walls of the room are aesthetically pleasing, stylish and colorful. To hold
                            the event at the highest level, the organizers consider every small detail, and the room
                            allows to achieve everything planned: accomodation of newlyweds, music equipment, a place
                            for a photo booth, etc. The Continent's staff controls the timely serving of food, and the
                            most comfortable conditions are created for the guests stay.</p>

                    </div>
                </div>
            </div>
        <? else: ?>
            <div class="wrapper-inside">
                <div class="main-restorant-info">
                    <div class="main-restorant-title">Conference halls</div>
                    <div class="main-restorant-text">
                        Continent Business Hotel is the heart of business life in Stavropol!
                    </div>
                    <div class="main-restorant-text-small">
                        <p>We offer a wide range of congress center services: VIP rooms for business negotiations, 7
                            conference halls for video conferences, seminars, trainings, presentations and other
                            corporate events. Location in the city center, convenient free parking,
                            quality service, luxurious interior - all this will allow you to hold the event at the
                            highest level!
                        </p>
                        <p>You can also order coffee breaks, buffets, banquets, business lunches, copying and printing
                            services.</p>
                    </div>
                </div>
                <div class="main-restorant-text second">
                    <div class="main-restorant-text-small">
                        <p>When renting a conference hall, for time-saving companies, we take care of
                            all catering, transportation, accommodation and leisure of participants. Our specialist, in
                            case of if necessary, will provide the event advertising support within the hotel or in any
                            media of the city.</p>
                        <p>All conference rooms are equipped with modern professional equipment.</p>
                    </div>
                </div>
            </div>
        <? endif ?>

    </section>

    <section class="main-form">
        <div class="wrapper-inside">
            <div class="main-clients-title">Conference hall booking</div>
            <div class="form-container">
                <div class="header-line-form-body">
                    <div class="form-container konferenc">
                        <div class="header-line-form-body">
                            <form action="" method="" class="reservation-form">
                                <div class="bronirovanie-items-fields">
                                    <div class="bronirovanie-item">
                                        <input type="text" class="" name="user-name" placeholder="Name"/>
                                    </div>
                                    <div class="bronirovanie-item">
                                        <input type="text" class="phoneNumber" name="user-phone" placeholder="Phone"/>
                                    </div>
                                    <div class="bronirovanie-item" style="display: none;">
                                        <input type="hidden" class="konferencZalSelected" name="user-zal"
                                               placeholder="Выбранный конференц зал"
                                               value="<? $APPLICATION->ShowTitle() ?>"/>
                                    </div>
                                </div>
                                <div class="bronirovanie-item bronirovanie-item-btn">
                                    <button type="submit" class="btn btn-gray">BOOKING</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>