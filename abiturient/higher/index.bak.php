<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������������");

?><br>
<table cellpadding="1" cellspacing="1">
<tbody>
<tr>
	<td>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	array(
	"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "600",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"COUNT_ELEMENTS" => "Y",	// ���������� ���������� ��������� � �������
		"IBLOCK_ID" => "56",	// ��������
		"IBLOCK_TYPE" => "ABITURIENT",	// ��� ���������
		"SECTION_CODE" => "",	// ��� �������
		"SECTION_FIELDS" => "",	// ���� ��������
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
		"SECTION_URL" => "/abiturient/higher/index.php?SECTION_ID=#SECTION_ID#",	// URL, ������� �� �������� � ���������� �������
		"SECTION_USER_FIELDS" => "",	// �������� ��������
		"TOP_DEPTH" => "1",	// ������������ ������������ ������� ��������
	)
);?><br>
	</td>
	<td height="" width="300">
	</td>
	<td style="vertical-align:top">
		 <?
if (!isset($_GET['SECTION_ID']))
{
?> <a href="http://www.vgik.info/science/graduate/aspirantura/index.php"><span style="color: #9d0a0f;"><b>�����������</b></span></a>
		<div>
 <b><a href="http://www.vgik.info/science/graduate/aspirantura-stazhirovka/index.php"><span style="color: #9d0a0f;">������������-����������</span></a></b>
		</div>
		 <? } ?>
	</td>
</tr>
</tbody>
</table>
<div>
	<div>
 <a href="http://vgik.info/today/creativelife/detail.php?ID=5309"><b><span style="color: #9d0a0f;">�������� ������������!</span></b></a><br>
 <br>
		<p align="center">
			 ������������� ��������� ������� ��������
		</p>
		<p align="center">
			 ��������� ������ ��������������
		</p>
		<p align="center">
			 �������:(499) 181-03-93
		</p>
		<p align="center">
			 129226, ������, ��. �.����, ��� 3, ������� � 213, 2 ����
		</p>
		<p align="center">
			 ������� ���������: 181-38-68
		</p>
		<p align="center">
			 ����: (499)181-80-74
		</p>
		<p align="center">
			 e-mail: <a href="mailto:priemkom@vgik.info"><b>priemkom@vgik.info</b></a>
		</p>
		<p align="center">
			 �������� �����: 129226, ������, ��. �.����, ��� 3
		</p>
 <br>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>