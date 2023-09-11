<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
    <? if (!empty($arResult["ERROR_MESSAGE"])) {
        foreach ($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if ($arResult["OK_MESSAGE"] <> '') {
    ?><div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
                                                            }
                                                                ?>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 mb-5">

                    <form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="p-5 bg-white border">
                        <?= bitrix_sessid_post() ?>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">
                                    <?= GetMessage("MFT_NAME") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) : ?><? endif ?>
                                </label>
                                <input type="text" id="fullname" class="form-control" placeholder="<?= GetMessage("MFT_NAME") ?>" name="user_name" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">
                                    <?= GetMessage("MFT_EMAIL") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])) : ?><? endif ?>
                                </label>
                                <input type="email" id="email" class="form-control" placeholder="<?= GetMessage("MFT_EMAIL") ?>" name="user_email" value="">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">
                                    <?= GetMessage("MFT_MESSAGE") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) : ?><? endif ?>
                                </label>
                                <textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control" placeholder="<?= GetMessage("MFT_MESSAGE") ?>"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="<?= GetMessage("MFT_SUBMIT") ?>" class="btn btn-primary  py-2 px-4 rounded-0">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">

                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "fb",
                                "EDIT_TEMPLATE" => ""
                            )
                        ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>