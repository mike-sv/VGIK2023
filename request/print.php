<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<script>
window.onload=window.print();
</script>
<?
debug($_SERVER);
$ID = isset($_REQUEST['ID']) ? intval($_REQUEST['ID']) : 0;
if(CModule::IncludeModule('iblock'))
{
	$rsElement = CIBlockElement::GetList(array(), array('IBLOCK_ID' => 84, 'ACTIVE' => 'Y', 'ID' => $ID), false, false, array('*', 'PROPERTY_BOOK', 'PROPERTY_QUANTITY', 'PROPERTY_FROM_R'));
	$arElement = $rsElement -> GetNext();
	if($arElement)
	{
		$rsAuther = CIBlockElement::GetList(array(), array('IBLOCK_ID' => 83, 'ID' => $arElement['PROPERTY_BOOK_VALUE']), false, false, array('NAME', 'PROPERTY_AUTHOR'));
		$arAuther = $rsAuther->Fetch();?>
			<table width="700" border="0">
			<tr>
				<td align="right">
				<div style="text-align:justify; width:235px;">
					���������� �� ����������,<br>
					������� � ������������� ������<br>
					�.�. ���������<br>
					��  <?=$arElement['PROPERTY_FROM_R_VALUE']?>
				</div>
				</td>
			</tr>
			<tr>
				<td height="200">&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><h2>��������� �������</h2></td>
			</tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����� ������  &laquo;<?=$arAuther['NAME']?>&raquo; <?=$arAuther['PROPERTY_AUTHOR_VALUE']?> � ���������� <?=$arElement['PROPERTY_QUANTITY_VALUE']?> ����������� ��� ������.</td>
			</tr>
			<tr>
				<td height="70">&nbsp;</td>
			</tr>
			<tr>
				<td  align="right"><?=date('d.m.Y')?> �.</td>
			</tr>
			<tr>
				<td  align="right">______________ <?=$arElement['NAME']?></td>
			</tr>
			</table>
<?	}
}
else 
{
	echo '������ ����������� ������.<br>
	���������� � ��������������.';
}
?>