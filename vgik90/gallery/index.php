<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотогалерея");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "gallery", Array(
	"IBLOCK_TYPE" => "VGIK90",	// Тип инфо-блока
	"IBLOCK_ID" => "59",	// Инфо-блок
	"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
	"SECTION_CODE" => "",	// Код раздела
	"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
	"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
	"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"DISPLAY_PANEL" => "N",	// Добавлять в админ. панель кнопки для данного компонента
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>