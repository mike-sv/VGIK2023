<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "?????, ???, ??????????");
$APPLICATION->SetPageProperty("keywords", "??????????, ?????");
$APPLICATION->SetPageProperty("description", "??????????? ?????????? ????");
$APPLICATION->SetTitle("???");
?><?$APPLICATION->IncludeComponent(
	"mcart.libereya:libereya",
	"",
	Array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CATEGORY_CODE" => "CATEGORY",
		"CATEGORY_IBLOCK" => array(0=>"5",),
		"CATEGORY_ITEMS_COUNT" => "5",
		"CATEGORY_THEME_5" => "list",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("TIMESTAMP_X",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "libereya",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PROPERTY_CODE" => array("IS_NEW",""),
		"DISPLAY_AS_RATING" => "vote_avg",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array("",""),
		"FILTER_NAME" => "????",
		"FILTER_PROPERTY_CODE" => array("AUTHORS","GANRES",""),
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"GROUP_PERMISSIONS" => array("1","3","4","5","6","7","8","9","10","12","13"),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "93",
		"IBLOCK_TYPE" => "libereya_books",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_JQUERY" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("",""),
		"LIST_PROPERTY_CODE" => array("AGE_LIMITS","SERIAL","FORUM_MESSAGE_CNT","RETURN_MESSAGE","FORUM_TOPIC_ID",""),
		"MAX_VOTE" => "5",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "libereya",
		"PAGER_TITLE" => "???????",
		"PERIOD_NEW_TAGS" => "60",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/library/ebs/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_ID#/","news"=>"","search"=>"search/","section"=>""),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC",
		"TAGS_CLOUD_ELEMENTS" => "2",
		"TAGS_CLOUD_WIDTH" => "100%",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "Y",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "Y",
		"USE_SHARE" => "N",
		"VOTE_NAMES" => array(0=>"1",1=>"2",2=>"3",3=>"4",4=>"5",5=>"",)
	)
);?>???????? ? ???????? ??????. ??? ????????? ??????? ?????????? <a href="/auth/?register=yes">??????????????????</a> ?? ????? ? ????????? ?????? ? ???????? "?????? ? ??? ????" ?? email&nbsp; <a href="mailto:biblioteka@vgik.info" target="_blank">biblioteka@vgik.info</a><br>
 ? ?????? ??????? ???, ????? ??????, ???? login ?? ???? ? ????? email.<br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>