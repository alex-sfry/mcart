<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? IncludeTemplateLangFile(__FILE__); 
?>

<footer class="site-footer">

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/about_footer.php"
                        )
                    ); ?>
                </div>



            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">

                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4"><?= GetMessage('FOOTER_MENU') ?></h3>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#"><?= GetMessage('MENU_ITEM_1') ?></a></li>
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Properties</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-6 col-lg-6">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom_menu",
                            array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => array(""),
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottom",
                                "USE_EXT" => "N"
                            )
                        ); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/social_footer.php"
                    )
                ); ?>

            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">

                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/copyright_footer.php",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                ); ?>

                <?
                if (substr($APPLICATION->GetCurPage(),-1) != '/') {
                    $APPLICATION->AddChainItem($APPLICATION->GetTitle());
                }
                ?>
            </div>
        </div>
    </div>
</footer>

</body>

</html>