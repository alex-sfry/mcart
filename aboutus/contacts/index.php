<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "контакты");
$APPLICATION->SetTitle("Контакты");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "page", 
	"AREA_FILE_SUFFIX" => "inc", 
	"AREA_FILE_RECURSIVE" => "Y", 
	"EDIT_TEMPLATE" => "standard.php" 
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>