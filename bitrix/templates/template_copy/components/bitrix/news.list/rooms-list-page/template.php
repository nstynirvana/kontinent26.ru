<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<section class="rooms-list-page">
	<?$x = 0;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<div class="rooms-list-item<?if($x == 0):?> left-side-pic<?elseif($x == 1):?> right-side-pic<?endif;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			
			<div class="rooms-list-item-pic">
				<div class="rooms-list-item-pic-slider">
					<?foreach($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $photoItem):?>
						<?$arFile = CFile::GetFileArray($photoItem);?>
						<?$file = CFile::ResizeImageGet($photoItem, array('width'=>746, 'height'=>496), BX_RESIZE_IMAGE_EXACT, true);?>
						<div class="rooms-item-pic-slider-item">
							<a href="<?=$arFile["SRC"]?>" class="fancybox"><img src="<?=$file["src"]?>"></a>
						</div>
					<?endforeach;?>
				</div>
			</div>
			
			<div class="rooms-list-item-text">
				<table>
					<tr>
						<td>
							<div class="rooms-list-item-title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PROPERTIES"]["SHORT_NAME"]["VALUE"]?></a></div>
							<div class="rooms-list-item-title2"><?=$arItem["PROPERTIES"]["COUNTS"]["VALUE"]?></div>
							<div class="rooms-list-price">
								<div class="main-nomera-slider-price">
									<span class="price"><?=number_format($arItem["PROPERTIES"]["SLIDER_PRICE"]["VALUE"], 0, '.', '')?></span>
									<span class="icon icon-rub"></span>
								</div>
							</div>
							<div class="rooms-list-text">
								<p><?=$arItem["PREVIEW_TEXT"]?></p>
							</div>
							<div class="main-nomera-slider-cases">
								<div class="case-list">
									<?foreach($arItem["PROPERTIES"]["PLUSES_LIST"]["VALUE"] as $plusItem):?>
										<div class="case-item"><?=$plusItem?></div>
									<?endforeach;?>
								</div>
							</div>
							<div class="main-nomera-slider-btn">
								<a href="/en/reservation/?room-type=<?=$arItem["PROPERTIES"]["TRAVELLINE_ID"]["VALUE"]?>" class="btn btn-gray" tabindex="0">Booking</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
		
		</div>	
		
		<?$x++;?>
		<?if($x == 2):?>
			<?$x = 0;?>
		<?endif;?>
	
	<?endforeach;?>
	<?/*
	<div class="rooms-list-item left-side-pic">
		<div class="rooms-list-item-pic">
			<div class="rooms-list-item-pic-slider">
				<div class="rooms-item-pic-slider-item">
					<a href=""><img src="/design/img/image_24.png"></a>
				</div>
				<div class="rooms-item-pic-slider-item">
					<a href=""><img src="/design/img/image_24.png"></a>
				</div>
				<div class="rooms-item-pic-slider-item">
					<a href=""><img src="/design/img/image_24.png"></a>
				</div>
			</div>
		</div>
		<div class="rooms-list-item-text">
			<table>
				<tr>
					<td>
						<div class="rooms-list-item-title">Стандарт</div>
							<div class="rooms-list-item-title2">одноместный</div>
							<div class="rooms-list-price">
								<div class="main-nomera-slider-price">
									<span class="price">2 900</span>
									<span class="icon icon-rub"></span>
								</div>
							</div>
							<div class="rooms-list-text">
								<p>Светлый, уютный номер площадью 15 кв. м. имеет все необходимое для работы и отдыха</p>
							</div>
							<div class="main-nomera-slider-cases">
								<div class="case-list">
									<div class="case-item">WI FI</div>
									<div class="case-item">Письменный стол</div>
									<div class="case-item">Санузел</div>
									<div class="case-item">Банные принадлежности</div>
									<div class="case-item">Завтрак включен</div>
								</div>
							</div>
							<div class="main-nomera-slider-btn">
								<a href="#" class="btn btn-gray" tabindex="0">Забронировать</a>
							</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="rooms-list-item right-side-pic">
		<div class="rooms-list-item-pic">
			<div class="rooms-list-item-pic-slider">
				<div class="rooms-item-pic-slider-item">
					<a href=""><img src="/design/img/image_24.png"></a>
				</div>
				<div class="rooms-item-pic-slider-item">
					<a href=""><img src="/design/img/image_24.png"></a>
				</div>
				<div class="rooms-item-pic-slider-item">
					<a href=""><img src="/design/img/image_24.png"></a>
				</div>
			</div>
		</div>
		<div class="rooms-list-item-text">
			<table>
				<tr>
					<td>
						<div class="rooms-list-item-title">Стандарт</div>
							<div class="rooms-list-item-title2">одноместный</div>
							<div class="rooms-list-price">
								<div class="main-nomera-slider-price">
									<span class="price">2 900</span>
									<span class="icon icon-rub"></span>
								</div>
							</div>
							<div class="rooms-list-text">
								<p>Светлый, уютный номер площадью 15 кв. м. имеет все необходимое для работы и отдыха</p>
							</div>
							<div class="main-nomera-slider-cases">
								<div class="case-list">
									<div class="case-item">WI FI</div>
									<div class="case-item">Письменный стол</div>
									<div class="case-item">Санузел</div>
									<div class="case-item">Банные принадлежности</div>
									<div class="case-item">Завтрак включен</div>
								</div>
							</div>
							<div class="main-nomera-slider-btn">
								<a href="#" class="btn btn-gray" tabindex="0">Забронировать</a>
							</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	*/?>
</section>