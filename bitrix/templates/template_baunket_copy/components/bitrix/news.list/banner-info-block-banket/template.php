<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?/*echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";*/?>
<div class="banner-info-block-wrapper">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="banner-info-block-item">
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="banner-info-block-item-img">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
		</div>
		<div class="banner-info-block-item-text">
			<?=$arItem["PREVIEW_TEXT"]?>
		</div>
	</div>
	<?endforeach;?>
</div>