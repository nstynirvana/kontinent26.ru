<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="specials-list-slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<div class="specials-list-slider-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="konference-detail-nomer-slider">
				<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>1920, 'height'=>622), BX_RESIZE_IMAGE_EXACT, true);?>
				<img src="<?=$file["src"]?>" alt="" title="" />
			</div>
			<div class="detail-nomer-content konference">
				<div class="breadcrumbs">
					<ul>
						<li><a href="/en/">Main page</a></li>
					</ul>
				</div>
				
				<div class="rooms-list-item-title"><?=$arItem["NAME"]?></div>
				
				<div class="rooms-list-text">
					<p><?=$arItem["PREVIEW_TEXT"]?></p>
				</div>
				<?/*
				<div class="main-nomera-slider-btn">
					<a href="#" class="btn btn-gray" tabindex="0">Подробнее</a>
				</div>
				*/?>
			</div>
		</div>
		
	<?endforeach;?>
</div>


<div class="specials-list-slider-after">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="detail-nomer-slider-after-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>48, 'height'=>48), BX_RESIZE_IMAGE_EXACT, true);?>
			<img src="<?=$file["src"]?>">
		</div>
	<?endforeach;?>
</div>

