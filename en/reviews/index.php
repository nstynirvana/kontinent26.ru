<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?>

<section class="main-block detail-page service-page">
	
	<div class="konference-detail-nomer-slider">
		<img src="/design/img/review-bg.png" alt="" title="" />
	</div>
	<div class="detail-nomer-content konference">
		
		<?include($_SERVER['DOCUMENT_ROOT']."/include/template/breadcrumbs.php");?>
		
		<div class="rooms-list-item-title">Отзывы</div>
		
		<div class="rooms-list-text">
			<p>Расположенный в центре города бизнес отель «Континент» – идеальный «второй дом» для гостей, будь они туристами, представителями властных структур или бизнесменами</p>
		</div>
		
	</div>
	
	<div class="header-line service-style">
		
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
			<div class="header-line-socials lg-view">
				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social.php"),Array(),Array("MODE"=>"html"));?>
			</div>	
			<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"),Array(),Array("MODE"=>"html"));?>
		</div>
	</div>
	
</section>

<section class="servicePageContainer">
	<div class="wrapper-inside">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"reviews-page-list", 
			array(
				"COMPONENT_TEMPLATE" => "reviews-page-list",
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "5",
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
		);?>
	
	</div>
</section>

<?/*
<section class="review-form">
	<div class="two-block">
		<div class="review-form-left">
			<img src="/design/img/review-form-bg.png" alt="" title="" />
		</div>
		<div class="review-form-right">
			<div class="form-container">
				<div class="header-line-form-body">
					<form action="" method="">
						<div class="bronirovanie-items-fields">
							<div class="bronirovanie-item">
								<input type="text" name="" placeholder="Ваше имя">
							</div>
							<div class="bronirovanie-item">
								<span class="icon icon-data"></span>
								<input type="text" name="" placeholder="Компания">
							</div>
							<div class="bronirovanie-item">
								<span class="icon icon-data"></span>
								<input type="text" name="" placeholder="Отзыв">
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
</section>
*/?>

<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>