<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="reviews-page-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
	
		<div class="reviews-page-list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="reviews-item-text">
				<table>
					<tr>
						<td>
							<?=htmlspecialchars_decode($arItem["PREVIEW_TEXT"]);?>
						</td>
					</tr>
				</table>
			</div>
			
			<div class="reviews-item-piccontainer">
				<table>
					<tr>
						<td>
							<div class="reviews-item-pic">
								<?$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width'=>92, 'height'=>92), BX_RESIZE_IMAGE_EXACT, true);?>
								<img src="<?=$file["src"]?>" />
							</div>
							<div class="reviews-item-pic-name">
								<?=$arItem["NAME"]?>
							</div>
						</td>
					</tr>
				</table>
			</div>
			
		</div>
	
	<?endforeach;?>
</div>