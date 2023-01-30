<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
$SECTION_ID = isset($arParams['SECTION_ID']) ? intval($arParams['SECTION_ID']) : 0;
$SECTION_ID = isset($_REQUEST['ID']) ? intval($_REQUEST['ID']) : $SECTION_ID;

$ELEMENT_ID = isset($arParams['NAME']) ? intval($arParams['NAME']) : 0;
if(CModule::IncludeModule('iblock'))
{
	$arFilter = array('IBLOCK_ID' => 83, 'ACTIVE' => 'Y');
	if($SECTION_ID != 0) $arFilter['SECTION_ID'] = $SECTION_ID;
	$rsElement = CIBlockElement::GetList(array('SORT' => 'ASC', 'NAME' => 'ASC'), $arFilter);
	echo '<select name="name"><option value="false">';
	while ($arElement = $rsElement -> GetNext()) {
		echo '<option value="'.$arElement['ID'].'" '.($NAME == $arElement['ID'] ? 'selected' : '').'>'.$arElement['NAME'];
	}
	echo '</select>';
}
?>