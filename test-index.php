<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест главной");
?><div class="row hidden-sm hidden-xs">
	<div class="col-sm-3 col-md-2 col-xs-12 vcenter">
 <a href="rektor.php"><img src="/upload/medialibrary/5ae/vg_privetstvie.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-3 col-md-2 col-xs-12 vcenter">
 <a href="/upload/medialibrary/527/blagodarnost.jpg" class="pop1"> <img src="/upload/medialibrary/75a/vg_blagodarnost.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-3 col-md-2 col-xs-12 vcenter">
 <a href="/today/creativelife/detail.php?ID=7946"> <img src="/upload/medialibrary/56b/vg_fond.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-3 col-md-2 col-xs-12 vcenter">
 <a href="charity-event.php?ajax=Y" class="pop2"> <img src="/upload/medialibrary/bff/vg_blagotvorit.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-3 col-md-2 col-xs-12 vcenter">
 <a href="/today/100/"> <img src="/upload/medialibrary/5f7/vg_100.png" class="mainpg-top-button"></a>
	</div>
</div>
<div class="row visible-sm visible-xs">
	<div class="col-xs-12 visible-xs-block">
 <a href="/vgik-100/"><img src="/upload/medialibrary/217/1.jpg" class="img-responsive"></a>
	</div>
	<div class="col-sm-2 col-md-2 col-xs-3 vcenter">
 <a href="rektor.php"><img src="/upload/medialibrary/0ef/vg_privetstvie_sm.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-2 col-md-2 col-xs-3 vcenter">
 <a href="/upload/medialibrary/527/blagodarnost.jpg" class="pop1"><img src="/upload/medialibrary/271/vg_blagodarnost_sm.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-2 col-md-2 col-xs-3 vcenter">
 <a href="/today/creativelife/detail.php?ID=7946"><img src="/upload/medialibrary/bd5/vg_fond_sm.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-2 col-md-2 col-xs-3 vcenter">
 <a href="charity-event.php?ajax=Y" class="pop2"><img src="/upload/medialibrary/862/vg_blagotvorit.sm.png" class="mainpg-top-button"></a>
	</div>
	<div class="col-sm-2 col-md-2 col-xs-5 vcenter">
 <a href="/today/100/"> <img src="/upload/medialibrary/f06/vg_100_sm.png" class="mainpg-top-button"></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-8 col-xs-12" style="padding-right: 0px; z-index: 1;">
		<div class="col-xs-12 visible-xs-block" style="padding-left: 0px;">
 <a style="line-height: 34px; font-weight: bold;" href="https://vk.com/public171289540" target="_blank"><img src="/upload/medialibrary/6ff/orange_vkcom_256.png" style="width: 22px; margin-right: 6px; float: left;"></a> <a style="line-height: 34px; font-weight: bold;" href="https://fb.com/VGIKOfficial" target="_blank"><img src="/upload/medialibrary/e97/fb.jpg" style="width: 22px; margin-right: 6px; float: left;"></a> <a style="line-height: 34px; font-weight: bold;" href="https://www.instagram.com/vgikofficial/" target="_blank"><img src="/upload/medialibrary/8dc/insta_icon.png" style="width: 22px; margin-right: 6px; float: left;"></a> <a style="line-height: 34px; font-weight: bold;" href="https://www.youtube.com/channel/UCplgX4wp3esYMJjneR7vyfg?fbclid=IwAR1hojo-gLKe79FVjFlv4XtgWDM3Dhiai0_z0ho0LlediubZ2fmTZXOepts" target="_blank"><img src="/upload/medialibrary/a73/youtube_icon_orange.png" style="width: 26px; margin-top:2px; margin-right: 6px; float: left;"></a>
		</div>
		<div class="col-xs-12 visible-xs-block" style="padding-left: 0px;">
			<h2 style="line-height: 0; float: left;">НOВОСТИ:</h2>
		</div>
		<div class="hidden-xs">
			<h2>НOВОСТИ:</h2>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"index",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
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
		"COMPONENT_TEMPLATE" => "index",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "19",
		"IBLOCK_TYPE" => "TODAY",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
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
		"PROPERTY_CODE" => array(0=>"",1=>"DATE_PUBLIC",2=>"KEYWORDS",3=>"",),
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
	)
);?>&nbsp;&nbsp; <br>
 <br>
 <br>
		<div>
			<h2>"Горячая линия" ректора ВГИКа:</h2>
			<div>
				 Уважаемые преподаватели и студенты ВГИКа!&nbsp; <br>
				 С интересной информацией, проблемами или конструктивными пожеланиями вы можете обратиться к ректору ВГИКа В.С.&nbsp;Малышеву по адресу:<a href="mailto:mail@vgik.info" target="_blank"><b>mail@vgik.info</b></a><br>
			</div>
			<div>
				 В письме необходимо указать свои координаты (ФИО, курс, факультет и мастерскую).&nbsp; &nbsp;<br>
			</div>
			<div>
				 Поступившие сообщения будут обязательно рассмотрены и не останутся без ответа.<br>
 <br>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3" style="padding-right: 0px;">
 <a href="http://xn--80abucjiibhv9a.xn--p1ai/" target="_blank"><img src="/upload/medialibrary/f71/minobr_vgik.jpg" class="img-responsive" style="margin: 0px 10px 5px 0px;"></a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3" style="padding-right: 0px;">
 <a href="http://mkrf.ru/" target="_blank"><img src="/upload/medialibrary/b90/mincult_vgik.jpg" class="img-responsive" style="margin: 0px 10px 5px 0px;"></a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3" style="padding-right: 0px;">
 <a href="http://www.culture.ru/" target="_blank"><img src="/upload/medialibrary/539/cultura_vgik.jpg" class="img-responsive" style="margin: 0px 10px 5px 0px;"></a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3" style="padding-right: 0px;">
 <a href="http://obrnadzor.gov.ru/ru/" target="_blank"> <img src="/upload/medialibrary/d8d/rosobrnadzor.jpg" class="img-responsive" style="margin: 0px 10px 5px 0px;"></a><br>
 <br>
 <br>
 <br>
 <br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="banner col-sm-3 hidden-xs" style="text-align: right; padding-right: 0px; padding-left: 0px;text-align;center;">
		 <!-- Секция для баннеров справа --> <br>
		<div style="text-align:center;margin-top:10px;">

	<div class="col-xs-12 vcenter">
 <a href="http://vgik.info/today/creativelife/detail.php?ID=9125"> <img src="/upload/medialibrary/3e2/vg_vipusk_100.png" class="mainpg-top-button"></a>
	</div>

 <a href="http://vgik.info/today/creativelife/detail.php?ID=8634"><img width="126px" src="/upload/medialibrary/136/f253b6cc7591e86790e2ee943f4aa573.jpg" height="103" style="width:126px"></a><br>
 <br>
 <a href="/upload/advertising/Happy_100_VGIK2.jpg"></a><br>
 <br>
 <a href="/upload/advertising/100year_2019.jpg"></a><br>
		</div>
 <br>
 <br>
		 <script type="text/javascript" src="http://vgik.info/js/jquery.colorbox.js"></script> <script type="text/javascript">
		$(function () {
			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
$('.pop1').colorbox({ innerWidth:630, innerHeight:680, html:"<div style='padding:10px;text-align:center;'><h2>Распоряжение 259-рп от 12.08.2019</h2><p><img src=\"/upload/medialibrary/527/blagodarnost.jpg\" style=\"width:566px\"></p></div>"});
$('.pop2').colorbox({ innerWidth:630, innerHeight:680});
		})
	</script>&nbsp;&nbsp;
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>