<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Детальная страница конференцзала");
?>

<section class="main-block detail-page konferenc-mobile">
	
	<?$APPLICATION->IncludeComponent(
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
			"IBLOCK_ID" => "4",
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
	);?>
		
	<div class="header-line">
		
		<div class="header-line-left">
			<div class="main-menu">
				<a href="#"><span class="icon icon-buter"></span></a>
			</div>	
			<div class="main-phone">
				<span class="lg-view"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"),Array(),Array("MODE"=>"html"));?></span>
				<a class="md-view" href="/rooms/">Номера</a>
			</div>
		</div>
		<div class="header-line-center">
			<div class="logo"><a href="/"><img src="/design/img/logo.svg" alt="" title="" /></a></div>
		</div>
		<div class="header-line-right">
			<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"),Array(),Array("MODE"=>"html"));?>
			<div class="nomera-container">
				<div class="nomera-container-top nomera-top lg-view xs-view">
					<a href="/konferenc-zaly/" class="">Залы</a>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list", 
					"konferenc-list-header", 
					array(
						"COMPONENT_TEMPLATE" => "konferenc-list-header",
						"IBLOCK_TYPE" => "conference",
						"IBLOCK_ID" => "4",
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
				);?>
				<div class="nomera-container-top md-view">
					<a href="#" class="">Залы</a>
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
    strpos($pageUrl, '/konferents-zal-klassik.html') !== false)
{
    $defaultMenu = true;
}

?>


<section class="konferenc-detail-after">
	
	<div class="konferenc-detail-after-textinfo">

        <? if ($defaultMenu): ?>
            <div class="konferenc-text-after-container">
                <div class="konferenc-text-after-left">
                    <div class="konferenc-text-after-title">Дополнительно</div>
                    <div class="konferenc-text-after-table">
                        <div class="konferenc-text-after-table-header">
                            <span class="name">Наименование</span>
                            <span class="value">Стоимость (руб.)</span>
                        </div>
                        <div class="konferenc-text-after-table-body">

                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Аренда кулера (1 шт./1 день)</span>
                                <span class="value">500</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Вода газ/без газ (в стекле) (0,5)</span>
                                <span class="value">100</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Вода газ/без газ (в пластике) (0,5)</span>
                                <span class="value">50</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Экран, проектор/плазменный телевизор 92 дюйма</span>
                                <span class="value">2 000 ₽/день</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Звуковое оборудование, микшерный <br> пульт и 2 микрофона</span>
                                <span class="value">2 000 ₽/день</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Усиленный интернет 100 Мбит/с</span>
                                <span class="value">1 000 ₽/день</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Флипчарт, Магнитно-маркерная доска <br> (с канцелярией)</span>
                                <span class="value">2 000 ₽/день</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Специалист тех поддержки <br> (звук, видео/презентация)</span>
                                <span class="value">по запросу</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Специалист по проведению<br> online-конференций</span>
                                <span class="value">по запросу</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Дополнительные специалисты<br> (официанты, бармены, повара)</span>
                                <span class="value">по запросу</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="konferenc-text-after-right">
                    <div class="konferenc-text-after-title">Питание</div>
                    <div class="konferenc-text-after-table">
                        <div class="konferenc-text-after-table-header">
                            <span class="name">Наименование</span>
                            <span class="value">Стоимость 1 чел. (руб.)</span>
                        </div>
                        <div class="konferenc-text-after-table-body">
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Бизнес Обед</span>
                                <span class="value">500</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Бизнес Ужин</span>
                                <span class="value">700</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Кофе-брейк</span>
                                <span class="value">по запросу</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Фуршет</span>
                                <span class="value">по запросу</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? else: ?>
            <div class="konferenc-text-after-container">
                <div class="konferenc-text-after-left">
                    <div class="konferenc-text-after-title">Дополнительно</div>
                    <div class="konferenc-text-after-table">
                        <div class="konferenc-text-after-table-header">
                            <span class="name">Наименование</span>
                            <span class="value">Стоимость (руб.)</span>
                        </div>
                        <div class="konferenc-text-after-table-body">

                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Аренда кулера (1 шт./1 день)</span>
                                <span class="value">500</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Вода газ/без газ (в стекле) (0,5)</span>
                                <span class="value">100</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Вода газ/без газ (в пластике) (0,5)</span>
                                <span class="value">50</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Флипчарт</span>
                                <span class="value">500</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Мультимедийный проектор</span>
                                <span class="value">входит в стоимость</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Экран</span>
                                <span class="value">входит в стоимость</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Ноутбук</span>
                                <span class="value">входит в стоимость</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Микрофон</span>
                                <span class="value">входит в стоимость</span>
                            </div>
                            <?/*
                                    <div class="konferenc-text-after-table-body-line">
                                        <span class="name">Изменение первоначальной рассадки</span>
                                        <span class="value">1000</span>
                                    </div>
                                    */?>
                        </div>
                    </div>
                </div>
                <div class="konferenc-text-after-right">
                    <div class="konferenc-text-after-title">Питание</div>
                    <div class="konferenc-text-after-table">
                        <div class="konferenc-text-after-table-header">
                            <span class="name">Наименование</span>
                            <span class="value">Стоимость 1 чел. (руб.)</span>
                        </div>
                        <div class="konferenc-text-after-table-body">
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Бизнес Обед</span>
                                <span class="value">500</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Бизнес Ужин</span>
                                <span class="value">700</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Кофе-брейк</span>
                                <span class="value">по запросу</span>
                            </div>
                            <div class="konferenc-text-after-table-body-line">
                                <span class="name">Фуршет</span>
                                <span class="value">по запросу</span>
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
			<div class="main-restorant-title">Конференц-залы</div>
			<div class="main-restorant-text">
				Бизнес отель «Континент» - это центр деловой жизни Ставрополя!
			</div>
			<div class="main-restorant-text-small">
				<p>Мы предлагаем широкий спектр услуг конгресс-центра: VIPкомнаты для деловых переговоров, 7 конференц-залов для проведения видео-конференций, семинаров, тренингов, презентаций и прочих корпоративных мероприятий. Расположение в центре города, удобная бесплатная парковка, качественный сервис, роскошный интерьер – все это позволит провести мероприятие на высшем уровне!</p>

			</div>
		</div>
		<div class="main-restorant-text second">
			<div class="main-restorant-text-small">
				<p>Название этого зала говорит само за себя – это 100 м2 c шикарным видом на центр города. Отличная возможность совместить рабочие встречи с пребыванием в эстетичной атмосфере зала класса premium. Пространство оснащено профессиональным звуковым оборудованием и комфортно вмещает до 50 участников. По запросу организатора мероприятия сотрудники комплекса «Континент» помогут с любыми вопросами в рамках компетенции, а также по вашему желанию организуют комплексное питание участников мероприятия.</p>

			</div>
		</div>
	</div>
