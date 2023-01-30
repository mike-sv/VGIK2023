<?
if ($_SERVER['REMOTE_ADDR'] == '95.220.18.60')
{
error_reporting(E_ALL);
ini_set('display_errors', 1);

}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");

?><style>
#nav a {
text-decoration:none !important;
}
.index-news-image img {
border:none;
}
.top_menu ul.horiz_menu li {
    background: url(/img/new_vert2.jpg) repeat-x left top;
}
.top_menu a {
/*font-weight:bold;*/
/*color: #88121f !important;*/
}
.top_menu ul.horiz_menu li {
width:144px !important;
}
.leftmenu {
    /*background: url(/img/horiz.jpg) repeat-x left top;*/
}
ul.left_menu_ul li {
/*background-color: #f8b173;*/
background: url(/img/horiz.jpg) repeat-x left bottom;
border-bottom:none;
}
</style>
<div class="row">
	<div class="col-xs-5 visible-xs-block">
 <a href="https://vgik.info/oscar/"><img src="/upload/medialibrary/7f7/osk9.png" class="img-responsive"></a><br>
 <br>
	</div>
	<div class="col-xs-6 visible-xs-block">
 <a href="https://vgik.info/president.php"><img src="/upload/medialibrary/5f7/shapky2-_1_.png" class="img-responsive"></a><br>
 <br>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 col-xs-12" style="padding-right: 0px; z-index: 1;">
		<div class="col-xs-12 visible-xs-block" style="padding-left: 0px;">
 <a style="line-height: 34px; font-weight: bold;" href="https://vk.com/public171289540" target="_blank"><img src="/upload/medialibrary/613/vk2.png" style="width: 22px; margin-right: 6px; float: left;"></a> <a style="line-height: 34px; font-weight: bold;" href="https://fb.com/VGIKOfficial" target="_blank"><img src="/upload/medialibrary/e31/fb2.png" style="width: 22px; margin-right: 6px; float: left;"></a> <a style="line-height: 34px; font-weight: bold;" href="https://www.instagram.com/vgikofficial/" target="_blank"><img src="/upload/medialibrary/11d/inst2.png" style="width: 22px; margin-right: 6px; float: left;"></a> <a style="line-height: 34px; font-weight: bold;" href="https://www.youtube.com/channel/UCplgX4wp3esYMJjneR7vyfg?fbclid=IwAR1hojo-gLKe79FVjFlv4XtgWDM3Dhiai0_z0ho0LlediubZ2fmTZXOepts" target="_blank"><img src="/upload/medialibrary/c91/youtube2.png" style="width: 26px; margin-top:2px; margin-right: 6px; float: left;"></a>
		</div>

		<div class="col-xs-12 visible-xs-block" style="padding-left: 0px;">
			<h2 style="line-height: 0; float: left;">НOВОСТИ:</h2>
		</div>
		<div class="hidden-xs">
			<h2>НOВОСТИ:</h2>
 <br>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index_images", 
	array(
		"ACTIVE_DATE_FORMAT" => "SHORT",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "index_images",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "TODAY",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "0",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DATE_PUBLIC",
			2 => "KEYWORDS",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "Y"
	),
	false
);?>
 <br>
		 &nbsp;&nbsp;<br>
 <br>
 <br>
 <a href="http://xn--80abucjiibhv9a.xn--p1ai/" target="_blank"><img width="120" src="/upload/medialibrary/f71/minobr_vgik.jpg" height="36" style="margin-bottom:7px;"></a>&nbsp; &nbsp;<a href="http://mkrf.ru/" target="_blank"></a><a href="http://mkrf.ru/" target="_blank"><img width="120" src="/upload/medialibrary/b90/mincult_vgik.jpg" height="36" style="margin-bottom:7px;"></a>&nbsp; &nbsp;<a href="http://www.culture.ru/" target="_blank"><img width="120" src="/upload/medialibrary/539/cultura_vgik.jpg" height="36" style="margin-bottom:7px;"></a>&nbsp; &nbsp;<a href="http://obrnadzor.gov.ru/ru/" target="_blank"><img width="120" src="/upload/medialibrary/d8d/rosobrnadzor.jpg" height="36" style="margin-bottom:7px;"></a>&nbsp; &nbsp;<a href="https://grants.culture.ru/" target="_blank"><img width="120" src="/upload/medialibrary/c4c/granty_kultura.jpg" height="36" style="margin-bottom:7px;"></a><br>
