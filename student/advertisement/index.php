<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contact information");
?>
<p><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"student_advertisement",
	Array(
		"IBLOCK_TYPE" => "STUDENT",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DISPLAY_PANEL" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Объявления",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?></p>

<p></p>

<p align="center"></p>

<p align="center"><strong></strong></p>

<p align="center"></p>

<p><span style="BORDER-COLLAPSE: collapse; FONT-FAMILY: arial, sans-serif; COLOR: rgb(51,51,51); FONT-SIZE: 13px" sizcache="27" sizset="0"></span></p>

<div sizcache="9" sizset="185">
  <p align="center">RUSSIAN STATE UNIVERSITY OF CINEMATOGRAPHY </p>

  <p align="center">named after S. A. Gerasimov (VGIK) </p>

  <p align="center">W. Pieck str. 3, Moscow, 129226-RU </p>

  <p align="center">Telephone (499) 181 38 68; International Contact: (499) 181 26 80; </p>

  <p align="center" sizcache="9" sizset="185">Fax (499) 181 80 74; E-mail: <a href="http://mail.yandex.ru/neo/compose?mailto=mailto:vgikfilmfest@gmail.com">vgikfilmfest@gmail.com</a> </p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>