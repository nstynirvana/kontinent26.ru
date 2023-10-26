<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="konferenc-list-page">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<div class="konferenc-list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			
			<div class="konferenc-list-item-pic">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>340, 'height'=>240), BX_RESIZE_IMAGE_EXACT, true);?>
					<img src="<?=$file["src"]?>" />
				</a>
			</div>
			
			<div class="konferenc-list-item-content">
				<div class="konferenc-list-item-name">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
				</div>
				<div class="konferenc-list-item-price">
					<div class="main-nomera-slider-price">
						<span class="price"><?=number_format($arItem["PROPERTIES"]["PRICE"]["VALUE"], 0, '.', ' ')?></span>
						<span class="icon icon-rub"></span>
						<span class="price-correct">/ час</span>
					</div>
				</div>
				<div class="konferenc-list-item-content-text">
					<div class="konferenc-list-item-desc">
						<?if($arItem["PROPERTIES"]["PLOSHAD"]["VALUE"] != ""):?>
							<div class="konferenc-list-item-desc-item">
								<span class="name">Площадь:</span>
								<span class="value"><?=$arItem["PROPERTIES"]["PLOSHAD"]["VALUE"]?></span>
							</div>
						<?endif;?>
						<?if($arItem["PROPERTIES"]["PEOPLES"]["VALUE"] != ""):?>
							<div class="konferenc-list-item-desc-item">
								<span class="name">Кол-во человек:</span>
								<span class="value"><?=$arItem["PROPERTIES"]["PEOPLES"]["VALUE"]?></span>
							</div>
						<?endif;?>
						<?if($arItem["PROPERTIES"]["RASSADKA"]["VALUE"] != ""):?>
							<div class="konferenc-list-item-desc-item">
								<span class="name">Рассадка:</span>
								<span class="value"><?=$arItem["PROPERTIES"]["RASSADKA"]["VALUE"]?></span>
							</div>
						<?endif;?>
					</div>
					<?if($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] != ""):?>
						<div class="konferenc-list-item-discount">
							<?foreach($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] as $discountItem):?>
								<div class="konferenc-list-item-discount-item"><?=$discountItem?></div>
							<?endforeach;?>
						</div>
					<?endif;?>
				</div>
			</div>
			
			<div class="konferenc-list-item-btn">
				<a href="#" class="btn btn-gray openForm konferencZalOpenForm" data-formopen="konferencForm" tabindex="0" data-zalname="<?=$arItem["NAME"]?>">Забронировать</a>
			</div>
			
		</div>	
		
	<?endforeach;?>
</section>