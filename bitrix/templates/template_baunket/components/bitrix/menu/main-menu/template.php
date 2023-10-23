<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
$arrKonferenc = array(); 
CModule::IncludeModule("iblock");
$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL", "IBLOCK_ID", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>4, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$arProps = $ob->GetProperties();

	$arrKonferenc[$arFields["ID"]]["FIELDS"] = $arFields;
	$arrKonferenc[$arFields["ID"]]["PROPS"] = $arProps;

}

$arrNomera = array(); 
CModule::IncludeModule("iblock");
$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL", "IBLOCK_ID", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>1, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
	$arFields = $ob->GetFields();
	$arProps = $ob->GetProperties();

	$arrNomera[$arFields["ID"]]["FIELDS"] = $arFields;
	$arrNomera[$arFields["ID"]]["PROPS"] = $arProps;

}
if($USER->IsAdmin()){
	//echo "<pre>"; print_r($arrNomera); echo "</pre>";
}
?>


<?if (!empty($arResult)):?>
<ul>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li <?if($arItem["TEXT"] == "Номера"):?>class="parent"<?endif;?><?if($arItem["TEXT"] == "Конференц залы"):?>class="parent"<?endif;?>><a href="<?=$arItem["LINK"]?>" class="active <?if($arItem["TEXT"] == "Номера"):?>parent<?endif;?> <?if($arItem["TEXT"] == "Конференц залы"):?>parent<?endif;?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li <?if($arItem["TEXT"] == "Номера"):?>class="parent"<?endif;?><?if($arItem["TEXT"] == "Конференц залы"):?>class="parent"<?endif;?>>
			<a href="<?=$arItem["LINK"]?>" <?if($arItem["TEXT"] == "Номера"):?>class="parent"<?endif;?><?if($arItem["TEXT"] == "Конференц залы"):?>class="parent"<?endif;?>><?=$arItem["TEXT"]?></a>
			<?if($arItem["TEXT"] == "Номера"):?>
				<div class="drop-down-menu">
					<ul class="hidden-main-menu">	
						<?foreach($arrNomera as $nomerOne):?>
						<li>
							<a href="<?=$nomerOne["FIELDS"]["DETAIL_PAGE_URL"]?>">		
								<div class="nomerNameContainer">
									<div class="nomerBaseName"><?=$nomerOne["PROPS"]["SHORT_NAME"]["VALUE"]?><?if($nomerOne["PROPS"]["KING"]["VALUE"] == "Y"):?><span class="king-icon"><?endif;?></div>
									<div class="nomerBaseDesc"><?=$nomerOne["PROPS"]["COUNTS"]["VALUE"]?></div>
								</div>
								<div class="nomerPriceContainer">
									<div class="discountBlock"><?if($nomerOne["PROPS"]["DISCOUNT"]["VALUE"] == "Y"):?><span class="discount-summ">-<?=$nomerOne["PROPS"]["DISCOUNT_SIZE"]["VALUE"]?>%</span><?endif;?></div>
									<div class="priceBlock">
										<?if($nomerOne["PROPS"]["DISCOUNT"]["VALUE"] == "Y"):?>
											<div class="basePrice">
												<span class="old-price"><?=$nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]?> ₽</span>
												<?$newPrice = ceil($nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]-($nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]/100*$nomerOne["PROPS"]["DISCOUNT_SIZE"]["VALUE"]))?>										
												<span class="price"><?=$newPrice?> ₽</span>
											</div>
	
										<?else:?>
											<div class="basePrice">
												<span class="price"><?=$nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]?> ₽</span>
											</div>
										<?endif;?>
									</div>
								</div>
							</a>
						</li>
						<?endforeach;?>
					</ul>
				</div>
			<?elseif($arItem["TEXT"] == "Конференц залы"):?>
				<div class="drop-down-menu">
					<ul class="hidden-main-menu">	
						<?foreach($arrKonferenc as $nomerOne):?>
						<li>
							<a href="<?=$nomerOne["FIELDS"]["DETAIL_PAGE_URL"]?>">		
								<div class="nomerNameContainer konferenc">
									<div class="nomerBaseName"><?=$nomerOne["FIELDS"]["NAME"]?></div>
									<div class="nomerBaseDesc"><?=$nomerOne["PROPS"]["PEOPLES"]["VALUE"]?></div>
								</div>
								<div class="nomerPriceContainer konferenc">
									<div class="discountBlock"><?if($nomerOne["PROPS"]["DISCOUNT"]["VALUE"] == "Y"):?><span class="discount-summ">-<?=$nomerOne["PROPS"]["DISCOUNT_SIZE"]["VALUE"]?>%</span><?endif;?></div>
									<div class="priceBlock">
										<?if($nomerOne["PROPS"]["DISCOUNT"]["VALUE"] == "Y"):?>
											<div class="basePrice">
												<span class="old-price"><?=$nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]?> ₽</span>
												<?$newPrice = ceil($nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]-($nomerOne["PROPS"]["SLIDER_PRICE"]["VALUE"]/100*$nomerOne["PROPS"]["DISCOUNT_SIZE"]["VALUE"]))?>										
												<span class="price"><?=$newPrice?> ₽</span>
											</div>
	
										<?else:?>
											<div class="basePrice">
												<span class="price"><?=$nomerOne["PROPS"]["PRICE"]["VALUE"]?> ₽/час</span>
											</div>
										<?endif;?>
									</div>
								</div>
							</a>
						</li>
						<?endforeach;?>
					</ul>
				</div>
			<?endif;?>
		</li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>