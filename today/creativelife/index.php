<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("����: ���������� �����");
?><?$APPLICATION->IncludeComponent("bitrix:news.list", "template_image", Array(
	"IBLOCK_TYPE" => "TODAY",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"IBLOCK_ID" => "19",	// ��� ��������������� �����
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"FILTER_NAME" => "",	// ������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "3600",	// ����� ����������� (���.)
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"DISPLAY_PANEL" => "N",
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"PAGER_TITLE" => "������",	// �������� ���������
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_TEMPLATE" => "",	// ������ ������������ ���������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"DISPLAY_DATE" => "Y",	// �������� ���� ��������
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	),
	false
);?><br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>