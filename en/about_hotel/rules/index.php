<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Правила проживания");
?>

    <section class="main-block detail-page service-page">

        <div class="konference-detail-nomer-slider">
            <img src="/design/img/about-rules.png" alt="" title=""/>
        </div>
        <div class="detail-nomer-content konference">

            <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>

            <div class="rooms-list-item-title">Правила проживания</div>

            <div class="rooms-list-text">
                <p>Порядок проживания и оплаты услуг, предоставляемых бизнес отелем «Континент»</p>
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

    <section class="page-rules">
        <div class="wrapper-inside">
            <div class="page-rules-container">
                <div class="page-rules-left">
                    <div class="rules-text">

                        <h3 id="section1">Terms of accommodation and payment for services provided by the Continent
                            Business Hotel</h3>

                        <ul>
                            <li>Payment for accommodation and services provided by the hotel shall be calculated at the
                                prices established by the Price List approved by the General Director of the hotel.
                            </li>
                            <li>There is no time limit for a stay at the CONTINENT Business Hotel.</li>
                            <li>At the guest's request, a room can be provided to one person regardless of the number of
                                beds, if the room cost is paid in full.
                            </li>
                            <li>The accommodation costs are charged according to the established billing hour from 12.00
                                PM — local time of the current day.
                            </li>
                            <li>Accommodation and additional services costs are paid in RUB in cash and non-cash.</li>
                            <li>
                                In case of guaranteed and non-guaranteed bookings, the check out time is always 12.00 PM
                                and 100% of the room rate per night will be charged, which guarantees the guest the
                                availability of the room from 12.00 PM to 12.00 AM at any check-in time.
                                <ul>
                                    <li>in case of check-in from 14.00 to 23.59 — check-out is at 12.00 of the next day,
                                        and the payment is charged per day.
                                    </li>
                                    <li>in case of check-in from 14.00 to 23.59 — check-out is at 12.00 of the next day,
                                        and the payment is charged per day.
                                    </li>
                                    <li>check in time — 14:00. When a Guest arrives without prior booking before the
                                        specified time, the hotel will grant accommodation to the Guest if rooms are
                                        available.
                                    </li>
                                </ul>
                            </li>
                            <li>If the stay is extended before 14.00 PM — no payment will be charged.</li>
                            <li>If you extend your stay from 14.00 to 23.59 PM of the current day — a payment of 50% of
                                the room rate per day will be charged.
                            </li>
                        </ul>

                        <h3 id="section2">Continent Fire Safety Policy</h3>

                        <p class="big-text">Dear guests! Please observe the fire safety rules.</p>

                        <ul>
                            <li>When leaving your room, do not forget to turn off the TV, radio, air conditioning,
                                lights and electric appliances.
                            </li>
                            <li>We remind you that you must not cover switched on floor and table lamps with objects
                                made of flammable material.
                            </li>
                            <li>Smoking in the hotel building is allowed only in the designated areas.</li>
                            <li>You must not smoke in bed or in your room.</li>
                            <li>The storage of explosion and fire hazardous substances and materials in the room is
                                prohibited.
                            </li>
                        </ul>

                        <p>If it's your first time at the hotel, try to memorize the location of exits and staircases,
                            familiarize yourself with the evacuation plan and the location of primary fire extinguishing
                            equipment. Have a good holiday.</p>

                        <p id="section3" class="big-text">If there is a fire in your room:</p>

                        <ul>
                            <li>Immediately report the incident to the fire department at "01" and to the administrator
                                on duty via the number 6 1000.
                            </li>
                            <li>If it is not possible to extinguish the fire on your own, leave the room and close the
                                door without locking it.
                            </li>
                            <li>Be sure to report the fire to the floor hostess or another member of the hotel
                                management.
                            </li>
                            <li>Leave the danger zone and follow the hotel managers’ or firefighters’ instructions.</li>
                        </ul>

                        <p id="section4" class="big-text">If there is a fire outside your room:</p>

                        <ul>
                            <li>Immediately report the incident to the fire department by calling "01" and the
                                administrator on duty.
                            </li>
                            <li>Leave your room after closing windows and doors, exit the building using the emergency
                                exits;
                            </li>
                            <li>If the corridors and stairways are badly smoke filled and you cannot leave the room, you
                                should stay with the windows open. A closed and well-sealed door can protect you from
                                dangerous temperatures for a long time. To avoid smoke poisoning, cover with wet towels
                                and bedding any gaps under the door or air vents in the room.
                            </li>
                            <li>Try to tell your location to the front desk by phone.</li>
                            <li>When the fire department arrives at the site, go out onto the enclosed balcony and signal for help.
                            </li>
                            <li>You can wait until the fire is over on the enclosed balcony. Close the balcony door behind you.
                            </li>
                        </ul>

                        <p class="big-text">With respect, Administration of the CONTINENT Business Hotel.</p>
                    </div>
                </div>
                <div class="page-rules-right">
                    <div class="rules-menu">
                        <ul>
                            <li><a href="#section1">Accommodation and payment procedures</a></li>
                            <li><a href="#section2">What is prohibited in the hotel</a></li>
                            <li><a href="#section3">Additional information</a></li>
                            <li><a href="#section4">Fire Safety Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>