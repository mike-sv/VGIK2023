<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Творческие встречи");
?> 
<h3> <font face="Arial" size="3"><u>Творческие встречи и мастер-классы (2014 г.) </u></font></h3>
 
<div><font face="Arial" color="#9d0a0f"><b>2014 год - Год культуры Российской Федерации. В этом году ВГИКу исполняется 95 лет со дня основания</b></font></div>
 
<h3> <font face="Arial" size="3"> 
    <br />
   </font></h3>
 
<h3> <font face="Arial" size="3"><u>Архив творческих встреч (2010-2011 гг.) </u></font></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1977" target="_parent" ><font face="Arial" size="3" style="font-weight: normal; ">24 февраля 2011 года на семинаре современного фильма была встреча с Гарри Бардиным</font></a></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1781" target="_blank" ><font face="Arial" size="3" style="font-weight: normal; ">11 ноября 2010 состоялась творческая встреча с режиссером Николаем Хомерики</font></a></h3>
 
<h3><a target="_blank" href="http://www.vgik.info/today/creativelife/detail.php?ID=1768" ><font face="Arial" size="3" style="font-weight: normal; ">29 октября 2010 прошел мастер-класс Алексея Учителя</font></a></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1767" target="_blank" ><font face="Arial" size="3" style="font-weight: normal; ">28 октября 2010 прошел мастер-класс Пола Брауна</font></a></h3>
 
<h3><a target="_blank" href="http://www.vgik.info/today/creativelife/detail.php?ID=1762" ><font face="Arial" size="3" style="font-weight: normal; ">В рамках 30 Международного фестиваля ВГИК прошел мастер-класс режиссера Кирилла Серебрянникова</font></a></h3>
 
<h3><a target="_blank" href="http://www.vgik.info/today/creativelife/detail.php?ID=1433" ><font face="Arial" size="3" style="font-weight: normal; ">22 октября в 15.00 состоялась творческая встреча с португальским режиссером Силвия Фирмино</font></a></h3>
 
<h3><a href="http://www.vgik.info/today/creativelife/detail.php?ID=1435" target="_blank" ><font face="Arial" size="3" style="font-weight: normal; ">В среду 20 октября в 17:00 состоялась творческая встреча с режиссером Богдан Георг Апетри</font></a></h3>
 
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
		"PAGER_TITLE" => "События",
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