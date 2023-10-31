<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>	
<div class="information-header-slider-container">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="information-header-slider-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="information-header-title"><?=$arItem["NAME"]?></div>
			<div class="information-header-text">
				<?echo $arItem["PREVIEW_TEXT"];?>
			</div>
			<?/*
			<div class="information-header-link">
				<a href="#">Подробнее <span class="icon icon-arrow-white"></span></a>
			</div>
			*/?>
		</div>
	<?endforeach;?>
</div>
<div class="renovation-icon renovation-icon_en">
	<img src="/design/img/new/renovation-en.png" style="width: 107px;" alt="" title="" />
</div>