<div>
			<h2>"Горячая линия" ректора ВГИКа:</h2>
			<div>
				<ul>
					<li>
					Уважаемые преподаватели и студенты ВГИКа!&nbsp; </li>
				</ul>
			</div>
			<div>
				 С интересной информацией, проблемами или конструктивными пожеланиями вы можете обратиться к ректору ВГИКа В.С.&nbsp;Малышеву по адресу:<a href="mailto:mail@vgik.info" target="_blank"><b>mail@vgik.info</b></a><br>
				 В письме необходимо указать свои координаты (ФИО, курс, факультет и мастерскую).&nbsp; &nbsp;<br>
				 Поступившие сообщения будут обязательно рассмотрены и не останутся без ответа.&nbsp;
			</div>
		</div>
	</div>
	<div class="banner col-sm-3 hidden-xs" style="text-align: right; padding-right: 0px; padding-left: 0px;text-align;center;">
		<div style="text-align:right;padding-left:30px;margin-top:10px;">
 
<br>
 <br>
 <br>
			<a href="https://vgik.info/international/summer_school/"><img width="220" alt="Плакат.png" src="/upload/medialibrary/9b1/plakat.png" height="343" title="Плакат.png"></a><br>
 <br>
 <a href="https://vgik.info/oscar/"><img width="220" src="/upload/medialibrary/7f7/osk9.png" height="117"></a><br>
 <br>
 <a href="https://vgik.info/president.php"><img width="220" src="/upload/medialibrary/5f7/shapky2-_1_.png"></a><br>
 <br>
 <a href="https://vgik.info/abiturient/higher/index.php?SECTION_ID=1221"><img width="220" alt="Kursy5.jpg" src="/upload/medialibrary/111/kursy5.jpg"></a><br>
 <br>
 <a href="https://vgik.info/higher-education/highcourses/regulations/"><img width="220" src="/upload/банер%20ВК%20КиТ.jpg"></a><br>
 <br>
 <a href="https://vgik.info/proekty/tvorcheskie-raboty-studentov/"><img width="220" src="/upload/medialibrary/111/tws.jpg"></a><br>
 <br>

 <br>
 <br>


		</div>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
		 <script type="text/javascript" src="https://vgik.info/js/jquery.colorbox.js"></script> <script type="text/javascript">
		$(function () {
			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
$('.pop').colorbox({ innerWidth:630, innerHeight:680});
$('.pop1').colorbox({ innerWidth:630, innerHeight:680, html:"<div style='padding:10px;text-align:center;'><h2>Распоряжение 259-рп от 12.08.2019</h2><p><img src=\"/upload/medialibrary/527/blagodarnost.jpg\" style=\"width:566px\"></p></div>"});
$('.pop2').colorbox({ innerWidth:630, innerHeight:680});
$('.pop3').colorbox({ innerWidth:630, innerHeight:680});
$('.pop4').colorbox({ innerWidth:'auto', innerHeight:680});
$('.pop5').colorbox({ innerWidth:'auto', innerHeight:680});
$('.pop6').colorbox({ innerWidth:'auto', innerHeight:680});
$('.pop7').colorbox({ innerWidth:'auto', innerHeight:680});
$('.pop8').colorbox({ innerWidth:'auto', innerHeight:680});
		})
	</script>&nbsp;&nbsp;
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>