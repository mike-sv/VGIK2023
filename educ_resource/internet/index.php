<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Что такое интернет-экзамен? ");
?>
<div class="pad_left"><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"IBLOCK_TYPE" => "EDUC_RESOURCE",
		"IBLOCK_ID" => "69",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"SECTION_URL" => "/educ_resource/internet/index.php?SECTION_ID=#SECTION_ID#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "600",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y"
	)
);?> 
  <br />
  
  <br />
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>