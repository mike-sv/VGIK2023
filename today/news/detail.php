<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� �������������");
?>
<p style="font-weight: bold; text-align: left;"> <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "TODAY",
		"IBLOCK_ID" => "5",
		"ELEMENT_ID" => "$_REQUEST[\"ELEMENT_ID\"]",
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"IBLOCK_URL" => "/today/news/index.php",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DISPLAY_PANEL" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"USE_PERMISSIONS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "��������",
		"PAGER_TEMPLATE" => "",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> </p>
 
<p style="font-weight: bold; text-align: center;">������������ ��������� </p>
 
<p align="center" style="font-weight: bold;">��������� ����� �� ����� �������������� </p>
 
<p align="center" style="font-weight: bold;">�� ������������� </p>
 
<p align="center" style="font-weight: bold;">&laquo;��������� ���� � �����������&raquo; </p>
 
<p align="justify" style="font-weight: bold;">������ ������: ��������� �������� ������������ � ����� �������� ��������, ���� ���������� ������������� � ��������� � ��������� ���������, ������������ ����������� ����������� �������� � ������� �������, ����������� � ��������� ������, ������������� � �� ���������� ������, �������� ����������������� ������ � ���������� � ������������� ��������� � ���������� ��������� �������� � ���������� ������, ��������� ������������� ��������. </p>
 
<p align="justify" style="font-weight: bold;">������� �������� �������� � ������� �����, � ����� ���������� ��������� ���������� � �����������. ��������� ��� �������������� ����������� �������, ������������, ��������������, �������������� ���������� ��������� ���������� ��������. </p>
 
<p align="justify" style="font-weight: bold;">���������� ���������� ���������� ����� �������������, �������� ��������������-���������������� ��������. �� ������������� ���������� ������������ ������� �������������� ������� (1 ��������) � 2 ���������� �������� 3�4. </p>
 
<p align="justify" style="font-weight: bold;">����� ���������� �������������� ������: � ������� � �����. </p>
 
<p align="justify" style="font-weight: bold;">������ ������ ������ 05.10.2010 �. </p>
 
<p align="justify" style="font-weight: bold;">������� �������� �� ����� ��� ���� � ������. </p>
 
<p align="justify" style="font-weight: bold;">����� ����� ������� 270 ������������� �����. </p>
 
<p align="justify" style="font-weight: bold;">�������������: </p>
 
<p align="justify" style="font-weight: bold;">23 �������� (�������) 2010 �. � 19-00 ���. (������� ���) </p>
 
<p align="justify" style="font-weight: bold;">������� �� ��������: 8 (499) 181 02 49 </p>
 
<p></p>
 <span style="color: black;"> 
  <p></p>
 </span> 
<p></p>
 
<p></p>
 
<p align="center"></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>