<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$SECTION_ID = isset($_GET['CATH_ID']) ? intval($_GET['CATH_ID']) : 0;

if(CModule::IncludeModule('iblock') && $SECTION_ID > 0)
{
	$arIBlockCodes = array('student_schedule_producer','student_schedule_actor','student_schedule_cathedra','student_schedule_artistic','student_schedule_animation','student_schedule_cameraman','student_schedule_scenario','student_schedule_prodeconom'); /* В каких иблоках искать*/
	$rsSection = CIBlockSection::GetList(array('SORT' => 'ASC'), array('ACTIVE' => 'Y', 'IBLOCK_CODE' => $arIBlockCodes, 'SECTION_ID' => $SECTION_ID));
	while ($arSection = $rsSection -> GetNext()) {
		echo str_repeat('&nbsp;', $arSection['DEPTH_LEVEL']*5).'<a href="/student/schedule/schedule.php?ID='.$arSection['ID'].'">'.$arSection['NAME'].'</a><br>';
	}
}
?>