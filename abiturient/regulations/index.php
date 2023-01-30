<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Правила приема");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"IBLOCK_TYPE" => "ABITURIENT",
		"IBLOCK_ID" => "46",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "/abiturient/regulations/index.php?SECTION_ID=#SECTION_ID#",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?>  
<br />

<br />

<br />

<p align="center"><a href="http://www.vgik.info/abiturient/regulations/index.php?SECTION_ID=137"></a><b></b></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>