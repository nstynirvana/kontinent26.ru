<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<ul>
	<li><a href="/services/"<?if($arParams["CURRENT_SECTION"] == ""):?> class="active"<?endif;?>>Все услуги</a></li>
<?foreach($arResult["SECTIONS"] as $arSection):?>
	<li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"<?if($arParams["CURRENT_SECTION"] == $arSection["CODE"]):?> class="active"<?endif;?>><?=$arSection["NAME"]?></a></li>
<?endforeach;?>
</ul>