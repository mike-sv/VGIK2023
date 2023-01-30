<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� � 32 ����");
?><?$APPLICATION->IncludeComponent("bitrix:news.detail", "mmkf", Array(
	"IBLOCK_TYPE" => "32mmkf",	// ��� ��������������� ����� (������������ ������ ��� ��������)
	"IBLOCK_ID" => "75",	// ��� ��������������� �����
	"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID �������
	"ELEMENT_CODE" => "",	// ��� �������
	"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
	"FIELD_CODE" => array(	// ����
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(	// ��������
		0 => "AUTHOR",
		1 => "",
	),
	"IBLOCK_URL" => "",	// URL �������� ��������� ������ ��������� (�� ��������� - �� �������� ���������)
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"AJAX_OPTION_SHADOW" => "Y",	// �������� ���������
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "3600",	// ����� ����������� (���.)
	"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
	"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
	"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
	"DISPLAY_PANEL" => "N",	// ��������� � �����. ������ ������ ��� ������� ����������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"SET_STATUS_404" => "N",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
	"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
	"USE_PERMISSIONS" => "N",	// ������������ �������������� ����������� �������
	"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
	"PAGER_TITLE" => "��������",	// �������� ���������
	"PAGER_TEMPLATE" => "",	// �������� �������
	"PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
	"DISPLAY_DATE" => "Y",	// �������� ���� ��������
	"DISPLAY_NAME" => "N",	// �������� �������� ��������
	"DISPLAY_PICTURE" => "Y",	// �������� ��������� �����������
	"DISPLAY_PREVIEW_TEXT" => "N",	// �������� ����� ������
	"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	),
	false
);?>
<a name="comment"></a>
<?

if(CModule::IncludeModule('iblock'))
{

	$ELEMENT_ID = isset($_REQUEST['ELEMENT_ID']) ? intval($_REQUEST['ELEMENT_ID']) : 0;
	
	$arElements = array();
	
	$rsElement = CIBlockElement::GetList(array(), array('IBLOCK_ID' => 76, 'ACTIVE' => 'Y', 'PROPERTY_LINK_ELEMENT' => $ELEMENT_ID));
	while ($arElement = $rsElement -> GetNext()) {
		$arElements[] = $arElement;
	}
	
	if(count($arElements) > 0)
	{
		foreach ($arElements as $arElement)
		{
			echo '<b>'.$arElement['NAME'].'</b>&nbsp;'.$arElement['DATE_CREATE'].'<br>';
			echo $arElement['DETAIL_TEXT'].'<br><br>';
		}
	}

	$NAME = isset($_REQUEST['NAME']) ? strip_tags($_REQUEST['NAME']) : '';
	$COMMENT = isset($_REQUEST['COMMENT']) ? strip_tags($_REQUEST['COMMENT']) : '';
	$show_form = true;
	$arError = array();
	
	if($ELEMENT_ID > 0)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['submit']))
		{
			if(empty($NAME)) $arError[] = '������� ���';
			if(empty($COMMENT)) $arError[] = '������� �����������';
			// check captcha
			if (!$APPLICATION->CaptchaCheckCode($_REQUEST["captcha_word"], $_REQUEST["captcha_sid"]))
			{
				$arError[] = "������� ������� ����� � ��������";
			}
			if(count($arError) == 0)
			{
				$el = new CIBlockElement;
				$PROP = array();
				$PROP['LINK_ELEMENT'] = $ELEMENT_ID;
				$arLoadProductArray = Array(
					"IBLOCK_SECTION_ID" => false,
					"IBLOCK_ID"      => 76,
					"PROPERTY_VALUES"=> $PROP,
					"NAME"           => $NAME,
					"ACTIVE"         => "N",
					"DETAIL_TEXT"    => $COMMENT,
				);
				if(!$el->Add($arLoadProductArray)) $arError[] = $el->LAST_ERROR;
			}
		
			if(count($arError) > 0)
			{
				$show_form = true;
			}else 
			{
				echo '<span style="color:#008800">��� ����������� ��������</span>';
				$show_form = false;
			}
		}
	
		if($show_form)
		{
		?>
			<h3>�������� �����������</h3>
			<?foreach ($arError as $sError) echo '<span style="color:red">'.$sError.'</span><br>';?>	
			<form action="#comment" method="POST">
				<?=bitrix_sessid_post()?>
				<?$captcha_sid = htmlspecialchars($APPLICATION->CaptchaGetCode())?>
				<table width="100%" border="0" cellpadding="3" cellspacing="3">
				<tr>
					<td width="15%">���:</td>
					<td><input type="text" style="width:300px;" name="NAME" value="<?=$NAME?>"></td>
				</tr>
				<tr>
					<td valign="top">�����������:</td>
					<td><textarea name="COMMENT"  style="width:300px; height:100px;"><?=$COMMENT?></textarea></td>
				</tr>
				
				
				<tr>
					<td><?=GetMessage("IBLOCK_FORM_CAPTCHA_TITLE")?></td>
					<td>
						<input type="hidden" name="captcha_sid" value="<?=$captcha_sid?>" />
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$captcha_sid?>" width="180" height="40" alt="CAPTCHA" />
					</td>
				</tr>
				<tr>
					<td>������� ����� � ��������:<span class="starrequired">*</span>:</td>
					<td><input type="text" style="width:300px;" name="captcha_word" maxlength="50" value=""></td>
				</tr>
				
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="��������" name="submit"></td>
				</tr>
				<tr><td colspan="2">��� ���� ����������� ��� ����������</td></tr>
				</table>
			</form>
	<?	}
	}
}
?>
<p><a href="/mmkf/">��������� � ������</a></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>