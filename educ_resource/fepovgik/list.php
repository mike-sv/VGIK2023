<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ÔÝÏÎ âî ÂÃÈÊå");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"IBLOCK_TYPE" => "EDUC_RESOURCE",
		"IBLOCK_ID" => "70",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "/educ_resource/fepovgik/list.php?SECTION_ID=#SECTION_ID#",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>