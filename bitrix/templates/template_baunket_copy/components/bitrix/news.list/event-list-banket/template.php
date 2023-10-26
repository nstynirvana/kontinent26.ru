<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?//echo "<pre>"; print_r($arResult["ITEMS"]); echo "</pre>";?>
<div class="halls-wrapper">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="halls-item">
			<div class="halls-item-img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
				<a href="#" class="halls-item-plus">+</a>
			</div>
			<div class="halls-item-text">
				<div class="halls-item-text-title">
					<?=$arItem["PREVIEW_TEXT"]?>
				</div>
				<div class="halls-item-text-numbers">
					<div class="halls-item-text-numbers-left">
						<p>
							<?=$arItem["PROPERTIES"]['QUANTITY']['VALUE']?>
							<svg xmlns="http://www.w3.org/2000/svg" width="11" height="16" viewBox="0 0 11 16" fill="none">
								<circle cx="5.5" cy="3.54932" r="3.5" fill="#C7A462"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 12C0.734463 9.71025 2.91913 8.04932 5.49998 8.04932C8.08083 8.04932 10.2655 9.71025 11 12C10.2655 14.2898 8.08083 15.9507 5.49998 15.9507C2.91913 15.9507 0.734463 14.2898 0 12Z" fill="#C7A462"/>
							</svg>
						</p>
					</div>
					<div class="halls-item-text-numbers-bord">
					</div>
					<div class="halls-item-text-numbers-right">
						<p>
						<?=$arItem["PROPERTIES"]['SQUARE']['VALUE']?>
						</p>
						м²
					</div>
				</div>
				<div class="halls-item-text-descr">
					<?=$arItem["PROPERTIES"]['DESCRIPTION']['VALUE']?>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>