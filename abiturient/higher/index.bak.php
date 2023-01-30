<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Абитуриентам");

?><br>
<table cellpadding="1" cellspacing="1">
<tbody>
<tr>
	<td>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"abiturient_regulations",
	array(
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"IBLOCK_ID" => "56",	// Инфоблок
		"IBLOCK_TYPE" => "ABITURIENT",	// Тип инфоблока
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_FIELDS" => "",	// Поля разделов
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "/abiturient/higher/index.php?SECTION_ID=#SECTION_ID#",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => "",	// Свойства разделов
		"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
	)
);?><br>
	</td>
	<td height="" width="300">
	</td>
	<td style="vertical-align:top">
		 <?
if (!isset($_GET['SECTION_ID']))
{
?> <a href="http://www.vgik.info/science/graduate/aspirantura/index.php"><span style="color: #9d0a0f;"><b>Аспирантура</b></span></a>
		<div>
 <b><a href="http://www.vgik.info/science/graduate/aspirantura-stazhirovka/index.php"><span style="color: #9d0a0f;">Ассистентура-стажировка</span></a></b>
		</div>
		 <? } ?>
	</td>
</tr>
</tbody>
</table>
<div>
	<div>
 <a href="http://vgik.info/today/creativelife/detail.php?ID=5309"><b><span style="color: #9d0a0f;">Вниманию абитуриентов!</span></b></a><br>
 <br>
		<p align="center">
			 Ответственный секретарь Приёмной комиссии
		</p>
		<p align="center">
			 Закрацкая Марина Константиновна
		</p>
		<p align="center">
			 Телефон:(499) 181-03-93
		</p>
		<p align="center">
			 129226, Москва, ул. В.Пика, дом 3, комната № 213, 2 этаж
		</p>
		<p align="center">
			 Телефон ректората: 181-38-68
		</p>
		<p align="center">
			 Факс: (499)181-80-74
		</p>
		<p align="center">
			 e-mail: <a href="mailto:priemkom@vgik.info"><b>priemkom@vgik.info</b></a>
		</p>
		<p align="center">
			 Почтовый адрес: 129226, Москва, ул. В.Пика, дом 3
		</p>
 <br>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>