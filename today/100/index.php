<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ВГИК: Творческая жизнь");
?><div style="margin-bottom:20px;">
	<h2>ПОЗДРАВЛЕНИЯ:</h2>
	<p>
 <a href="https://vgik.info/today/creativelife/detail.php?ID=9560">Государственных наград РФ удостоены мастера ВГИКа</a>
	</p>
	<p>
 <a href="https://vgik.info/today/creativelife/detail.php?ID=9542">Министр культуры РФ Владимир Мединский вручил государственные и ведомственные награды деятелям культуры и искусства</a>
	</p>
	<p>
 <a href="https://vgik.info/today/creativelife/detail.php?ID=9494">Государственных наград РФ удостоены мастера ВГИКа</a>
	</p>
	<p>
 <a href="https://vgik.info/today/creativelife/detail.php?ID=9208">Указом Президента РФ Игорь Семёнович Клебанов награжден орденом Почета</a>
	</p>
	<p>
 <a href="/upload/advertising/Приказы%20Министерства%20культуры%20РФ.pdf">Приказы о награждении сотрудников института Почетными грамотами Министерства культуры РФ и объявлении благодарностей Министра культуры РФ</a><br>
	</p>
</div>

<h2>100-летие ВГИК:</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"IBLOCK_TYPE" => "TODAY",
		"IBLOCK_ID" => "100",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"PAGER_TITLE" => "Статьи",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_GROUPS" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?><br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>