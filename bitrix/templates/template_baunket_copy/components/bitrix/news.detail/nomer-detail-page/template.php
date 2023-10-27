<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="detail-nomer-slider">
	<?foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $photoItem):?>
		<?$file = CFile::ResizeImageGet($photoItem, array('width'=>1920, 'height'=>915), BX_RESIZE_IMAGE_EXACT, true);?>
		<div class="detail-nomer-slider-item">
			<img src="<?=$file["src"]?>" />
		</div>
	<?endforeach;?>
</div>

<div class="detail-nomer-content">
	<div class="breadcrumbs">
		<ul>
			<li><a href="/en/">Main page</a></li>
			<li><a href="/en/rooms/">All rooms</a></li>
		</ul>
	</div>
	
	<div class="rooms-list-item-title"><?=$arResult["PROPERTIES"]["SHORT_NAME"]["VALUE"]?></div>
	<div class="rooms-list-item-title2"><?=$arResult["PROPERTIES"]["COUNTS"]["VALUE"]?></div>
	
	<div class="rooms-list-price">
		<div class="main-nomera-slider-price">
			<span class="price"><?=number_format($arResult["PROPERTIES"]["SLIDER_PRICE"]["VALUE"], 0, '.', '')?></span>
			<span class="icon icon-rub white"></span>
		</div>
	</div>
	<div class="rooms-list-text">
		<p><?=$arResult["PREVIEW_TEXT"]?></p>
	</div>
	<div class="main-nomera-slider-cases">
		<div class="case-list">
			<?foreach($arResult["PROPERTIES"]["PLUSES_LIST"]["VALUE"] as $plusItem):?>
				<div class="case-item"><?=$plusItem?></div>
			<?endforeach;?>
		</div>
	</div>
	<div class="main-nomera-slider-btn">
		<a href="/reservation/?room-type=<?=$arResult["PROPERTIES"]["TRAVELLINE_ID"]["VALUE"]?>" class="btn btn-gray" tabindex="0">Booking</a>
		<?/*
		<a href="/reservation/?room-type=<?=$arResult["PROPERTIES"]["TRAVELLINE_ID"]["VALUE"]?>" class="btn btn-white" tabindex="0">Быстрая бронь</a>
		*/?>
	</div>
	
</div>

<div class="detail-nomer-slider-after">
	<?foreach($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $photoItem):?>
		<div class="detail-nomer-slider-after-item">
			<?$file = CFile::ResizeImageGet($photoItem, array('width'=>48, 'height'=>48), BX_RESIZE_IMAGE_EXACT, true);?>
			<img src="<?=$file["src"]?>">
		</div>
	<?endforeach;?>
	<div class="detail-nomer-slider-after-item">
		<a class="panorama-link" href="<?=$arResult["PROPERTIES"]["PANORAMA"]["VALUE"]?>" target="_blank">
			<span class="big-name">3D</span>
			<span class="little-name">tour</span>
		</a>
	</div>
</div>

