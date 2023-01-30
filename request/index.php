<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Заявки");
if(CModule::IncludeModule('iblock'))
{
	$FROM_R 	= isset($_REQUEST['from_r']) ? strip_tags($_REQUEST['from_r']) : '';
	$FROM_I 	= isset($_REQUEST['from_i']) ? strip_tags($_REQUEST['from_i']) : '';
	$AUTHOR 	= isset($_REQUEST['author']) ? intval($_REQUEST['author']) : 0;
	$BOOK 		= isset($_REQUEST['name']) ? intval($_REQUEST['name']) : 0;
	$QUANTITY 	= isset($_REQUEST['quantity']) ? intval($_REQUEST['quantity']) : 0;
	
	$arError = array();
	$REQ_ID = 0;
	if(check_bitrix_sessid() && isset($_POST['go']) && $_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
		if(empty($FROM_R)) $arError[] = 'Не заполнено поле "От кого (в родит.падеже)"';
		if($BOOK == 0) $arError[] = 'Не выбрана книга';
		if(empty($FROM_I)) $arError[] = 'Не заполнено поле "От кого (в именит.падеже)"';
		if($QUANTITY == 0) $arError[] = 'Не указано количество';
		
		if(count($arError) == 0)
		{
			$el = new CIBlockElement;
			$PROP = array();
			$PROP['BOOK'] 		= $BOOK;
			$PROP['QUANTITY'] 	= $QUANTITY;
			$PROP['FROM_R'] 	= $FROM_R;
			$arLoadProductArray = Array(
				"IBLOCK_ID"      => 84,
				"PROPERTY_VALUES"=> $PROP,
				"NAME" 			 => $FROM_I,
				"ACTIVE" 		 => "Y",
			);
			if($REQ_ID = $el->Add($arLoadProductArray))
			{
				$rsElement = CIBlockElement::GetList(array(), array('IBLOCK_ID' => 83, 'ID' => $BOOK), false, false, array('NAME', 'PROPERTY_AUTHOR'));
				$arBook = $rsElement->GetNext();
				
				$arEventFields = array(
					'FROM' 		=> $FROM_I,
					'QUANTITY' 	=> $QUANTITY,
					'BOOK_NAME' => $arBook['NAME'].' '.$arBook['PROPERTY_AUTHOR_VALUE'],
					'DATE' 		=> date('d.m.Y')
				);
				
				$arrSITE =  array('s1');
				CEvent::Send("REQUEST_BOOK", $arrSITE, $arEventFields, "N", 94);
			}
			else
			{
				echo 'Ошибка: <font color="red">'.$el->LAST_ERROR.'</font><br>';
			}
		}
		else 
		{
			echo '<p><font color="red">';
			foreach ($arError as $error)
			{
				echo $error.'<br>';
			}
			echo '</font></p>';
		}
	}

	if($REQ_ID > 0)
	{
		echo '<p>Ваша заявка отправлена.<br>
<br><br>
<a target="_blank" href="print.php?ID='.$REQ_ID.'">Распечатать заявку</a></p>';
	}else 
	{?>
	<p>Раздел работает в тестовом режиме.</p>
		<form action="" method="POST">
		<?=bitrix_sessid_post()?>
		<table width="100%">
		<tr>
			<td width="270" nowrap>От кого (в родит.падеже):</td>
			<td><?echo '<input type="text" name="from_r" value="'.$FROM_R.'" style="width:300px;">';?></td>
		</tr>
		<tr>
			<td>Автор книги:</td>
			<td>
				<?
				
					CAjax::Init();
					$rsSection = CIBlockSection::GetList(array('SORT' => 'ASC', 'NAME' => 'ASC'), array('ACTIVE' => 'Y', 'IBLOCK_ID' => 83, 'DEPTH_LEVEL' => 1));
					echo '<select name="author" onchange="jsAjaxUtil.InsertDataToNode(\'/request/name.php?ID=\'+this.value, \'name\', false); return falses;" style="width:300px;">
					<option value="false">';
					while ($arAuthor = $rsSection -> GetNext()) {
						echo '<option value="'.$arAuthor['ID'].'" '.($AUTHOR == $arAuthor['ID'] ? 'selected' : '').'>'.$arAuthor['NAME'];
					}
					echo '</select>';
				
				?>
			</td>
		</tr>
		<tr>
			<td >Название книги</td>
			<td id="name"><?$APPLICATION->IncludeFile('/request/name.php', array('SECTION_ID'=>$AUTHOR, 'NAME' => $BOOK));?></td>
		</tr>
		<tr>
			<td>Количество экземпляров</td>
			<td><?echo '<input type="text" name="quantity" value="'.($QUANTITY == 0 ? '' : $QUANTITY).'" style="width:300px;">';?></td>
		</tr>
		<tr>
			<td nowrap>От кого (в именит.падеже):</td>
			<td><?echo '<input type="text" name="from_i" value="'.$FROM_I.'" style="width:300px;">';?></td>
		</tr>
		<tr>
			<td colspan="2"><br><input type="submit" name="go" value="Отправить"></td>
		</tr>
		</table>
		</form>
	
<?	}
}?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>