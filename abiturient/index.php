<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Абитуриентам");
LocalRedirect('/abiturient/higher/');
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	Array(
		"IBLOCK_TYPE" => "ABITURIENT",
		"IBLOCK_ID" => "56",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"SECTION_URL" => "/abiturient/index.php?SECTION_ID=#SECTION_ID#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "600",
		"DISPLAY_PANEL" => "N",
		"ADD_SECTIONS_CHAIN" => "Y"
	)
);?> 
<br />

<br />

<p align="center">Ответственный секретарь Приёмной комиссии </p>

<p align="center">Денина Елена Николаевна </p>

<p align="center">Телефон: 181-03-93 </p>

<p align="center">129226, Москва, ул. В.Пика, дом 3, комната № 213, 2 этаж</p>

<p align="center">Телефон ректората: 181-38-68 </p>

<p align="center">Факс: 181-80-74 </p>

<p align="center">e-mail: <a href="mailto:priemkom@vgik.info" ><b>priemkom@vgik.info</b></a> </p>

<p align="center">Почтовый адрес: 129226, Москва, ул. В.Пика, дом 3</p>

<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>