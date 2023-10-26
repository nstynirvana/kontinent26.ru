<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="page-action-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="action-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="action-item-pic">
				<?$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>365, 'height'=>320), BX_RESIZE_IMAGE_EXACT, true);?>
				<a><img src="<?=$file["src"]?>"></a>
				<?if($arItem["PROPERTIES"]["DOP_TEXT"]["VALUE"] == "Y"):?>
					<div class="action-item-persent">
						<?if($arItem["PROPERTIES"]["DOP_TEXT"]["VALUE"] == "Y"):?>
							<span class="persent-number"><?=$arItem["PROPERTIES"]["DOP_TEXT"]["VALUE"]?></span>
						<?endif;?>
						<?if($arItem["PROPERTIES"]["SHOW_PERCENT"]["VALUE"] == "Y"):?>
							<span class="persent-icon">%</span>
						<?endif;?>
					</div>
				<?endif;?>
			</div>
			<div class="action-item-text">
				<div class="action-item-name"><a><?=$arItem["NAME"]?></a></div>
				<div class="action-item-desc">
					<p><?=$arItem["PREVIEW_TEXT"]?></p>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>