<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="main-service-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="main-service-list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="main-service-item-name"><a href="/services/"><?=$arItem["NAME"]?></a></div>
			<div class="main-service-item-pic">
				<?$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>330, 'height'=>233), BX_RESIZE_IMAGE_EXACT, true);?>
				<a href="/services/"><img src="<?=$file["src"]?>" alt="" title="" /></a>
			</div>
			<div class="main-service-item-desc"><?=$arItem["PREVIEW_TEXT"]?></div>
		</div>
	<?endforeach;?>
</div>