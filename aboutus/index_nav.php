<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2"><?= GetMessage('ABOUT_US_HEADING')?></h1>
                <!-- <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">About</strong></div> -->
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "nav",
                    array(
                        "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                        "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                        "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
</div>