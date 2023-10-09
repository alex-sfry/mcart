<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?
// echo '<pre>';
// var_dump($arResult);
// echo '<pre>';
?>

<? if (!empty($arResult)) : ?>
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
                        
                        <? $previousLevel = 0;

                        foreach ($arResult as $arItem) : ?>
                            <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) : ?>
                                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                            <? endif ?>

                            <?
                            $color_cls = null;
                            if ($arItem['PARAMS']['COLOR']) {
                                $color_cls =  $arItem['PARAMS']['COLOR'] != '' ? 'color-' . $arItem['PARAMS']['COLOR'] : null;
                            }                           
                            ?>

                            <? if ($arItem["IS_PARENT"]) : ?>
                                <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>
                                    <li><a href="<?= $arItem["LINK"] ?>" class="<?= $color_cls ?>"><?= $arItem["TEXT"] ?></a>
                                        <ul>
                                <? else : ?>
                                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                                        <ul>
                                <? endif ?>

                                <? if ($arItem['PARAMS']['DESCRIPTION']) : ?>
                                    <div class="menu-text"><?= $arItem['PARAMS']['DESCRIPTION'] ?></div>
                                <? endif ?>

                            <? else : ?>
                                <?if ($arItem["PERMISSION"] > "D"):?>

                                    <? if ($arItem["DEPTH_LEVEL"] == 1) : ?>

                                        <li class="<? if ($arItem["TEXT"] == 'Главная') : ?>main-page <?= $color_cls ?><? endif ?>"><a href="<?= $arItem["LINK"] ?>" class="<?= $color_cls ?>"><?= $arItem["TEXT"] ?></a></li>
                                    <? else : ?>
                                        <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                                        </li>
                                    <? endif ?>

                                <?endif?>

                            <? endif ?>

                            <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                        <? endforeach ?>

                        <? if ($previousLevel > 1) : //close last item tags
                        ?>
                            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                        <? endif ?>

                    
                    

                    </ul>
                </div>
            </div>
        </div>
    </nav>
<? endif ?>