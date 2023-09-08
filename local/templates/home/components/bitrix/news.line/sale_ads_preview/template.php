<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<? foreach ($arResult["ITEMS"] as $arItem) : ?>
    <div class="col-md-6 col-lg-4 mb-4">
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="prop-entry d-block">
                <figure>
                    <img src="<?= $arItem["PREVIEW_PICTURE"]["SAFE_SRC"] ?>" alt="Image" class="img-fluid">
                </figure>
                <div class="prop-text">
                    <div class="inner">
                        <span class="price rounded">$ <?= $arItem['PROPERTY_PRICE_VALUE'] ?></span>
                        <h3 class="title"><?= $arItem["NAME"] ?></h3>
                        <p class="location"><?= $arItem["PREVIEW_TEXT"] ?></p>
                    </div>
                    <div class="prop-more-info">
                        <div class="inner d-flex">
                            <div class="col">
                                <span><?= GetMessage('AREA') ?></span>
                                <strong><?= $arItem['PROPERTY_AREA_VALUE'] ?> м<sup>2</sup></strong>
                            </div>
                            <div class="col">
                                <span><?= GetMessage('FLOORS_QTY') ?></span>
                                <strong><?= $arItem['PROPERTY_FLOORS_QTY_VALUE'] ?></strong>
                            </div>
                            <div class="col">
                                <span><?= GetMessage('WC_QTY') ?></span>
                                <strong><?= $arItem['PROPERTY_WC_QTY_VALUE'] ?></strong>
                            </div>
                            <div class="col">
                                <span><?= GetMessage('GARAGE') ?></span>
                                <strong><?= $arItem['PROPERTY_HAS_GARAGE_VALUE'] ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
<? endforeach; ?>
