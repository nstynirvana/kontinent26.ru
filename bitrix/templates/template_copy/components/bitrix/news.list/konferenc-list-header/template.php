<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="nomera-container-bottom" style="display: none;">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="nomera-container-bottom-item <?if($arParams["ELEMENT_CODE_CUR"] == $arItem["CODE"]):?>active<?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<span class="name-big"><?=$arItem["NAME"]?></span>
				<span class="name-small"><?=$arItem["PROPERTIES"]["PEOPLES"]["VALUE"]?></span>
			</a>
		</div>
	<?endforeach;?>
</div>