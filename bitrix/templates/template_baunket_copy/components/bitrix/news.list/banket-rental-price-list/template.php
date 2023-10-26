<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
<div class="price-list-wrapper">  
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="price-list-item">
			<div class="price-list-item-descr">
				<?=$arItem["PROPERTIES"]['TITLE']['VALUE']?>
			</div>
			<div class="price-list-item-price">
				<?=$arItem["PREVIEW_TEXT"]?>
			</div>
		</div>
    <?endforeach;?>
</div>