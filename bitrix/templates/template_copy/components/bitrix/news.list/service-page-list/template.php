<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="service-page-list">
	<?$x = 0;?>
	<?$y = 0;?>
	<?$counter = count($arResult["ITEMS"]);?>
	<?$inLine = ceil($counter/3);?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?if($x == 0):?>
			<div class="service-page-list-container">
		<?endif;?>
		
			<div class="service-page-list-item">
				<div class="service-page-list-item-pic">
					<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>340, 'height'=>320), BX_RESIZE_IMAGE_EXACT, true);?>
					<img src="<?=$file["src"]?>" />
				</div>	
				<div class="service-page-list-item-name"><?=$arItem["NAME"]?></div>	
				<div class="service-page-list-item-desc">
					<?=htmlspecialchars_decode($arItem["PREVIEW_TEXT"]);?>
				</div>
			</div>
		
			<?$x++;?>
			<?$y++;?>
			
		<?if($x == $inLine or $y == $counter):?>
			<?$x = 0;?>
			</div>
		<?endif;?>
		
	<?endforeach;?>
</div>