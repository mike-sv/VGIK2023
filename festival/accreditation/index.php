<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����-�����  ���������");
?>
<p>������������ �� ��������� ����� ��������: </p>

<p>&mdash; ������������� ������ (� ��������� �������� �������, ����������, ������������ ��� ��������-�������); 
  <br />
� �������� ���������� ����� (������� ��������� ��������� ���� � �����������, ���������� � ������������� ����������, ���������������� � �������������); 
  <br />
� ��������, ����������� �� ������� ����� ����������� ������������; 
  <br />
� ������������� ������������ � ������������ �������</p>

<p></p>

<p><u>������ � ������� � ��������� �������� � ������ ������������ ��������� ����� �������� ������ �� ������������.</u><b><i> </i></b></p>

<br />
<?$APPLICATION->IncludeComponent(
	"default:form.result.accreditation.new",
	".default",
	Array(
		"SEF_MODE" => "Y",
		"WEB_FORM_ID" => "1",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "ok.php",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"SEF_FOLDER" => "/festival/accreditation/",
		"VARIABLE_ALIASES" => Array(
		)
	)
);?> 
<br />

<br />

<br />
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>