<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ВГИКовцы о 32 ММКФ");
?><?$APPLICATION->IncludeComponent("bitrix:news.detail", "mmkf", Array(
	"IBLOCK_TYPE" => "32mmkf",	// Тип информационного блока (используется только для проверки)
	"IBLOCK_ID" => "75",	// Код информационного блока
	"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID новости
	"ELEMENT_CODE" => "",	// Код новости
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"FIELD_CODE" => array(	// Поля
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(	// Свойства
		0 => "AUTHOR",
		1 => "",
	),
	"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_SHADOW" => "Y",	// Включить затенение
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"DISPLAY_PANEL" => "N",	// Добавлять в админ. панель кнопки для данного компонента
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	"PAGER_TITLE" => "Страница",	// Название категорий
	"PAGER_TEMPLATE" => "",	// Название шаблона
	"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
	"DISPLAY_NAME" => "N",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
	"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
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
			if(empty($NAME)) $arError[] = 'Введите имя';
			if(empty($COMMENT)) $arError[] = 'Введите комментарий';
			// check captcha
			if (!$APPLICATION->CaptchaCheckCode($_REQUEST["captcha_word"], $_REQUEST["captcha_sid"]))
			{
				$arError[] = "Неверно введено слово с картинки";
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
				echo '<span style="color:#008800">Ваш комментарий добавлен</span>';
				$show_form = false;
			}
		}
	
		if($show_form)
		{
		?>
			<h3>Добавить комментарий</h3>
			<?foreach ($arError as $sError) echo '<span style="color:red">'.$sError.'</span><br>';?>	
			<form action="#comment" method="POST">
				<?=bitrix_sessid_post()?>
				<?$captcha_sid = htmlspecialchars($APPLICATION->CaptchaGetCode())?>
				<table width="100%" border="0" cellpadding="3" cellspacing="3">
				<tr>
					<td width="15%">Имя:</td>
					<td><input type="text" style="width:300px;" name="NAME" value="<?=$NAME?>"></td>
				</tr>
				<tr>
					<td valign="top">Комментарий:</td>
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
					<td>Введите слово с картинки:<span class="starrequired">*</span>:</td>
					<td><input type="text" style="width:300px;" name="captcha_word" maxlength="50" value=""></td>
				</tr>
				
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Добавить" name="submit"></td>
				</tr>
				<tr><td colspan="2">Все поля обязательны для заполнения</td></tr>
				</table>
			</form>
	<?	}
	}
}
?>
<p><a href="/mmkf/">Вернуться в раздел</a></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>