<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Правила проживания");
?>

<section class="main-block detail-page service-page">
	
	<div class="konference-detail-nomer-slider">
		<img src="/design/img/about-rules.png" alt="" title="" />
	</div>
	<div class="detail-nomer-content konference">
		
		<?include($_SERVER['DOCUMENT_ROOT']."/include/template/breadcrumbs.php");?>
		
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
				<span class="lg-view"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/phone-link.php"),Array(),Array("MODE"=>"html"));?></span>
				<a class="md-view" href="/rooms/">Номера</a>
			</div>
		</div>
		<div class="header-line-center">
			<div class="logo"><a href="/"><img src="/design/img/logo.svg" alt="" title="" /></a></div>
		</div>
		<div class="header-line-right">
			<div class="header-line-socials lg-view">
				<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-social-white.php"),Array(),Array("MODE"=>"html"));?>
			</div>	
			<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/header-mobile-phone.php"),Array(),Array("MODE"=>"html"));?>
		</div>
	</div>
	
</section>

<section class="page-podmenu">
	<div class="wrapper-inside">
		<div class="page-podmenu-line">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "podmenu-template", Array(
	
				),
				false
			);?>
		</div>
	</div>
</section>

<section class="page-rules">
	<div class="wrapper-inside">
		<div class="page-rules-container">
			<div class="page-rules-left">
				<div class="rules-text">
				
					<h3 id="section1">Порядок проживания и оплаты услуг, предоставляемых бизнес отелем «Континент»</h3>
					
					<ul>
						<li>Плата за проживание и услуги, предоставляемые отелем, осуществляется по ценам, установленным Прейскурантом, утвержденным Генеральным директором отеля.</li>
						<li>Предельный срок проживания в бизнес отеле «КОНТИНЕНТ» не установлен.</li>
						<li>По желанию гостя одному лицу может предоставляться номер независимо от количества в нем мест, при условии полной оплаты стоимости номера.</li>
						<li>Плата за проживание взимается в соответствии с установленным расчетным часом с 12.00 часов текущих суток по местному времени.</li>
						<li>Оплата за проживание и дополнительные услуги производится в рублях РФ за наличный и безналичный расчет.</li>
						<li>
							При гарантированном и негарантированном бронировании расчетным часом (check out time) всегда является 12.00 и взимается оплата в размере 100% стоимости номера в сутки, что гарантирует гостю наличие номера с 12.00 до 12.00 при любом времени заезда.
							<ul>
								<li>при заезде с 14.00 до 23.59 – выезд осуществляется в 12.00 следующих суток, и оплата взимается за сутки. </li>
								<li>при заезде с 23.59 до 12.00 выезд осуществляется в 12.00 следующих суток и оплата взимается за сутки.</li>
								<li>время поселения в отель (check in time) – 14:00. При заезде Гостя без предварительного бронирования до указанного времени, отель предоставляет поселение Гостю при наличии свободных номеров.</li>
							</ul>
						</li>
						<li>При продлении проживания до 14.00 часов – плата не взимается.</li>
						<li>При продлении проживания с 14.00 до 23.59 часов текущих суток – взимается оплата в размере 50% стоимости номера в сутки.</li>
					</ul>
					
					<h3 id="section2">Памятка о правилах пожарной безопасности в бизнес отеле «Континент»</h3>
					
					<p class="big-text">Уважаемые гости! Просим Вас соблюдать правила пожарной безопасности.</p>
					
					<ul>
						<li>Уходя из номера, не забывайте выключать телевизор, радиоприемник, кондиционер, лампы освещения и электронагревательные приборы.</li>
						<li>Напоминаем Вам, что запрещается накрывать включенные торшеры, настольные лампы предметами из горючего материала.</li>
						<li>Курить в здании гостиницы разрешается только в специально отведенных местах.</li>
						<li>Запрещается курить в постели и номере.</li>
						<li>Запрещается хранение в номере взрывопожароопасных веществ и материалов.</li>
					</ul>
					
					<p>Если Вы прибыли в отель в первый раз, постарайтесь хорошо запомнить расположение выходов и лестниц, ознакомьтесь с планом эвакуации и местонахождением первичных средств пожаротушения. Желаем Вам хорошего отдыха.</p>
					
					<p id="section3" class="big-text">В случае пожара в Вашем номере:</p>
										
					<ul>
						<li>Немедленно сообщите о случившемся в пожарную часть по телефону «01» и дежурному администратору по тел.6 1000.</li>
						<li>Если ликвидировать очаг возгорания своими силами не представляется возможным, выйдите из номера и закройте за собой дверь и окна, не запирая их на замок;</li>
						<li>Обязательно сообщите о пожаре дежурному по этажу или другому представителю администрации;</li>
						<li>Покиньте опасную зону и действуйте по указанию администрации или пожарной охраны.</li>
					</ul>
					
					<p id="section4" class="big-text">В случае пожара вне Вашего номера:</p>
					
					<ul>
						<li>Немедленно сообщите о случившемся в пожарную часть по телефону «01» и дежурному администратору;</li>
						<li>Покиньте Ваш номер после того, как закроете окна и двери, выйдите из здания, используя эвакуационные выходы;</li>
						<li>Если коридоры и лестничные клетки сильно задымлены и покинуть помещение не представляется возможным, необходимо оставаться в номере, открыв настежь окна. Закрытая и хорошо уплотненная дверь может надолго защитить Вас от опасной температуры. Чтобы избежать отравления дымом, закройте щели и вентиляционные отверстия смоченными водой полотенцами и постельными принадлежностями;</li>
						<li>Постарайтесь сообщить по телефону администрации о своем местонахождении;</li>
						<li>С прибытием к месту происшествия пожарной команды выйдите на лоджию и подайте знак об оказании помощи.</li>
						<li>Переждать пожар можно на лоджии, при этом необходимо закрыть за собой балконную дверь.</li>
					</ul>
					
					<p class="big-text">С уважением, Администрация бизнес отеля «КОНТИНЕНТ».</p>
				</div>
			</div>
			<div class="page-rules-right">
				<div class="rules-menu">
					<ul>
						<li><a href="#section1">Порядок проживания и оплаты услуг</a></li>
						<li><a href="#section2">Что запрещается в отеле</a></li>
						<li><a href="#section3">Дополнительная информация</a></li>
						<li><a href="#section4">О правилах пожарной безопасности</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="content"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>