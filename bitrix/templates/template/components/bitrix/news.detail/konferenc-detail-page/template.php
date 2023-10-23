<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>


<div class="konference-detail-nomer-slider">
	<?$file = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"], array('width'=>1920, 'height'=>915), BX_RESIZE_IMAGE_EXACT, true);?>
	<img src="<?=$file["src"]?>" />
</div>

<div class="detail-nomer-content konference">
	<div class="breadcrumbs">
		<ul>
			<li><a href="/">Главная</a></li>
			<li><a href="/konferenc-zaly/">Все залы</a></li>
		</ul>
	</div>
	
	<div class="rooms-list-item-title"><?=$arResult["NAME"]?></div>
	
	<div class="rooms-list-price">
		<div class="main-nomera-slider-price">
			<span class="price"><?=number_format($arResult["PROPERTIES"]["PRICE"]["VALUE"], 0, '.', ' ')?></span>
			<span class="icon icon-rub white"></span>
			<span class="price-correct">/ час</span>
		</div>
	</div>
	
	<div class="rooms-list-text">
		
		<div class="konference-props-list">
			<div class="konference-props-list-left">
				<?if($arResult["PROPERTIES"]["PLOSHAD"]["VALUE"] != ""):?>
					<div class="konferenc-list-item-desc-item">
						<span class="name">Площадь:</span>
						<span class="value"><?=$arResult["PROPERTIES"]["PLOSHAD"]["VALUE"]?></span>
					</div>
				<?endif;?>
				<?if($arResult["PROPERTIES"]["PEOPLES"]["VALUE"] != ""):?>
					<div class="konferenc-list-item-desc-item">
						<span class="name">Кол-во человек:</span>
						<span class="value"><?=$arResult["PROPERTIES"]["PEOPLES"]["VALUE"]?></span>
					</div>
				<?endif;?>
				<?if($arResult["PROPERTIES"]["RASSADKA"]["VALUE"] != ""):?>
					<div class="konferenc-list-item-desc-item">
						<span class="name">Рассадка:</span>
						<span class="value"><?=$arResult["PROPERTIES"]["RASSADKA"]["VALUE"]?></span>
					</div>
				<?endif;?>
			</div>
			<div class="konference-props-list-right">
				<div class="konference-props-list-title">Скидки</div>
				<?if($arResult["PROPERTIES"]["DISCOUNT"]["VALUE"] != ""):?>
					<?foreach($arResult["PROPERTIES"]["DISCOUNT"]["VALUE"] as $discountItem):?>
						<div class="konferenc-list-item-discount-item"><?=str_replace(" скидка ", ":  - ", $discountItem)?></div>
					<?endforeach;?>
				<?endif;?>
			</div>
		</div>
		
	</div>
	
	<div class="main-nomera-slider-btn">
		<a href="#" class="btn btn-gray openForm konferencZalOpenForm" data-formopen="konferencForm" tabindex="0" data-zalname="<?=$arResult["NAME"]?>">Забронировать</a>
		<a href="<?=$arResult["PROPERTIES"]["PANORAMA"]["VALUE"]?>" class="btn btn-white eye-icon">Посмотреть в 3D</a>
	</div>
	
</div>
