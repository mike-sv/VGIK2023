<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>
<?
$SECTION_ID = isset($_GET['ID']) ? intval($_GET[ID]) : 0;
if (CModule::IncludeModule('iblock') && $SECTION_ID > 0)
{
	/* Текущая мастерская */
	$rsWorks = CIBlockSection::GetList(array(), array('IBLOCK_CODE' => $arIBlockCodes, 'ID' => $SECTION_ID, 'ACTIVE' => 'Y'), false, array('ID', 'IBLOCK_ID', 'NAME'));
	$arWorks = $rsWorks -> GetNext();
	
	$rsPath = CIBlockSection::GetNavChain($arWorks['IBLOCK_ID'], $arWorks['ID']);
	while ($arPath = $rsPath -> GetNext()) {
		$APPLICATION -> AddChainItem($arPath['NAME'], '/student/schedule/index.php?CATH_ID='.$arPath['ID']); /*Добавим в строку навигации*/
	}

	$APPLICATION -> SetTitle($arWorks['NAME']); /* Ставим заголовок */
	
	
	$arIBlockCodes = array('student_schedule_producer','student_schedule_actor','student_schedule_cathedra','student_schedule_artistic','student_schedule_animation','student_schedule_cameraman','student_schedule_scenario','student_schedule_prodeconom'); /* В каких иблоках искать*/

	$arTime = array();
	$rsProp = CIBlockProperty::GetPropertyEnum("TIME", Array('SORT' => 'ASC'), Array("IBLOCK_ID"=>$arWorks['IBLOCK_ID']));
	while ($arProp = $rsProp -> GetNext()) {
		$arTime[$arProp['ID']] = $arProp;
	}
	
	$arSchedule = array();
	/* Получаем дни недели */
	$arCourses = array();
	$rsSection = CIBlockSection::GetList(array(), array('IBLOCK_CODE' => $arIBlockCodes, 'ACTIVE' => 'Y', 'SECTION_ID' => $SECTION_ID), false, array('ID', 'NAME', 'IBLOCK_ID'));
	while ($arSection = $rsSection -> GetNext()) {
		/*Получаем курсы*/
		$rsCourse = CIBlockSection::GetList(array('SORT' => 'ASC'),array('IBLOCK_ID' => $arSection['IBLOCK_ID'], 'SECTION_ID' => $arSection['ID'], 'ACTIVE' => 'Y'));
		while ($arCourse = $rsCourse -> GetNext()) {
			$arCourses[$arCourse['CODE']] = $arCourse;
			
			$rsLessons = CIBlockElement::GetList(array(), array('IBLOCK_ID' => $arSection['IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => $arCourse['ID']),false,false, array('ID', 'NAME', 'PROPERTY_TIME'));
			while ($arLesson = $rsLessons -> GetNext()) {
				$arCourse['LESSONS'][$arLesson['PROPERTY_TIME_ENUM_ID']] = $arLesson;
			}
			
			$arSection['COURSE'][$arCourse['CODE']] = $arCourse;
		}
		
		
		$arSchedule[$arSection['CODE']] = $arSection;
	}


	echo '<table border=1>
			<tr><td colspan=2></td>';
		foreach ($arCourses  as $arCourseItem)
		{
			echo '<td>'.$arCourseItem['NAME'].'</td>';
		}
	echo '</tr>';

	foreach ($arSchedule as $weekdayCode => $arWeekDay)
	{
		echo '<tr>
					<td rowspan="'.count($arTime).'">'.$arWeekDay['NAME'].'</td>';
					$i = 0;
					foreach ($arTime as $valueID => $arTimeItem)
					{
						$i++;
						if($i>1) echo '<tr>';
						echo '<td>'.$arTimeItem['VALUE'].'</td>';
						foreach ($arCourses as $courseCode => $arCourseItem)
						{
							echo '<td align="center">'.(isset($arWeekDay['COURSE'][$courseCode]['LESSONS'][$valueID]['NAME']) ? $arWeekDay['COURSE'][$courseCode]['LESSONS'][$valueID]['NAME'] : '-').'</td>';
						}
					}
		echo '</tr>';
	}
	echo '</table>';
}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>