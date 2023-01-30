<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Курсы профориентации");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "abiturient_regulations", array(
	"IBLOCK_TYPE" => "ABITURIENT",
	"IBLOCK_ID" => "10",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "Y",
	"TOP_DEPTH" => "3",
	"SECTION_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"DISPLAY_PANEL" => "N",
	"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>