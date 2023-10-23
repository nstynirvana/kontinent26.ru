<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бронирование");
?>


<section class="main-block detail-page service-page">
	
	<div class="konference-detail-nomer-slider">
		<img src="/design/img/review-bg.png" alt="" title="" />
	</div>
	<div class="detail-nomer-content konference">
		
		<?include($_SERVER['DOCUMENT_ROOT']."/include/template/breadcrumbs.php");?>
		
		<div class="rooms-list-item-title">Бронирование</div>
		
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

<section class="reservationPageContainer">
	<div class="wrapper-inside">
		<div class="content_wrap price_content_wrap" id="the_header">
			<!-- start booking form 2.0 -->
			<div id="tl-booking-form" style="margin-top: 90px;"></div>
			<script type="text/javascript">
				(function(w){
					var q=[
						['setContext', 'TL-INT-kontinent26', 'ru'],
						['embed', 'booking-form', {container: 'tl-booking-form'}]
					];
					var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
					if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//www.travelline.ru/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
				})(window);
			</script>
			<!-- end booking form 2.0 -->
		</div>
	</div>
</section>


<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>