<?php
	////////////////////////////////////////////
	//	ГЛОБАЛЬНЫЕ ФУНКЦИИ
	////////////////////////////////////////////

	if (function_exists('mb_substr_replace') === false)
	{
		function mb_substr_replace($string, $replacement, $start, $length = null, $encoding = null)
		{
			if (extension_loaded('mbstring') === true)
			{
				$string_length = (is_null($encoding) === true) ? mb_strlen($string) : mb_strlen($string, $encoding);
				if ($start < 0)
					$start = max(0, $string_length + $start);
				else if ($start > $string_length)
					$start = $string_length;
				if ($length < 0)
					$length = max(0, $string_length - $start + $length);
				else if ((is_null($length) === true) || ($length > $string_length))
					$length = $string_length;
				if (($start + $length) > $string_length)
					$length = $string_length - $start;
				if (is_null($encoding) === true)
					return mb_substr($string, 0, $start) . $replacement . mb_substr($string, $start + $length, $string_length - $start - $length);
				return mb_substr($string, 0, $start, $encoding) . $replacement . mb_substr($string, $start + $length, $string_length - $start - $length, $encoding);
			}
			return (is_null($length) === true) ? substr_replace($string, $replacement, $start) : substr_replace($string, $replacement, $start, $length);
		}
	}

	// Вспомогательная функция для вынимания имени переменной.
	function _var_name(&$var, $scope = false, $prefix = 'unique', $suffix = 'value')
	{
		$vals = ($scope) ? $scope : $GLOBALS;
		$old = $var;
		$var = $new = $prefix.rand().$suffix;
		$var_name = false;
		foreach ($vals as $key => $val)
		{
			if ($val === $new)
			{
				$var_name = $key;
				break;
			}
		}
		$var = $old;
		return $var_name;
	}

	// Девелоперская функция для вывода содержимого переменной (особенно удобно для массивов).
	function echo_var(&$var)
	{
		echo '<pre style="background-color: white; text-align: left;">';
		$name = _var_name($var);
		if ($name != '')
			echo '<font style="color: blue; font-weight: bold;">$'.$name;
		else
			echo '<font style="color: red; font-weight: bold;">не определено';
		echo '</font><br><br>';

		// @include 'krumo.php';
		if (function_exists('krumo'))
		{
			echo '</pre>';
			krumo($var);
		}
		else
		{
			var_dump($var);
			echo '</pre>';
		}

	}

	// Девелоперская функция, возвращающая количество секунд, прошедших с начала выполнения скрипта.
	function mtime_cur()
	{
		$mtime = microtime();
		$mtime = explode(' ', $mtime);
		return $mtime[1] + $mtime[0];
	}

	function mtime_set_style($time)
	{
		$border = 'none';

		if ($time > 10)
		{
			$bgr_color = 'D50F04';
			$border = '1px solid #000000';
		}
		elseif ($time > 5)
			$bgr_color = 'E45803';
		elseif ($time > 3)
			$bgr_color = 'F4A501';
		elseif ($time > 1)
			$bgr_color = 'FFD800';
		elseif ($time > 0.5)
			$bgr_color = 'DCDD02';
		elseif ($time > 0.1)
			$bgr_color = '9AE805';
		else
		{
			$bgr_color = '33F70A';
			if ($time < 0.01)
			{
				$border = '1px solid #FFFFFF';
				if ($time < 0.0001)
					$time = '<0.0001';
			}
		}

		$str = '<font style="background-color: #'.$bgr_color.'; border: '.$border.';"><b>'.$time.'</b></font>';

		return $str;
	}

	if (!function_exists('mb_str_replace'))
	{
		function mb_str_replace($needle, $replacement, $haystack)
		{
			return implode($replacement, mb_split($needle, $haystack));
		}
	}

	/*
		Процедура sort_mas() сортирует массив по указанным полям.

		Параметры:
		&$mas					- двумерный массив; передаётся по ссылке. После выполнения процедуры массив будет отсортирован в соответствии с указанными аттрибутами.
		$attribs = '0,ASC,0'	- Атрибуты сортировки массива. Атрибуты перечисляются группами, разделёнными точкой с запятой (';'). Самих атрибутов в группе может быть 3, обязательным является только первый. Сами атрибуты отделяются друг от друга запятой (','). Атрибуты следующие:
		- Поле, по которому необходимо сортировать массив (либо индекс, либо название поля для ассоциативных массивов).
		- Порядок сортировки ('ASC' или 'DESC'). Если здесь 'ASC' (по умолчанию), то сортировка по возрастанию, в противном случае - по убыванию.
		- Тип сравнения значений при сортировке. Если '0' (по умолчанию), то сравнение обычное (регулярное), если '1' - натуральное сравнение (т. н. "человеческое" :-) ). Различия можно проиллюстрировать следующим примером.
		Допустим, у нас есть массив $mas:
		-------------------------
		|  'id'	 |   'field_1'	|
		-------------------------
		|	1	 |	  value_1	|
		|	2	 |	  value_12	|
		|	3	 |	  value_11	|
		|	4	 |	  value_2	|
		-------------------------
		Используем процедуру:

		sort_mas($mas, 'field_1'); // Сортировка по полю 'field_1', по возрастанию, регулярное сравнение

		Результат:
		-------------------------
		|  'id'	 |   'field_1'	|
		-------------------------
		|	1	 |	  value_1	|
		|	3	 |	  value_11	|
		|	2	 |	  value_12	|
		|	4	 |	  value_2	|
		-------------------------
		Каждый символ одной строки сравнивается последовательно с соответствующим символом другой строки. В итоге получаем немного непривычный порядок строк.
		Теперь выставим натуральный тип сравнения:

		sort_mas($mas, 'field_1,ASC,1'); // Сортировка по полю 'field_1' (по возрастанию, натуральное сравнение)

		Результат:
		-------------------------
		|  'id'	 |   'field_1'	|
		-------------------------
		|	1	 |	  value_1	|
		|	4	 |	  value_2	|
		|	3	 |	  value_11	|
		|	2	 |	  value_12	|
		-------------------------
		Как видим, для чисел натуральный тип сравнения может оказаться более предпочтительным.
		Как уже указывалось выше, сортировку можно делать по нескольким полям. Группы атрибутов сортировки в таком случае будут отделяться друг от друга точкой с запятой. Пример:

		sort_mas($mas, 'field_1;field_2,DESC;field_3,ASC,1'); // Сортировка по полям 'field_1' (по возрастанию, регулярное сравнение), 'field_2' (по убыванию, регулярное сравнение) и 'field_3' (по возрастанию, натуральное сравнение)

		В приведённом примере сперва все записи будут отсортированы по полю 'field_1' с указанными настройками, затем внутри каждой из групп записей, имеющих одинаковые значения в поле 'field_1', будет применена сортировка по полю 'field_2' с соответствующими параметрами, и т. д.
	*/
	function sort_mas(&$mas, $attribs = '0,ASC,1')
	{
		if (($so_mas = sizeof($mas)) < 2)
			return false;

		$groups = explode(';', $attribs);
		if (trim($groups[0]) == '')
			return false;

		// Одномерный массив для проверки и отсеивания повторяющихся полей.
		$fields_list = array();

		$so_groups = sizeof($groups);
		for ($i = 0; $i < $so_groups; $i++)
		{
			$groups[$i] = explode(',', trim($groups[$i]));

			if (!$groups[$i][0] = trim($groups[$i][0]))
				continue;

			// Если поле уже есть в списке полей сортировки, то мы его пропускаем.
			if (in_array($groups[$i][0], $fields_list))
				continue;

			// Заносим поле в список полей сортировки.
			$fields_list[] = $groups[$i][0];

			$fields[] = array
			(
				'field'		=> $groups[$i][0],
				'sort_asc'	=> !((isset($groups[$i][1])) && (in_array(mb_strtolower($groups[$i][1]), array('d', 'desc')))),
				'nat_cmp'	=> (isset($groups[$i][2])) ? $groups[$i][2] : false
			);
		}

		if (!isset($fields))
			return false;

		// Проверяем, идут ли индексы массива по порядку. Пока будем проверять только, чтобы первый элемент имел нулевой индекс. В перспективе, если этого будет недостаточно, можно сделать проверку всех индексов, но это тоже будет не очень надёжно.
		reset($mas);
		$ord_indexes = (!key($mas));

		$so_fields = sizeof($fields);

		// Создаём рабочую копию нашего массива. Именно по нему мы будем проходить, сортируя строки.
		for ($i = 0; $i < $so_fields; $i++)
		{
			foreach ($mas as $key => $val)
			{
				if (!$i)
				{
					// Заносим индексы исходного массива в одномерный массив.
					$mas_indexes[] = $key;
				}

				$val = (array)$val;

				if (!$work_mas[$key][$fields[$i]['field']] = datetime2timestamp($val[$fields[$i]['field']]))
				{
					if (!$work_mas[$key][$fields[$i]['field']] = time2timestamp($val[$fields[$i]['field']]))
						$work_mas[$key][$fields[$i]['field']] = mb_strtolower($val[$fields[$i]['field']]);
				}
			}
		}

		for ($i = 0; $i < $so_fields; $i++)
		{
			// Количество итераций, которое мы должны сделать при обходе цикла. Изначально итераций должно быть на 1 меньше, чем элементов в массиве, ведь мы должны дойти только до предпоследней. После каждого полного прохода по циклу количество итераций должно сокращаться на 1, поскольку каждый полный проход по циклу гарантированно будет переносить последний по значению элемент в конец массива.

			for ($j = 1; $j < $so_mas; $j++)
			{
				for ($l = $j-1; $l >= 0; $l--)
				{
					// Текущий элемент массива.
					$next = &$work_mas[$mas_indexes[$l+1]];
					// Следующий элемент массива.
					$cur = &$work_mas[$mas_indexes[$l]];

					// Если мы сортируем по второму и далее полю, имеет смысл сравнивать только те строки, у которых значения из предыдущих сортируемых полей полностью совпадают. Для этого перебираем все предыдущие поля.
					for ($k = 0; $k < $i; $k++)
					{
						if ($cur[$fields[$k]['field']] != $next[$fields[$k]['field']])
							continue 2;
					}

					if ($fields[$i]['sort_asc'])
					{
						if ($fields[$i]['nat_cmp'])
							$change = (strnatcmp($cur[$fields[$i]['field']], $next[$fields[$i]['field']]) > 0);
						else
							$change = ($cur[$fields[$i]['field']] > $next[$fields[$i]['field']]);
					}
					else
					{
						if ($fields[$i]['nat_cmp'])
							$change = (strnatcmp($cur[$fields[$i]['field']], $next[$fields[$i]['field']]) < 0);
						else
							$change = ($cur[$fields[$i]['field']] < $next[$fields[$i]['field']]);
					}

					// Если надо поменять местами 2 элемента...
					if ($change)
					{
						$temp_el = $mas_indexes[$l+1];
						$mas_indexes[$l+1] = $mas_indexes[$l];
						$mas_indexes[$l] = $temp_el;
					}
					else
						break;
				}
			}
		}

		$work_mas = array();
		// Если индексы простые, выходной массив будет иметь точно такие же индексы.
		if ($ord_indexes)
		{
			for ($i = 0; $i < $so_mas; $i++)
				$work_mas[] = $mas[$mas_indexes[$i]];
		}
		// В противном случае сохраняем индексы.
		else
		{
			for ($i = 0; $i < $so_mas; $i++)
				$work_mas[$mas_indexes[$i]] = $mas[$mas_indexes[$i]];
		}

		$mas = $work_mas;

		return true;
	}

	/*
		Формируем из отдельных фамилии, имени и отчества единую строку. Функция не ставит лишних пробелов, если нет имени или отчества. Если последний параметр == true, имя и отчество обрезаются до инициалов.
	*/
	function get_fio(&$sname, &$name, &$fname, $short = false)
	{
		$res = $sname;
		if ($name != '')
			$res .= ' '.($short ? mb_substr($name, 0, 1).'.' : $name);
		if ($fname != '')
			$res .= ' '.($short ? mb_substr($fname, 0, 1).'.' : $fname);
		if ($res == '')
			$res = '&nbsp;';
		return $res;
	}

	/*
		Подсветка подстроки внутри строки. Функция временная, в будущем планируется более продвинутая - с возможностью обработки массивов, возможно, с интеграцией с запросом (чтоб условие для запроса формировалось также внутри функции).
	*/
	function search_highlight($search, &$subject)
	{
		if ($search == '')
			return false;

		$search_cor = mb_strtolower($search);
		$subject_cor = mb_strtolower($subject);
		$search_cor = str_replace('ё', 'е', $search_cor);
		$subject_cor = str_replace('ё', 'е', $subject_cor);

		$start = stripos($subject_cor, $search_cor);
		if ($start === false)
			return false;

		$search_len = mb_strlen($search);
		$subject = mb_substr($subject, 0, $start).'<font style="font-weight: bold; color: black; background-color: yellow;">'.mb_substr($subject, $start, $search_len).'</font>'.mb_substr($subject, $start + $search_len);
		return true;
	}

	$limit = '';

	function load_items(&$input_mas)
	{
		global $_CFG, $limit, $limit_per_page, $print;

		if ($print)
			return;

		if (!isset($_CFG['items_per_page']))
			$_CFG['items_per_page'] = 150;

		$qty = sizeof($input_mas);
		if ($qty > 0)
		{
			$output_mas = array();
			$limit = (isset($_POST['limit'])) ? $_POST['limit'] : '';
			$full_update = !$GLOBALS['ajax'];// (isset($_GET['full_update'])) ? $_GET['full_update'] : '';
			$items_per_load = $_CFG['items_per_page'];
			$tmp_mas = $input_mas;

			if ($limit != '')
			{
				$limit_parts = explode(',', $limit);
				if ($full_update != '1')
					$limit_start = $limit_parts[0];
				else
				{
					$limit_start = 0;
					$limit = '';
				}
				if (isset($limit_parts[1]))
					$limit_final = $limit_parts[1];
				else
					$limit_final = $_CFG['items_per_page'];
			}
			else
			{
				$limit_start = 0;
				$limit_final = $items_per_load;
			}
			$limit_per_page = $limit_start.','.$limit_final;

			// Если требуется подгрузка данных, а не полное обновление...
			if ($full_update != '1')
			{

				if (($limit_start < $qty) && ($limit_final <= $qty))
				{
					$last_el = 0;
					$i = 0;
					foreach ($tmp_mas as $k => $v)
					{
						if ($i < $limit_start)
						{
							$i++;
							continue;
						}
						if ($i == $limit_final)
							break;

						$last_el = $k;
						$v['last_row'] = '';
						$output_mas[$k] = $v;
						$i++;
					}
					$output_mas[$last_el]['last_row'] = $limit_final;
				}
				elseif (($limit_start < $qty) && ($limit_final > $qty))
				{
					$last_el = 0;
					$i = 0;
					$diff = $qty - $limit_start;

					foreach ($tmp_mas as $k => $v)
					{
						if ($i < $limit_start)
						{
							$i++;
							continue;
						}
						if ($i++ >= $i + $diff)
							break;
						$last_el = $k;
						$v['last_row'] = '';
						$output_mas[$k] = $v;
					}
					$output_mas[$last_el]['last_row'] = '';
				}
			}
			else
			{
				if ($qty >= $limit_final)
				{
					$last_el = 0;
					$i = 0;
					foreach ($tmp_mas as $k => $v)
					{
						if ($i++ >= $limit_final)
							break;
						$last_el = $k;
						$v['last_row'] = '';
						$output_mas[$k] = $v;
					}
					$output_mas[$last_el]['last_row'] = $limit_final;
				}
				else
				{
					$last_el = 0;
					$i = 0;
					foreach ($tmp_mas as $k => $v)
					{
						if ($i++ >= $qty)
							break;
						$last_el = $k;
						$v['last_row'] = '';
						$output_mas[$k] = $v;
					}
					$output_mas[$last_el]['last_row'] = '';
				}
			}
			$input_mas = array();
			$input_mas = $output_mas;
		}
	}

	// Возвращает строку фильтра по дате $date с именем поля $field_name.
	function date_filter($date, $field_name)
	{
	  $date_mas = explode(' ', $date);
	  
	  $date_filter = '';
	  for ($i = 0; $i < sizeof($date_mas); $i++)
	  {
		${'date_mas_'.$i} = explode('.',$date_mas[$i]);
		$str_filter = '';
		
		if (sizeof(${'date_mas_'.$i}) == 3)
		{
			$db_date_res = ${'date_mas_'.$i}[0].'.'.${'date_mas_'.$i}[1].'.'.${'date_mas_'.$i}[2];
			$db_date_res = db_date($db_date_res);
			
			if ($db_date_res)
				$str_filter .= $db_date_res;
			else
				$str_filter .= "0000-00-00";	
		}
		else
		{ 
			for ($j = sizeof(${'date_mas_'.$i}) - 1; $j > 0; $j--) 
			  $str_filter .= ${'date_mas_'.$i}[$j].'-';  
			$str_filter .= ${'date_mas_'.$i}[$j];
					  
		}
		$date_filter .= ' AND ('.$field_name.' LIKE "%'.$str_filter.'%")';
	  }
	  return $date_filter;
	}

	/*
		Функция получает последнее (максимальное) значение поля $field в таблице $table. Кроме того, с помощью $sql_where можно применить фильтр к запросу (простое текстовое условие, вставляется внутрь WHERE).
	*/
	function get_last_value($table, $field, $sql_where = '')
	{
		global $db;

		if ($sql_where != '')
			$sql_where = ' WHERE '.$sql_where;

		/*
		foreach ($group_array as $gfield => &$gvalue)
			$sql_where .= ' AND ('.$gfield.' = \''.$gvalue.'\')';
		*/

		$result = $db->query2array_v('SELECT MAX(CAST('.$field.' AS DECIMAL))
			FROM '.$table.'
			'.$sql_where);
/*
		echo 'SELECT MAX(CAST('.$field.' AS DECIMAL))
			FROM '.$table.'
			'.$sql_where;
*/
		if ($result[0] == null)
			return false;

		return $result[0];
	}

	function get_user_ip()
	{
		return (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : getenv('REMOTE_ADDR'));
	}
?>