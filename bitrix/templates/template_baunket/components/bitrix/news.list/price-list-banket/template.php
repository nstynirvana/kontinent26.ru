<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?/*echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";*/?>


<div class="price-block-info">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="price-block-info-item">
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="price-block-info-item-title">
			<div class="price-block-info-item-title-text">
				<?=$arItem["PREVIEW_TEXT"]?>
			</div>
		</div>
		<div class="price-block-info-item-descr">
		<?=$arItem["PROPERTIES"]['DESCRIPTION']['VALUE']?>
		</div>
	</div>
	<?endforeach;?>
</div>
