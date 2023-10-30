<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="wrapper-content">
    <div class="wrapper-inside">
        <div class="detail-page-text">
            <div class="detail-page-text-title">The room rate includes:</div>
            <div class="detail-page-text-content">
                <div class="detail-page-text-content-left">
                    <? if ($arResult["PROPERTIES"]["TARIFS"]["VALUE"] != ""): ?>
                        <div class="detail-page-text-item item-tafirs">
                            <div class="detail-page-text-item-title">Rates</div>
                            <div class="detail-page-text-item-list">
                                <? foreach ($arResult["PROPERTIES"]["TARIFS"]["VALUE"] as $key => $value): ?>
                                    <div class="detail-page-text-item-list-item">
                                        <span class="title"><?= $value ?></span>
                                        <span class="text"><?= $arResult["PROPERTIES"]["TARIFS"]["DESCRIPTION"][$key] ?></span>
                                    </div>
                                <? endforeach; ?>
                            </div>
                        </div>
                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["ZAEZD_RASCHETNIY_CHAS"]["VALUE"] != ""): ?>
                        <div class="detail-page-text-item item-zaezd">
                            <div class="detail-page-text-item-title">Check-in</div>
                            <div class="detail-page-text-item-list">
                                <p><b>Check-out time</b>
                                    - <?= $arResult["PROPERTIES"]["ZAEZD_RASCHETNIY_CHAS"]["VALUE"] ?></p>
                                <p><b>When extending stay:</b>
                                    - <?= $arResult["PROPERTIES"]["ZAEZD_PRI_PRODLENII"]["VALUE"] ?></p>
                                <p><b>Early check-in</b> - <?= $arResult["PROPERTIES"]["ZAEZD_RANNIY"]["VALUE"] ?></p>
                            </div>
                        </div>
                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["ANNYLATION"]["VALUE"]["TEXT"] != ""): ?>
                        <div class="detail-page-text-item item-annylirovanie">
                            <div class="detail-page-text-item-title">Cancellation of booking</div>
                            <div class="detail-page-text-item-list">
                                <p><?= htmlspecialchars_decode($arResult["PROPERTIES"]["ANNYLATION"]["VALUE"]["TEXT"]) ?></p>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
                <div class="detail-page-text-content-right">
                    <? if ($arResult["PROPERTIES"]["DOP_MESTA"]["VALUE"]["TEXT"] != ""): ?>
                        <div class="detail-page-text-item item-dopmesta">
                            <div class="detail-page-text-item-title">Extra beds</div>
                            <div class="detail-page-text-item-list">
                                <?= htmlspecialchars_decode($arResult["PROPERTIES"]["DOP_MESTA"]["VALUE"]["TEXT"]) ?>
                            </div>
                        </div>
                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["CHILDREN"]["VALUE"]["TEXT"] != ""): ?>
                        <div class="detail-page-text-item item-deti">
                            <div class="detail-page-text-item-title">Special accommodations for children</div>
                            <div class="detail-page-text-item-list">
                                <?= htmlspecialchars_decode($arResult["PROPERTIES"]["CHILDREN"]["VALUE"]["TEXT"]) ?>
                            </div>
                        </div>
                    <? endif; ?>
                    <? if ($arResult["PROPERTIES"]["LGOTNIKI"]["VALUE"]["TEXT"] != ""): ?>
                        <div class="detail-page-text-item item-lgotniki">
                            <div class="detail-page-text-item-title">Special conditions for accommodation of the
                                privileged category of citizens
                            </div>
                            <div class="detail-page-text-item-list">
                                <p><?= htmlspecialchars_decode($arResult["PROPERTIES"]["LGOTNIKI"]["VALUE"]["TEXT"]) ?></p>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>