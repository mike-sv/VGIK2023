<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кафедра драматургии кино");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"IBLOCK_TYPE" => "TEACHING",
		"IBLOCK_ID" => "26",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"SECTION_URL" => "/abiturient/regulations/index.php?SECTION_ID=#SECTION_ID#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y"
	)
);?> 
<br />
 
<br />

<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>