<? elseif($hall_area_c): ?>
    <div class="wrapper-inside">
        <div class="main-restorant-info">
            <div class="main-restorant-title">Конференц-залы</div>
            <div class="main-restorant-text">
                Бизнес отель «Континент» - это центр деловой жизни Ставрополя!
            </div>
            <div class="main-restorant-text-small">
                <p>Мы предлагаем широкий спектр услуг конгресс-центра: VIPкомнаты для деловых переговоров, 7 конференц-залов для проведения видео-конференций, семинаров, тренингов, презентаций и прочих корпоративных мероприятий. Расположение в центре города, удобная бесплатная парковка, качественный сервис, роскошный интерьер – все это позволит провести мероприятие на высшем уровне!</p>
                <p>Конференц-зал “Континент” - это самый большой зал комплекса вместимостью до 200 человек, оснащенный профессиональным звуковым оборудованием, проектором и телевизорами по периметру. Здесь проходят масштабные свадебные торжества, юбилеи, корпоративы и конференции. </p>
            </div>
        </div>
        <div class="main-restorant-text second">
            <div class="main-restorant-text-small">
                <p>Просторный светлый зал в белых тонах не оставляет никого равнодушным, а фото и видео в стенах этого помещения получаются эстетичными, стильными и яркими. Чтобы мероприятие прошло на высшем уровне организаторы учитывают все мельчайшие детали, а пространство позволяет реализовать все задуманное: размещение молодоженов, музыкальной аппаратуры, место для фотозоны и т.д. Персонал «Континента» контролирует своевременную подачу блюд, а для пребывания гостей создаются максимально комфортные условия.</p>

            </div>
        </div>
    </div>
<? else: ?>
    <div class="wrapper-inside">
        <div class="main-restorant-info">
            <div class="main-restorant-title">Конференц-залы</div>
            <div class="main-restorant-text">
                Бизнес отель «Континент» - это центр деловой жизни Ставрополя!
            </div>
            <div class="main-restorant-text-small">
                <p>Мы предлагаем широкий спектр услуг конгресс-центра: VIPкомнаты для деловых переговоров, 7 конференц-залов для проведения видео-конференций, семинаров, тренингов, презентаций и прочих корпоративных мероприятий. Расположение в центре города, удобная бесплатная парковка, качественный сервис, роскошный интерьер – все это позволит провести мероприятие на высшем уровне!</p>
                <p>Также Вы можете заказать кофе-брейки, фуршеты, банкеты, бизнес-ланчи, воспользоваться услугами копирования и печати документов.</p>
            </div>
        </div>
        <div class="main-restorant-text second">
            <div class="main-restorant-text-small">
                <p>При аренде конференц–зала, для компаний, в которых принято экономить время, мы берем на себя все заботы о питании, трансфере, размещении и досуге участников. Наш специалист, в случае необходимости, обеспечит мероприятию рекламную поддержку внутри отеля или в любых СМИ города.</p>
                <p>Все помещения конференц-залов оснащены современным профессиональным оборудованием.</p>
            </div>
        </div>
    </div>
<? endif ?>

</section>

<section class="main-form">
	<div class="wrapper-inside">
		<div class="main-clients-title">Бронирование конференц зала</div>
		<div class="form-container">
			<div class="header-line-form-body">
				<div class="form-container konferenc">
					<div class="header-line-form-body">
						<form action="" method="" class="reservation-form">
							<div class="bronirovanie-items-fields">
								<div class="bronirovanie-item">
									<input type="text" class="" name="user-name" placeholder="Имя" />
								</div>
								<div class="bronirovanie-item">
									<input type="text" class="phoneNumber" name="user-phone" placeholder="Телефон" />
								</div>
								<div class="bronirovanie-item" style="display: none;">
									<input type="hidden" class="konferencZalSelected" name="user-zal" placeholder="Выбранный конференц зал" value="<?$APPLICATION->ShowTitle()?>" />
								</div>
							</div>
							<div class="bronirovanie-item bronirovanie-item-btn">
								<button type="submit" class="btn btn-gray">Забронировать</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>