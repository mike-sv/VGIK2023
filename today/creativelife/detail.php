<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������");
?><?$APPLICATION->IncludeComponent("bitrix:news.detail", "template1", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "3600",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DISPLAY_DATE" => "Y",	// �������� ���� ��������
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ��������� �����������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"ELEMENT_CODE" => "",	// ��� �������
		"ELEMENT_ID" => $_REQUEST["ID"],	// ID �������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "19",	// ��� ��������������� �����
		"IBLOCK_TYPE" => "TODAY",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"IBLOCK_URL" => "",	// URL �������� ��������� ������ ��������� (�� ��������� - �� �������� ���������)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
		"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
		"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
		"PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
		"PAGER_TEMPLATE" => "",	// ������ ������������ ���������
		"PAGER_TITLE" => "��������",	// �������� ���������
		"PROPERTY_CODE" => array(	// ��������
			0 => "VIDEO",
			1 => "",
		),
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"USE_PERMISSIONS" => "N",	// ������������ �������������� ����������� �������
		"USE_SHARE" => "N",	// ���������� ������ ���. ��������
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"SET_CANONICAL_URL" => "N",	// ������������� ������������ URL
		"SET_BROWSER_TITLE" => "Y",	// ������������� ��������� ���� ��������
		"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
		"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"ADD_ELEMENT_CHAIN" => "N",	// �������� �������� �������� � ������� ���������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"STRICT_SECTION_CHECK" => "N",	// ������� �������� ������� ��� ������ ��������
		"COMPOSITE_FRAME_MODE" => "A",	// ����������� ������� ���������� �� ���������
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// ���������� ����������
	),
	false
);?> 


 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>