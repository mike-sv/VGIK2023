<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("detail");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "TODAY",
		"IBLOCK_ID" => "20",
		"ELEMENT_ID" => "$_REQUEST[\"ELEMENT_ID\"]",
		"ELEMENT_CODE" => "",
		"CHECK_DATES" => "Y",
		"FIELD_CODE" => array(),
		"PROPERTY_CODE" => array(),
		"IBLOCK_URL" => "#SITE_DIR#/today/educational/indexl.php?SECTION_ID=#ID#",
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
		"PAGER_TITLE" => "Страница",
		"PAGER_TEMPLATE" => "",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> 
<br />
 
<p align="center">РЕЖИССЕРСКИЙ ФАКУЛЬТЕТ </p>
 
<p align="center">ОБЪЯВЛЯЕТ НАБОР НА КУРСЫ ПРОФОРИЕНТАЦИИ </p>
 
<p align="center">ПО СПЕЦИАЛЬНОCТИ </p>
 
<p align="center">&laquo;РЕЖИССУРА КИНО И ТЕЛЕВИДЕНИЯ&raquo; </p>
 
<p align="justify">Задача курсов: расширить кругозор абитуриентов в сфере экранных искусств, дать конкретное представление о характере и специфике профессии, предоставить возможность творческого тренинга и пробных занятий, встретиться с мастерами экрана, познакомиться с их творческим опытом, получить квалифицированную помощь в подготовке к вступительным экзаменам в мастерские режиссуры игрового и неигрового фильма, режиссуры телевизионных программ. </p>
 
<p align="justify">Занятия проводят педагоги и мастера ВГИКа, а также творческие работники киностудий и телевидения. Изложение тем сопровождается просмотрами фильмов, телепрограмм, кинофрагментов, представляющих творчество отдельных выдающихся мастеров. </p>
 
<p align="justify">Зачисление слушателей происходит после собеседования, носящего консультативно-рекомендательный характер. На собеседовании абитуриент представляет краткую биографическую справку (1 страница) и 2 фотографии размером 3х4. </p>
 
<p align="justify">Набор слушателей осуществляется дважды: в октябре и марте. </p>
 
<p align="justify">Начало работы курсов 05.10.2010 г. </p>
 
<p align="justify">Занятия проходят во ВГИКе три раза в неделю. </p>
 
<p align="justify">Общий объем занятий 270 академических часов. </p>
 
<p align="justify">СОБЕСЕДОВАНИЕ: </p>
 
<p align="justify">23 СЕНТЯБРЯ (ЧЕТВЕРГ) 2010 г. в 19-00 час. (АКТОВЫЙ ЗАЛ) </p>
 
<p align="justify">СПРАВКИ ПО ТЕЛЕФОНУ: 8 (499) 181 02 49 </p>
 
<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>