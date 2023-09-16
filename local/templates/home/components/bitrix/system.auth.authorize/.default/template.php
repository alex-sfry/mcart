<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5 offset-lg-2">
                <?
                if (!empty($arParams["~AUTH_RESULT"])) {
                    ShowMessage($arParams["~AUTH_RESULT"]);
                }

                if (!empty($arResult['ERROR_MESSAGE'])) {
                    ShowMessage($arResult['ERROR_MESSAGE']);
                }
                ?>
                <? if ($arResult["AUTH_SERVICES"]) : ?>
                    <div class="bx-auth-title"><? echo GetMessage("AUTH_TITLE1") ?></div>
                <? endif ?>
                <div class="bx-auth-note"><?= GetMessage("AUTH_PLEASE_AUTH") ?></div>



                <form name="form_auth" method="post" target="_top" action="<?= $arResult["AUTH_URL"] ?>" class="p-5 bg-white border w-100">

                    <input type="hidden" name="AUTH_FORM" value="Y" />
                    <input type="hidden" name="TYPE" value="AUTH" />
                    <? if ($arResult["BACKURL"] <> '') : ?>
                        <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>" />
                    <? endif ?>
                    <? foreach ($arResult["POST"] as $key => $value) : ?>
                        <input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
                    <? endforeach ?>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for=""><?= GetMessage("AUTH_LOGIN") ?></label>
                            <input type="text" id="" class="form-control" placeholder="<?= GetMessage("AUTH_LOGIN") ?>" name="USER_LOGIN" value="<?= $arResult["LAST_LOGIN"] ?>">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for=""><?= GetMessage("AUTH_PASSWORD") ?></label>
                            <input type="password" id="" class="form-control" placeholder="<?= GetMessage("AUTH_PASSWORD") ?>" name="USER_PASSWORD" autocomplete="off">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="Login" value="<?= GetMessage("AUTH_AUTHORIZE") ?>" />

                        </div>
                    </div>

                    <? if ($arResult["CAPTCHA_CODE"]) : ?>
                        <tr>
                            <td></td>
                            <td><input type="hidden" name="captcha_sid" value="<? echo $arResult["CAPTCHA_CODE"] ?>" />
                                <img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>" width="180" height="40" alt="CAPTCHA" />
                            </td>
                        </tr>
                        <tr>
                            <td class="bx-auth-label"><? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:</td>
                            <td><input class="bx-auth-input form-control" type="text" name="captcha_word" maxlength="50" value="" size="15" autocomplete="off" /></td>
                        </tr>
                    <? endif; ?>
                    <? if ($arResult["STORE_PASSWORD"] == "Y") : ?>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" /><label for="USER_REMEMBER">&nbsp;<?= GetMessage("AUTH_REMEMBER_ME") ?></label></td>
                        </tr>
                    <? endif ?>


                    
                    <? if ($arParams["NOT_SHOW_LINKS"] != "Y") : ?>
                        <noindex>
                            <p>
                                <a href="<?= $arResult["AUTH_FORGOT_PASSWORD_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_FORGOT_PASSWORD_2") ?></a>
                            </p>
                        </noindex>
                    <? endif ?>

                    <? if ($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y") : ?>
                        <noindex>
                            <p>
                                <a href="<?= $arResult["AUTH_REGISTER_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a><br />
                                <!-- <?= GetMessage("AUTH_FIRST_ONE") ?> -->
                            </p>
                        </noindex>
                    <? endif ?>
                </form>
            </div>
        </div>
    </div>
</div>

