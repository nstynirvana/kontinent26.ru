<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="main-nomera-slider">
	<div class="wrapper">
		<div class="main-nomera-slider-container">
			<div class="main-nomera-slider-big">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<?$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1020, 'height'=>600), BX_RESIZE_IMAGE_EXACT, true);?>
					<div class="main-nomera-slider-big-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><img src="<?=$file["src"]?>"></div>
				<?endforeach;?>
			</div>
			<div class="main-nomera-slider-small">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="main-nomera-slider-small-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="main-nomera-slider-small-container">
							<div class="main-nomera-slider-small-container-fon">
								<div class="main-nomera-slider-podtitle-container">
									<div class="main-nomera-slider-podtitle"><?=$arItem["PROPERTIES"]["FOR_WHO"]["VALUE"]?></div>
									<div class="main-nomera-slider-title"><?=$arItem["PROPERTIES"]["SLIDER_NAME"]["VALUE"]?></div>
									<div class="main-nomera-slider-price">
										<span class="price"><?=number_format($arItem["PROPERTIES"]["SLIDER_PRICE"]["VALUE"], 0, '.', '')?></span>
										<span class="icon icon-rub"></span>
									</div>
								</div>
								<div class="main-nomera-slider-text-container">
									<div class="main-nomera-slider-text">
										<?=$arItem["PREVIEW_TEXT"]?>
									</div>
									<?if($arItem["PROPERTIES"]["PLUSES_LIST"]["VALUE"] != ""):?>
										<div class="main-nomera-slider-cases">
											<div class="case-list">
												<?foreach($arItem["PROPERTIES"]["PLUSES_LIST"]["VALUE"] as $plusItem):?>
													<div class="case-item"><?=$plusItem?></div>
												<?endforeach;?>
											</div>
										</div>
									<?endif;?>
									<div class="main-nomera-slider-btn">
										<a href="/reservation/?room-type=<?=$arItem["PROPERTIES"]["TRAVELLINE_ID"]["VALUE"]?>" class="btn btn-gray">Забронировать</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</div>
</section>
