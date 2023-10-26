<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="nomera-container-bottom" style="display: none;">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="nomera-container-bottom-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?/*<a href="/reservation/?room-type=<?=$arItem["PROPERTIES"]["TRAVELLINE_ID"]["VALUE"]?>">*/?>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<span class="name-big <?if($arItem["PROPERTIES"]["KING"]["VALUE"] == "Y"):?>premier<?endif;?>"><?=$arItem["PROPERTIES"]["SHORT_NAME"]["VALUE"]?></span>
				<?if($arItem["PROPERTIES"]["COUNTS"]["VALUE"] != ""):?><span class="name-small"><?=$arItem["PROPERTIES"]["COUNTS"]["VALUE"]?></span><?endif;?>
				<span class="price"><?=number_format($arItem["PROPERTIES"]["SLIDER_PRICE"]["VALUE"], 0, '.', '')?> <span class="icon icon-rub"></span></span>
				<?if($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] == "Y"):?>
				<span class="persent">
					<span class="persent-container">
						<span class="persent-minus">-</span>
						<span class="persent-number"><?=$arItem["PROPERTIES"]["DISCOUNT_SIZE"]["VALUE"]?></span>
						<span class="persent-icon">%</span>
					</span>
				</span>
				<?endif;?>
			</a>
		</div>
	<?endforeach;?>
</div>