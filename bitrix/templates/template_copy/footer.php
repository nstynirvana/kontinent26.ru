<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
	
	
	</div><!-- .wrapper -->
	
	<footer class="footer">
		
		<div class="wrapper-inside">

			<div class="footer-mobile-not lg-view md-view">

				<div class="footer-logo md-view">
					<?include($_SERVER['DOCUMENT_ROOT']."/include/template/footer-logo-en.php");?>
				</div>

				<div class="footer-item item1">
					<div class="footer-logo lg-view">
						<?include($_SERVER['DOCUMENT_ROOT']."/include/template/footer-logo-en.php");?>
					</div>
					<div class="footer-copyright lg-view">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-copy.php"),Array(),Array("MODE"=>"php"));?>
					</div>
					<div class="politica lg-view">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/politica-link-en.php"),Array(),Array("MODE"=>"php"));?>
					</div>		
				</div>
				<div class="footer-item item2">
					<div class="menu-footer">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-menu-rooms-en.php"),Array(),Array("MODE"=>"php"));?>
					</div>
				</div>
				<div class="footer-item item3">
					<div class="menu-footer">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-menu-about-en.php"),Array(),Array("MODE"=>"php"));?>
					</div>
				</div>
				<div class="footer-item item4">
					<div class="footer-item-list-link">
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-phone.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-address-en.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-email.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-skype.php"),Array(),Array("MODE"=>"php"));?>
						</div>
					</div>
					<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/dapsite.php"),Array(),Array("MODE"=>"php"));?>
					<?/*
					<div class="dapsite lg-view">
						Разработка сайта — <a href="#">SM-Marketing</a>
					</div>
					*/?>
				</div>

				<div class="footer-item-mobile md-view">
					<div class="footer-item-copyright">
						<div class="footer-copyright">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-copy.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="politica">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/politica-link-en.php"),Array(),Array("MODE"=>"php"));?>
						</div>	
					</div>
					<div class="footer-item-site">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/dapsite.php"),Array(),Array("MODE"=>"php"));?>
					</div>
				</div>

			</div>

			<div class="footer-mobile xs-view">
				
				<div class="footer-logo">
					<?include($_SERVER['DOCUMENT_ROOT']."/include/template/footer-logo-en.php");?>
				</div>

				<div class="footer-mobile">
					<div class="footer-item-list-link">
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-phone.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-address.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-email.php"),Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="footer-item-link">
							<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-link-skype.php"),Array(),Array("MODE"=>"php"));?>
						</div>
					</div>
				</div>

				<div class="footer-item item3">
					<div class="menu-footer">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-menu-about-en.php"),Array(),Array("MODE"=>"php"));?>
					</div>
				</div>

				<div class="footer-item item1">
					<div class="footer-copyright">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/footer-copy.php"),Array(),Array("MODE"=>"php"));?>
					</div>
					<div class="politica">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/politica-link-en.php"),Array(),Array("MODE"=>"php"));?>
					</div>		
					<div class="footer-item-site">
						<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/area/dapsite.php"),Array(),Array("MODE"=>"php"));?>
					</div>
				</div>

			</div>

		</div>

	</footer><!-- .footer -->

	<div style="display: none;">
		<div id="konferencForm" class="form-pop-up">
			<div class="header-line-form">
				<div class="header-line-form-container">
					<div class="header-line-form-title">Hall Reservations</div>
					<div class="header-line-form-text">You can book the hall by calling <a href="tel:+78652947575">+7(8652)94-75-75</a> or filling out the form:</div>
					<div class="header-line-form-body">
						<form action="" method="" class="reservation-form ajax-form-send">
							<div class="bronirovanie-items-fields">
								<div class="bronirovanie-item">
									<input type="text" class="" name="user-name" placeholder="Name" />
								</div>
								<div class="bronirovanie-item">
									<input type="text" class="phoneNumber" name="user-phone" placeholder="Phone" />
								</div>
								<div class="bronirovanie-item">
									<input type="text" class="konferencZalSelected" name="user-zal" placeholder="Выбранный конференц зал" />
								</div>
							</div>
							<div class="bronirovanie-item bronirovanie-item-btn">
								<button type="submit" class="btn btn-gray">Booking</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="successSended" class="form-pop-up">
			<div class="header-line-form">
				<div class="header-line-form-container">
					<div class="header-line-form-title">Thank you! Our manager will contact you shortly</div>
					<div class="btn btn-gray closePopUp">OK</div>
				</div>
			</div>
		</div>
	</div>

	</body>
</html>