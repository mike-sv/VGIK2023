<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты поиска");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"",
	Array(
		"AJAX_MODE" => "N",
		"RESTART" => "Y",
		"CHECK_DATES" => "N",
		"USE_TITLE_RANK" => "N",
		"arrWHERE" => Array(),
		"arrFILTER" => Array(),
		"SHOW_WHERE" => "N",
		"PAGE_RESULT_COUNT" => "50",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>