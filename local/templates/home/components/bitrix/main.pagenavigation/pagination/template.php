<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}



/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

?>



<!-- <div class="site-section site-section-sm bg-light">
    <div class="container agents-list"> -->
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="site-pagination">
                    <ul class="page-nav d-flex justify-content-center">
                        <? if ($arResult["CURRENT_PAGE"] > 1) : ?>
                            <li class=""><a href="<?= htmlspecialcharsbx($arResult["URL"]) ?>"><span>1</span></a></li>
                        <? else : ?>
                            <li><span class="active">1</span></li>
                        <? endif ?>

                        <?
                        $page = $arResult["START_PAGE"] + 1;
                        while ($page <= $arResult["END_PAGE"] - 1) :
                        ?>
                            <? if ($page == $arResult["CURRENT_PAGE"]) : ?>
                                <li><span class="active"><?= $page ?></span></li>
                            <? else : ?>
                                <li class=""><a href="<?= htmlspecialcharsbx($component->replaceUrlTemplate($page)) ?>"><span><?= $page ?></span></a></li>
                            <? endif ?>
                            <? $page++ ?>
                        <? endwhile ?>

                        <? if ($arResult["CURRENT_PAGE"] < $arResult["PAGE_COUNT"]) : ?>
                            <? if ($arResult["PAGE_COUNT"] > 1) : ?>
                                <li class=""><a href="<?= htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"])) ?>"><span><?= $arResult["PAGE_COUNT"] ?></span></a></li>
                            <? endif ?>
                        <? else : ?>
                            <? if ($arResult["PAGE_COUNT"] > 1) : ?>
                                <li><span class="active"><?= $arResult["PAGE_COUNT"] ?></span></li>
                            <? endif ?>
                        <? endif ?>

                    </ul>
                    <div style="clear:both"></div>

                </div>
            </div>
        </div>
    <!-- </div>
</div> -->