<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("���������� �������");
?> 
<h3> <font face="Arial" size="3"><u>���������� ������� � ������-������ (2014 �.) </u></font></h3>
 
<div><font face="Arial" color="#9d0a0f"><b>2014 ��� - ��� �������� ���������� ���������. � ���� ���� ����� ����������� 95 ��� �� ��� ���������</b></font></div>
 
<h3> <font face="Arial" size="3"> 
    <br />
   </font></h3>
 
<h3> <font face="Arial" size="3"><u>����� ���������� ������ (2010-2011 ��.) </u></font></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1977" target="_parent" ><font face="Arial" size="3" style="font-weight: normal; ">24 ������� 2011 ������ �������� ������������������ ���� ������� � ����� ��������</font></a></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1781" target="_blank" ><font face="Arial" size="3" style="font-weight: normal; ">11 ������ 2010 ���������� ���������� ������� � ���������� �������� ��������</font></a></h3>
 
<h3><a target="_blank" href="http://www.vgik.info/today/creativelife/detail.php?ID=1768" ><font face="Arial" size="3" style="font-weight: normal; ">29 ������� 2010 ������ ������-����� ������� �������</font></a></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1767" target="_blank" ><font face="Arial" size="3" style="font-weight: normal; ">28 ������� 2010 ������ ������-����� ���� ������</font></a></h3>
 
<h3><a target="_blank" href="http://www.vgik.info/today/creativelife/detail.php?ID=1762" ><font face="Arial" size="3" style="font-weight: normal; ">� ������ 30 �������������� ��������� ���� ������ ������-����� ��������� ������� ��������������</font></a></h3>
 
<h3><a target="_blank" href="http://www.vgik.info/today/creativelife/detail.php?ID=1433" ><font face="Arial" size="3" style="font-weight: normal; ">22 ������� � 15.00 ���������� ���������� ������� � ������������� ���������� ������ �������</font></a></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1435" target="_blank" ><font face="Arial" size="3" style="font-weight: normal; ">� ����� 20 ������� � 17:00 ���������� ���������� ������� � ���������� ������ ����� ������</font></a></h3>
 
<p> <font face="Arial"> 
    <br />
   </font></p>
 
<p></p>
 <font face="Arial"> 
  <br />
 
  <br />
 </font> 
<p> <font face="Arial"> 
    <br />
   
    <br />
   
    <br />
   </font></p>
 <font face="Arial"> 
  <br />
 </font> 
<p align="justify"> <font face="Arial"> 
    <br />
   <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"afisha_premier",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "AFISHA",
		"IBLOCK_ID" => "17",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "PROPERTY_DATE_PUBLIC",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array("DATE_PUBLIC","KEYWORDS"),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?></font></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>