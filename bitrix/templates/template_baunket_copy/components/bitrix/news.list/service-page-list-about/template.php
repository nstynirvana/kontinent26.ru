<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="about-page-service-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
			<div class="service-page-list-item">
				<div class="service-page-list-item-pic">
					<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>120, 'height'=>120), BX_RESIZE_IMAGE_EXACT, true);?>
					<img src="<?=$file["src"]?>" />
				</div>	
				<div class="service-page-list-item-name"><?=$arItem["NAME"]?></div>	
			</div>
		
	<?endforeach;?>
</div>
<div class="about-page-service-list-btn">
	<a class="btn btn-gray-line" href="/services/">Все услуги</a>
</div>