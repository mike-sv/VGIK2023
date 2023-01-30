<?php
	/*
		Класс для работы с базой данных.
		Разработан by Shegelme на основе класса mysql.php неизвестного автора.
	*/
	class db
	{
		// Ссылка на БД.
		var $link = false;
		// Текст последнего запущенного на выполнение запроса (возможно, не выполненного).
		var $last_query_text = '<i>Запросов не было</i>';
		// Счётчик количества выполнявшихся запросов (в том числе и неудавшихся).
		var $query_counter = 0;
		var $query_list = array();
		// Ссылка на последний успешно выполненный запрос.
		var $last_query_id = false;

		/*
			Устанавливаем подключение к БД.
		*/
		function connect($host = 'localhost', $username = 'root', $passwd = '', $dbname = 'database', $show_error = true)
		{
			// Поскольку ниже мы используем метод mysqli_real_connect() для подключения с расширенными опциями, необходимо сначала инициализировать объект mysqli. Если это не удалось, значит, скорей всего, PHP-сервер не умеет работать с MySQLi.
			if (!$this->link = mysqli_init())
			{
				if ($show_error)
					$this->_show_message(true, mysqli_errno($this->link), mysqli_error($this->link), $query);
				return false;
			}

			// Устанавливаем таймаут на подключение к БД, равный 5 секундам. Если за это время подключение не будет установлено (такое особенно вероятно при корявом указании хоста), то выводим сообщение об ошибке.
			if (!mysqli_options($this->link, MYSQLI_OPT_CONNECT_TIMEOUT, 5))
			{
				if ($show_error)
					$this->_show_message(true, mysqli_errno($this->link), mysqli_error($this->link), $query);
				return false;
			}

			// Устанавливаем подключение к БД (в случае ошибки выводим сообщение).
			if (!@mysqli_real_connect($this->link, $host, $username, $passwd, $dbname))
			{
				if ($show_error)
					$this->_show_message(true, mysqli_connect_errno(), mysqli_connect_error());
				return false;
			}
			// Выставляем кодировку для запросов.
			mysqli_set_charset($this->link, "utf8");
			// Если всё прошло хорошо, метод вернёт true.
			return true;
		}
		
		
		/*
			Выполняем запрос.
		*/
		function query($query, $show_error = true)
		{
			// Сохраняем текст запроса в переменную.
			$this->last_query_text = $query;

			// Выполняем запрос.
			if (!($this->last_query_id = mysqli_query($this->link, $query)))
			{
				if ($show_error)
					$this->_show_message(true, mysqli_errno($this->link), mysqli_error($this->link), $query);
				return false;
			}
			$this->query_counter++;

			return $this->last_query_id;
		}

		/*
			Выполнение INSERT'a.
		*/
		function insert($table_name, $mas, $show_error = true)
		{
			$fields = $values = '';
			foreach ($mas as $k => $v)
			{
				$fields .= '`'.$k.'`,';
				$values .= $v.',';
			}
			$fields = substr($fields, 0, strlen($fields) - 1);
			$values = substr($values, 0, strlen($values) - 1);
			$sql = 'INSERT INTO '.$table_name.' ('.$fields.') VALUES ('.$values.');';
			// Сохраняем текст запроса в переменную.
			$this->last_query_text = $sql;

			// Выполняем запрос.
			$this->query($sql, $show_error);
		}

		/*
			Выполнение UPDATE'a.
		*/
		function update($table_name, $mas, $term = '', $show_error = true)
		{
			$f_v = '';
			foreach ($mas as $k => $v)
				$f_v .= '`'.$k.'` = '.$v.',';

			$f_v = substr($f_v, 0, strlen($f_v) - 1);
			$sql = 'UPDATE '.$table_name.' SET '.$f_v.' WHERE (1) AND '.$term;
			// Сохраняем текст запроса в переменную.
			$this->last_query_text = $sql;

			// Выполняем запрос.
			$this->query($sql, $show_error);
		}

		/*
			Возвращает строку из запроса в виде обычного массива (с числовыми индексами).
		*/
		function get_row($query_id = false)
		{
			if (!$query_id)
				$query_id = $this->last_query_id;
			return mysqli_fetch_row($query_id);
		}

		/*
			Возвращает строку из запроса в виде ассоциативного массива.
		*/
		function get_assoc($query_id = false)
		{
			if (!$query_id)
				$query_id = $this->last_query_id;
			return mysqli_fetch_assoc($query_id);
		}

		/*
			Возвращает строку из запроса в виде ассоциативного массива с числовыми индексами (т. е. можно использовать как числовые индексы, так и названия полей в качестве ключей).
		*/
		function get_array($query_id = false)
		{
			if (!$query_id)
				$query_id = $this->last_query_id;
			
			return mysqli_fetch_assoc($query_id);
			// return mysqli_fetch_array($query_id);
		}

		/*
			Выполняет запрос и возвращает двумерный массив с его результатами.
		*/
		function query2mas($query, $br2nl = false)
		{
			// Выполняем запрос.
			$this->query($query);

			// Определяем пустой выходной массив (если запрос ничего не вернёт, мы так и вернём пустой массив).
			$mas = array();
			while ($m = $this->get_array())
			{
				// $m_edited будет в конце концов заноситься в массив.
				$m_edited = $m;
				// Если нам надо убирать HTML'ные теги <br> из массива, мы пробегаем по всем элементам и заменяем их на пустые строки.
				if ($br2nl)
				{
					foreach ($m as $k => $v)
						$m_edited[$k] = str_replace('<br>', '', $v);
				}
				$mas[] = $m_edited;
			}
			return $mas;
		}

		/*
			Выполняет запрос и возвращает трёхмерный индексированный массив с его результатами. $index_field - поле, из которого будет браться индекс.
		*/
		function query2index_mas($query, $index_field = false, $create_3d_mas = false, $br2nl = false)
		{
			$this->query($query);

			$mas = array();
			while ($m = $this->get_array())
			{
				$m_edited = $m;

				if ($br2nl)
				{
					foreach ($m as $k => $v)
						$m_edited[$k] = str_replace('<br>', '', $v);
				}

				// Всё аналогично простому $query2mas, только на выходе получается 3-хмерный массив с индексами, которые берутся из поля $index_field.
				if ($create_3d_mas)
					$mas[$m[$index_field]][] = $m_edited;
				else
					$mas[$m[$index_field]] = $m_edited;
			}
			return $mas;
		}

		/*
			Выполняет запрос, вынимает первую строку и возвращает одномерный массив с содержимым этой строки.
		*/
		function query2array($query, $br2nl = false)
		{
			$this->query($query);

			$mas = array();
			if ($m = $this->get_array())
			{
				$mas = $m;

				if ($br2nl)
				{
					foreach ($m as $k => $v)
						$mas[$k] = str_replace('<br>', '', $v);
				}
			}
			return $mas;
		}

		/*
			Выполняет запрос и возвращает одномерный массив, содержащий первое значение каждой строки. Логично указывать в SELECT'е запроса только одно вынимаемое поле, поскольку остальные никак обрабатываться не будут.
		*/
		function query2array_v($query, $br2nl = false)
		{
			$this->query($query);

			$mas = array();
			while ($m = $this->get_row())
			{
				// $m_edited будет в конце концов заноситься в массив.
				$m_edited = $m[0];

				if ($br2nl)
					$m_edited = str_replace('<br>', '', $m_edited);

				$mas[] = $m_edited;
			}
			return $mas;
		}

		/*
			Функция вынимает первую запись, которую вернул запрос, и создаёт переменные с именами, соответствующими полям в запросе. Удобно при выводе формы с большим количеством полей (например, формы редактирования).
			Параметры:
			- $query			- срока-запрос.
			- $br2nl = false	- убирать HTML-ные переносы строк, которые у нас прописываются в БД. Ставить в true нужно тогда, когда информация выводится в многострочные поля для ввода (textarea). Если информация выводится просто так (текст на форме) или среди инпутов нет <textarea>, оставляйте по умолчанию (false).
			- $exceptions = ''	- список исключений. Переменные с перечисленными именами не будут созданы. Полезная штука, если запрос возвращает какое-то поле (к примеру, 'id'), но переменная с таким именем уже есть, и вы не хотите её перезаписывать. Названия полей перечисляются через запятую, можно использовать пробелы.
			- $prefix = ''		- 
		*/
		function query2vars($query, $br2nl = false, $exceptions = '', $prefix = '')
		{
			$this->query($query);

			if ($m = $this->get_array())
			{
				// Разбираем строку полей-исключений
				$exceptions = explode(',', $exceptions);
				if ($exceptions[0] != '')
				{
					$so_exceptions = sizeof($exceptions);
					for ($i = 0; $i < $so_exceptions; $i++)
						$exceptions[$i] = trim($exceptions[$i]);
				}

				// Перебираем все поля пришедшей записи и создаём глобальные переменные с соответствующими именами, если всё в порядке
				foreach ($m as $k => $v)
				{
					if (!in_array($k, $exceptions))
					{
						global ${$prefix.$k};
						${$prefix.$k} = ($br2nl) ? str_replace('<br>', '', $v) : $v;
					}
				}
				// Если запрос вернул строку и мы сформировали переменные, функция возвращает true.
				return true;
			}
			// Если запрос не вернул строк, функция возвращает false.
			return false;
		}

		/*
			Выводим последний выполненный запрос.
		*/
		function last_query()
		{
			$this->_show_message(false, 'last_query');
		}

		/*
			Вынимаем индекс (ключ) последней добавленной записи (используется только после выполнения запросов INSERT).
		*/
		function insert_id()
		{
			return mysqli_insert_id($this->link);
		}

		/*
			Вынимаем количество строк, которое вернул последний запрос (или запрос $query_id). Имеет смысл только после выполнения запросов SELECT.
		*/
		function num_rows($query_id = false)
		{
			if (!$query_id)
				$query_id = $this->last_query_id;
			return mysqli_num_rows($query_id);
		}
		/*
		function get_result_fields($query_id = '')
		{
			if ($query_id == '')
				$query_id = $this->query_id;
			while ($field = mysql_fetch_field($query_id))
	            $fields[] = $field;

			return $fields;
	   	}
		*/
		/*
			Закрываем соединение с БД.
		*/
		function close()
		{
			@mysqli_close($this->link);
		}

		/*
			Внутренняя функция для вывода сообщений и ошибок.
		*/
		function _show_message($is_error, $err_type, $message = false, $query = false)
		{
			global $_CFG;

			$hl_b = '<b>';
			$hl_e = '</b>';

			if (!$is_error)
			{
				switch ($err_type)
				{
					case 'last_query':
						echo '
							<tt style="background-color: white;">
								<u>Последний выполненный запрос:</u>
								<br><br>
								<b><pre>'.$this->last_query_text.'</pre></b>
							</tt>';
					break;
				}
			}
			else
			{
				if ($query)
				{
					// Safify query
					// $query = preg_replace("/([0-9a-f]){32}/", "********************************", $query); // Hides all hashes
					$query_str = $query;
				}

				$log_text = '';

				$log_text .= '--------------------------------------------
ВНИМАНИЕ!!! SQL-ошибка!
--------------------------------------------

Дата и время возникновения: '.date('d.m.Y H:i:s').'
Адрес возникновения: http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'
Пришли со страницы: '.((isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'не определено').'

Содержимое массива $_GET:

'.var_export($_GET, true).'

Содержимое массива $_POST:

'.var_export($_POST, true).'

Номер ошибки: '.$err_type.'

Текст ошибки:

'.$message.'

Текст запроса:

'.$query;

				if (strlen($log_text) > 5000000)
					$log_text = copy($log_text, strlen($log_text) - 5000000);

				if ($log_f = @fopen(G_ROOT.'logs/mysql_log.txt', 'w+'))
				{
					fwrite($log_f, $log_text);
					fclose($log_f);
				}
				else
					echo '<b>ЛОГ ЗАПИСАН НЕ БЫЛ!</b>';
				// << Записываем лог

				$msg_text = '
					<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
						<title>Хана, приехали...</title>
					</head>
					<body>
						<center>
						'.((file_exists('./classes/mysql_error.png')) ? '<img src="./classes/mysql_error.png" style="display: inline;">' : '').'
						<span style="display: inline-table; text-align: left; width: 600px;">
							<tt style="background-color: white;">
								<br><br><br><br><br><br>
								<font style="color: red; font-size: 18pt; font-weight: bold;">Ошибка MySQL!</font>
								<br>
								--------------------------
								<br><br>

								<u>Номер ошибки:</u> <b>'.$err_type.'</b>';

				if ((isset($_CFG['show_errors'])) && ($_CFG['show_errors']))
				{
					$msg_text .= '
								<br><br><br>

								<u>Текст ошибки:</u> 
								<br><br>
								<b>'.$message.'</b>
								<br><br><br>

								<u>Текст запроса:</u> 
								<br><br>
								<b><pre>'.$query.'</pre></b>';
				}

				$msg_text .= '
							</tt>
						</span>
						</center>
					</body>
					</html>';

				die($msg_text);
			}
		}
	}
?>