<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� ������ ��������");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� ������ ��������");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"college_novosti",
	array(
	"ADD_ELEMENT_CHAIN" => "N",	// �������� �������� �������� � ������� ���������
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPOSITE_FRAME_MODE" => "A",	// ����������� ������� ���������� �� ���������
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// ���������� ����������
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DETAIL_FIELD_CODE" => array(	// ����
			0 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
		"DETAIL_PAGER_TEMPLATE" => "",	// �������� �������
		"DETAIL_PAGER_TITLE" => "��������",	// �������� ���������
		"DETAIL_PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "MORE_PHOTO2",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// ������������� ������������ URL
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"FILE_404" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"IBLOCK_ID" => "29",	// ��������
		"IBLOCK_TYPE" => "COLLEGE",	// ��� ���������
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"LIST_FIELD_CODE" => array(	// ����
			0 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// ��������
			0 => "",
		),
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
		"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_TEMPLATE" => "news",	// ������ ������������ ���������
		"PAGER_TITLE" => "�������",	// �������� ���������
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"SEF_FOLDER" => "/college/creative_life_college/",	// ������� ��� (������������ ����� �����)
		"SEF_MODE" => "Y",	// �������� ��������� ���
		"SEF_URL_TEMPLATES" => array(
			"detail" => "#ELEMENT_ID#/",
			"news" => "",
			"section" => "",
		),
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"USE_CATEGORIES" => "N",	// �������� ��������� �� ����
		"USE_FILTER" => "N",	// ���������� ������
		"USE_PERMISSIONS" => "N",	// ������������ �������������� ����������� �������
		"USE_RATING" => "N",	// ��������� �����������
		"USE_RSS" => "N",	// ��������� RSS
		"USE_SEARCH" => "N",	// ��������� �����
		"USE_SHARE" => "N"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>