<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����������");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "gallery", Array(
	"IBLOCK_TYPE" => "VGIK90",	// ��� ����-�����
	"IBLOCK_ID" => "59",	// ����-����
	"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
	"SECTION_CODE" => "",	// ��� �������
	"COUNT_ELEMENTS" => "N",	// ���������� ���������� ��������� � �������
	"TOP_DEPTH" => "2",	// ������������ ������������ ������� ��������
	"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "3600",	// ����� ����������� (���.)
	"DISPLAY_PANEL" => "N",	// ��������� � �����. ������ ������ ��� ������� ����������
	"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>