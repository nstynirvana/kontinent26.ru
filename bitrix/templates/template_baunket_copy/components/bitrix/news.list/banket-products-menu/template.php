<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
<div class="food-slider-banket">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	    <div class="food-slider-banket-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	        <div class="food-slider-banket-slide-item">
	            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" class="food-slider-banket-slide-item-img">
	            <div class="food-slider-banket-slide-item-text">
	                <div class="food-slider-banket-slide-item-text-title"><?=$arItem["PREVIEW_TEXT"]?></div>
	                <?if($arItem["PROPERTIES"]["PRICE"]["VALUE"] != ""):?>
	                	<div class="food-slider-banket-slide-item-text-price"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> <span>₽</span></div>
                	<?endif;?>
	            </div>
	            <?if($arItem["PROPERTIES"]["WEIGHT"]["VALUE"] != ""):?>
	            	<div class="food-slider-banket-slide-item-descr"><?=$arItem["PROPERTIES"]["WEIGHT"]["VALUE"]?></div>
	            <?endif;?>
	            <?if($arItem["PROPERTIES"]["PRICE"]["VALUE"] != ""):?>
	            	<div class="food-slider-banket-slide-item-price"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> <span>₽</span></div>
            	<?endif;?>
	        </div>
	    </div>
    <?endforeach;?>
</div>