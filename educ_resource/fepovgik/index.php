<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ФЭПО во ВГИКе");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"IBLOCK_TYPE" => "EDUC_RESOURCE",
		"IBLOCK_ID" => "70",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?> 


 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<p>Учебно - методические рекомендации по проведению ФЭПО во ВГИКе</p>    
 Учебно – методические рекомендации по организации ФЭПО во ВГИКе  
<p></p>

<p><b><i>Учебно &ndash; методические рекомендации по организации ФЭПО во ВГИКе</i></b></p>Учебно - методические рекомендации по организации ФЭПО во ВГИКе