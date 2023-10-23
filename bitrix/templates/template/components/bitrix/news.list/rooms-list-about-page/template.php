<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="nomera-about-page">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="nomera-about-page-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<div class="nomera-about-page-pic">
					<?$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>56, 'height'=>56), BX_RESIZE_IMAGE_EXACT, true);?>
					<img src="<?=$file["src"]?>" />
				</div>
				<div class="nomera-about-page-text">
					<div class="nomera-about-page-text-container">
						<span class="name-big <?if($arItem["PROPERTIES"]["KING"]["VALUE"] == "Y"):?>premier<?endif;?>"><?=$arItem["PROPERTIES"]["SHORT_NAME"]["VALUE"]?></span><br />
						<span class="name-small"><?=$arItem["PROPERTIES"]["COUNTS"]["VALUE"]?></span>
					</div>
					<?if($arItem["PROPERTIES"]["DISCOUNT"]["VALUE"] == "Y"):?>
					<span class="persent">
						<span class="persent-container">
							<span class="persent-minus">-</span>
							<span class="persent-number"><?=$arItem["PROPERTIES"]["DISCOUNT_SIZE"]["VALUE"]?></span>
							<span class="persent-icon">%</span>
						</span>
					</span>
					<?endif;?>
				</div>
			</a>
		</div>
	<?endforeach;?>
</div>