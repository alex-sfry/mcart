<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Биржа недвижимости");
$APPLICATION->SetPageProperty("keywords", "продажа недвижимости, покупка недвижимости");
$APPLICATION->SetPageProperty("description", "Биржа недвижимости");
$APPLICATION->SetTitle("Главная");
?>

<p>
</p>
<?
global $arrFilter;
$arrFilter["PROPERTY_PRIORITY_DEAL_VALUE"] = "Да";
?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "home_slider",
    array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "saleads",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "arrFilter",
        "FIELD_CODE" => array(
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "PRICE",
            1 => "DESCRIPTION",
            2 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "31536000",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "home_slider",
        "STRICT_SECTION_CHECK" => "N"
    ),
    false
); ?>

<div class="py-5">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <div class="feature d-flex align-items-start">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "feature1",
                            "EDIT_TEMPLATE" => ""
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <div class="feature d-flex align-items-start">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "feature2",
                            "EDIT_TEMPLATE" => "/include/rent.php"
                        )
                    ); ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">

                <div class="feature d-flex align-items-start">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "feature3",
                            "EDIT_TEMPLATE" => ""
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>New Properties for You</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">

            <? $APPLICATION->IncludeComponent(
                "bitrix:news.line",
                "sale_ads_preview",
                array(
                    "IBLOCK_TYPE" => "saleads",
                    "IBLOCKS" => array(
                        0 => "1",
                    ),
                    "NEWS_COUNT" => "9",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "PREVIEW_TEXT",
                        2 => "PREVIEW_PICTURE",
                        3 => "",
                    ),
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "DETAIL_URL" => "#SITE_DIR#/saleads/#ELEMENT_CODE#/",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "31536000",
                    "CACHE_GROUPS" => "Y",
                    "COMPONENT_TEMPLATE" => "sale_ads_preview"
                ),
                false
            ); ?>

        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center mb-5">
                
                <div class="site-section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.line", 
                "services", 
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "300",
                    "CACHE_TYPE" => "A",
                    "DETAIL_URL" => "",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "PREVIEW_TEXT",
                        2 => "DETAIL_TEXT",

                    ),
                    "IBLOCKS" => array(
                        0 => "4",
                    ),
                    "IBLOCK_TYPE" => "services",
                    "NEWS_COUNT" => "6",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "COMPONENT_TEMPLATE" => "services"
                ),
                false
            ); ?>
            
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <div class="site-section-title">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.line",
                "news_line",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "300",
                    "CACHE_TYPE" => "A",
                    "DETAIL_URL" => "",
                    "FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "PREVIEW_TEXT",
                        2 => "PREVIEW_PICTURE",
                        3 => "DATE_CREATE",
                        4 => "",
                    ),
                    "IBLOCKS" => array(
                        0 => "2",
                    ),
                    "IBLOCK_TYPE" => "news",
                    "NEWS_COUNT" => "3",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "COMPONENT_TEMPLATE" => "news_line"
                ),
                false
            ); ?>
        </div>
    </div>
</div>


        <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>