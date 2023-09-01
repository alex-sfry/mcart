<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Личный кабинет");
$APPLICATION->SetPageProperty("keywords", "личный кабинет");
$APPLICATION->SetPageProperty("description", "Личный кабинет");
$APPLICATION->SetTitle("Личный кабинет");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.profile","",Array(
		"USER_PROPERTY_NAME" => "",
		"SET_TITLE" => "Y", 
		"AJAX_MODE" => "N", 
		"USER_PROPERTY" => Array(), 
		"SEND_INFO" => "Y", 
		"CHECK_RIGHTS" => "Y",  
		"AJAX_OPTION_JUMP" => "N", 
		"AJAX_OPTION_STYLE" => "Y", 
		"AJAX_OPTION_HISTORY" => "N" 
	)
);?>

<?$APPLICATION->IncludeComponent("bitrix:subscribe.form","",Array(
		"USE_PERSONALIZATION" => "Y", 
	"PAGE" => "#SITE_DIR#services/subscribe.php",
		"SHOW_HIDDEN" => "N", 
		"CACHE_TYPE" => "N", 
		"CACHE_TIME" => "3600" 
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>