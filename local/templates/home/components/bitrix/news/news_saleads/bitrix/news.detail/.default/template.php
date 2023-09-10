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

<?
$gallery_images = $arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"];
$ext_refs = $arResult["DISPLAY_PROPERTIES"]["EXT_REFERENCE"]["VALUE"];
$more_info = $arResult["DISPLAY_PROPERTIES"]["MORE_INFO"];

// echo '<pre>';
// var_dump($more_info);
// echo '</pre>';
?>

<div class="site-blocks-cover overlay" style="background-image: url(<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= GetMessage('DETAILS') ?></span>
                <h1 class="mb-2"><?= $arResult["NAME"] ?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold">$ <?= $arResult["DISPLAY_PROPERTIES"]['PRICE']['VALUE'] ?></strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">

                    <? if ($gallery_images) : ?>
                        <div class="slide-one-item home-slider owl-carousel">

                            <? if (!$gallery_images[0]): ?>
                                <div><img src="<?= $gallery_images["SRC"] ?>" alt="Image" class="img-fluid"></div>
                            <? else:?>
                                <? foreach ($gallery_images as $image):?> 
                                    <div><img src="<?= $image["SRC"] ?>" alt="Image" class="img-fluid"></div>
                                    <?endforeach?>
                            <?endif?>
                        </div>
                        <?else:?>
                            <br><br>
                    <?endif?>

                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3">$ <?= $arResult["DISPLAY_PROPERTIES"]['PRICE']['VALUE'] ?></strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li class="text-center">
                                    <span class="property-specs"><?= GetMessage('UPDATE_DATE') ?></span>
                                    <span class="property-specs-number"><?= date('d.m.Y', strtotime($arResult["TIMESTAMP_X"])) ?></span>
                                </li>
                                <li class="text-center">
                                    <? if ($arResult["DISPLAY_PROPERTIES"]['FLOORS_QTY']['VALUE']): ?>
                                        <span class="property-specs"><?= GetMessage('FLOORS_QTY') ?></span>
                                        <span class="property-specs-number"><?= $arResult["DISPLAY_PROPERTIES"]['FLOORS_QTY']['VALUE'] ?></span>
                                    <? endif ?>
                                </li>
                                <li class="text-center">
                                    <? if ($arResult["DISPLAY_PROPERTIES"]['AREA']['VALUE']): ?>
                                        <span class="property-specs"><?= GetMessage('AREA') ?></span>
                                        <span class="property-specs-number"><?= $arResult["DISPLAY_PROPERTIES"]['AREA']['VALUE'] ?></span>
                                    <? endif ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5 d-flex justify-content-end">
                        <? if ($arResult["DISPLAY_PROPERTIES"]['WC_QTY']['VALUE']): ?>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">                            
                                    <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage('WC_QTY') ?></span>
                                    <strong class="d-block"><?= $arResult["DISPLAY_PROPERTIES"]['WC_QTY']['VALUE'] ?></strong>                           
                            </div>
                        <? endif ?>
                        <? if ($arResult["DISPLAY_PROPERTIES"]['HAS_GARAGE']['VALUE']): ?>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">                               
                                    <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage('GARAGE') ?></span>
                                    <strong class="d-block"><?= $arResult["DISPLAY_PROPERTIES"]['HAS_GARAGE']['VALUE'] ?></strong>
                            </div>
                        <? endif ?>
                    </div>
                    <h2 class="h4 text-black"><?= GetMessage('MORE_INFO') ?></h2>
                    <p><?= $arResult["DETAIL_TEXT"] ?></p>
     
                    <? if ($gallery_images) : ?>
                        <div class="row mt-5">
                            <div class="col-12">
                                <h2 class="h4 text-black mb-3"><?= GetMessage('GALLERY') ?></h2>
                            </div>

                            <? if (!$gallery_images[0]): ?>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <a href="<?= $gallery_images["SRC"] ?>" class="image-popup gal-item">
                                        <img src="<?= $gallery_images["SRC"] ?>" alt="Image" class="img-fluid">
                                    </a>
                                </div>
                            <? else:?>
                                <? foreach ($gallery_images as $image):?>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <a href="<?= $image["SRC"] ?>" class="image-popup gal-item">
                                            <img src="<?= $image["SRC"] ?>" alt="Image" class="img-fluid">
                                        </a>
                                    </div>
                                <?endforeach?>
                            <?endif?> 
                        </div>
                    <?endif?>
                </div>
                <div>
                    <? foreach ($ext_refs as $ref) : ?>
                        <div>
                            <a href="<?= $ref ?>" target="_blank"><?= GetMessage('EXT_REFERENCE') ?></a>
                        </div>                      
                    <? endforeach ?>
                    
                    <? if (!$more_info) $more_info['VALUE'] = [] ?>
                    
                    <? if (count($more_info['VALUE']) == 1): ?>
                        <div>
                            <a href="<?= $more_info["FILE_VALUE"]["SRC"] ?>" target="_blank"><?= GetMessage('MORE_INFO') ?></a>
                        </div>
                        <? else:?>
                            <? foreach ($more_info["FILE_VALUE"] as $info) : ?>
                        <div>
                            <a href="<?= $info["SRC"]?>" target="_blank"><?= GetMessage('MORE_INFO') ?></a>
                        </div>
                        <? endforeach ?>
                        
                    <?endif?>

                </div>
            </div>

            <div class="col-lg-4 pl-md-5">
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3"><?= GetMessage('CONTACT_AGENT') ?></h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name"><?= GetMessage('NAME') ?></label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"><?= GetMessage('EMAIL') ?></label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone"><?= GetMessage('PHONE') ?></label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3"><?= GetMessage('PARAGRAPH') ?></h3>
                    <p><?= GetMessage('TEXT') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
