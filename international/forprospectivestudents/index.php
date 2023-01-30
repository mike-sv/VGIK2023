<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("For prospective students");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TIME" => "600",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"DISPLAY_PANEL" => "N",
		"IBLOCK_ID" => "71",
		"IBLOCK_TYPE" => "INTENATIONAL",
		"SECTION_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"TOP_DEPTH" => "3"
	)
);?> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>