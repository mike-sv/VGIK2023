<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("װמעמאכüבמל");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "gallery", array(
	"IBLOCK_TYPE" => "TODAY",
	"IBLOCK_ID" => "72",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "N",
	"TOP_DEPTH" => "2",
	"SECTION_URL" => "",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"DISPLAY_PANEL" => "N",
	"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>