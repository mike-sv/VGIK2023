<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contact information");
?><?$APPLICATION->IncludeComponent("bitrix:news.detail", "student_advertisement", Array(
	"DISPLAY_DATE" => "Y",	// �������� ���� ��������
	"DISPLAY_NAME" => "N",	// �������� �������� ��������
	"DISPLAY_PICTURE" => "Y",	// �������� ��������� �����������
	"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"IBLOCK_TYPE" => "STUDENT",	// ��� ��������������� ����� (������������ ������ ��� ��������)
	"IBLOCK_ID" => "12",	// ��� ��������������� �����
	"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID �������
	"ELEMENT_CODE" => "",	// ��� �������
	"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
	"FIELD_CODE" => "",	// ����
	"PROPERTY_CODE" => "",	// ��������
	"IBLOCK_URL" => "",	// URL �������� ��������� ������ ��������� (�� ��������� - �� �������� ���������)
	"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
	"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
	"DISPLAY_PANEL" => "N",	// ��������� � �����. ������ ������ ��� ������� ����������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
	"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
	"USE_PERMISSIONS" => "N",	// ������������ �������������� ����������� �������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "3600",	// ����� ����������� (���.)
	"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
	"PAGER_TITLE" => "��������",	// �������� ���������
	"PAGER_TEMPLATE" => "",	// �������� �������
	"AJAX_OPTION_SHADOW" => "Y",	// �������� ���������
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>