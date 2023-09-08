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
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    
    <div class="col-md-6 col-lg-4 mb-4">
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a class="service text-center border rounded" href="<?= $arItem["PROPERTY_EXT_URL_VALUE"] ?>">
                <span class="<?= $arItem["PROPERTY_ICON_VALUE"] ?>"></span>               
                <h2 class="service-heading"><?= $arItem["NAME"] ?></h2>
                <p><span class="read-more"><?= GetMessage('MORE_DETAILS') ?></span></p>
            </a>
        </div>
    </div>
<? endforeach; ?>


