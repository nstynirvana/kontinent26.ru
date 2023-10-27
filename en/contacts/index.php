<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
?>
    <script type="text/javascript" src="https://maps.api.2gis.ru/1.0"></script>
    <script type="text/javascript" charset="utf-8" src="https://maps.api.2gis.ru/1.0/dg-js/dg.js?v=200"></script>
    <link rel="stylesheet" href="https://maps.api.2gis.ru/1.0/dg-css/dg.css?v=200">

    <div class="wrapper-content">

        <section class="content-header header-white">
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
                    <div class="logo"><a href="/en/"><img src="/design/img/logo-black-en.svg" alt="" title=""/></a></div>
                </div>
                <div class="header-line-right">
                    <div class="header-line-socials lg-view">
                        <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"), array(), array("MODE" => "html")); ?>
                    </div>
                    <? $APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"), array(), array("MODE" => "html")); ?>
                </div>
            </div>
        </section>

        <section class="rooms-main-block contactpage">
            <div class="rooms-main-block-left">
                <div class="rooms-main-block-left-container">

                    <? include($_SERVER['DOCUMENT_ROOT'] . "/include/template/breadcrumbs.php"); ?>

                    <div class="contentPage-title">
                        <h1>Contacts</h1>
                    </div>
                    <div class="contact-page-information">
                        <div class="contact-page-information-line line-phone">
                            <div class="contact-page-information-phones">
                                <a href="tel:+78652941337">+7 (8652) 94-13-37</a>, <a
                                        href="tel:+78652947575">94-75-75</a><br/>
                                <span>hotel, booking service</span>
                            </div>
                            <!--						<div class="contact-page-information-phones">-->
                            <!--							<a href="tel:+78652956464">+7 (8652) 95-64-64</a><br />-->
                            <!--							<span>боулинг-клуб «Континент»<br />(заказ дорожек, резерв столов)</span>-->
                            <!--						</div>-->
                            <div class="contact-page-information-phones">
                                <a href="tel:+78652946660">+7 (8652) 94-66-60</a><br/>
                                <span>"Continental Saunas"<br/>health center</span>
                            </div>
                            <div class="contact-page-information-phones">
                                <a href="tel:+78652415416">+7 (8652) 41-54-16</a><br/>
                                <span>"Molinari" restaurant</span>
                            </div>
                            <div class="contact-page-information-phones">
                                <a href="tel:+78652500021">+7 (8652) 50-00-21</a><br/>
                                <span>"Sinatra" karaoke club</span>
                            </div>
                            <div class="contact-page-information-phones">
                                <a href="tel:+78652500021">+7 (930) 333-60-65</a><br/>
                                <span>"BEAUTY RESORT 114" beauty parlor</span>
                            </div>
                        </div>
                        <div class="contact-page-information-line line-address">
                            Stavropol, Dzerzhinsky Street, 114
                        </div>
                        <div class="contact-page-information-line line-mail">
                            <a href="mail:kontinent26@bk.ru" class="yellow">kontinent26@bk.ru</a>
                        </div>
                        <div class="contact-page-information-line line-skype">
                            <a href="mail:kontinent26@bk.ru" class="yellow">kontinent26</a>
                        </div>
                        <div class="contact-page-information-line line-inst">
                            <a href="mail:kontinent26@bk.ru" class="yellow">@kontinent26</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rooms-main-block-right">
                <div class="rooms-main-pic">
                    <div class="map" id="myMapId2">
                        <script type="text/javascript">
                            var wdth = $(window).width();
                            $('#myMapId').css('width', wdth + "px");

                            var lon1 = 41.97031045225;
                            var lat1 = 45.044241188014;

                            var zoom = 18;

                            DG.autoload(function () {
                                var myMap = new DG.Map('myMapId2');
                                myMap.setCenter(new DG.GeoPoint(lon1, lat1), zoom);
                                //myMap.controls.add(new DG.Controls.Zoom());

                                myMap.controls.removeAll();
                                myMap.controls.add(new DG.Controls.FullScreen());

                                myMap.controls.add(new DG.Controls.Zoom());


                                var myBalloon = new DG.Balloons.Common({
                                    geoPoint: new DG.GeoPoint(lon1, lat1),
                                    contentHtml: ' '
                                });

                                var myMarker = new DG.Markers.Common({
                                    geoPoint: new DG.GeoPoint(lon1, lat1),
                                    icon: new DG.Icon("/design/img/icon_start.png", new DG.Size(38, 38)),
                                    clickCallback: function () {
                                        if (!myMap.balloons.getDefaultGroup().contains(myBalloon)) {
                                            myMap.balloons.add(myBalloon);
                                        } else {
                                            myBalloon.show();
                                        }
                                    }
                                });

                                myMap.markers.add(myMarker);
                                myMap.disableDblClickZoom();
                                myMap.enableDragging();
                                myMap.disableScrollZoom();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="content"></div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>