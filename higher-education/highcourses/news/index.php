<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Highcourses");
?><div>
 <b>�O�����:</b><br>
	<br>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"today_news",
	array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DISPLAY_DATE" => "Y",	// �������� ���� ��������
		"DISPLAY_NAME" => "Y",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// ������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"IBLOCK_ID" => "86",	// ��� ��������������� �����
		"IBLOCK_TYPE" => "Highcourses",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
		"PAGER_SHOW_ALWAYS" => "Y",	// �������� ������
		"PAGER_TEMPLATE" => "",	// ������ ������������ ���������
		"PAGER_TITLE" => "���.",	// �������� ���������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "",
		),
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"SORT_BY1" => "ACTIVE_FROM",	// ���� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "DESC",	// ����������� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
	)
);?>&nbsp;<br>
	<br>
	<hr>
 <br>
 <br>
 <br>
 <br>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>