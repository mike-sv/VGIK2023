<?php
	// Эта штука нужна для корректной работы HTML Purifier с кириллическими URL-ами.
	require LIB.'PEAR/Net/IDNA2.php';
	// Обработка HTML-полей производится с помощью HTML Purifier. Он вырезает неизвестные теги, свойства и все скрипты, следит за закрывающими тегами, корректностью URL-ов и свойств тегов.
	//require G_COMMON.'init_htmlpurifier.php';

	// require G_LIB.'htmlawed/htmLawed.php';

	////////////////////////////////////////////
	//	ГЛОБАЛЬНЫЕ ФУНКЦИИ
	////////////////////////////////////////////

	/*
		Функция объединяет массивы $_GET и $_POST (последний имеет приоритет) и возвращает их в виде единого массива пришедших данных. Опционально, если второй параметр передан, она сразу применяет к полученному массиву фильтрующую функцию process_input() с заданными в $params условиями проверки (см. ниже).
	*/
	function get_input($params = array())
	{
		$input = array_merge($_GET, $_POST);

		if (sizeof($params))
			$input = process_input($input, $params);

		return $input;
	}

	/*
		Функция фильтрует ассоциативный массив пришедших данных $input в соответствии с параметрами, заданными в $params.

		Массив $params должен иметь следующую структуру:
		array
		(
			[поле в массиве $input]	=> [тип переменной, которая должна быть в данном поле],
			...
		)

		Пример:

		// Входной массив с данными, которые надо проверить.
		$input = array
		(
			'id'		=> 5,
			'birthday'	=> '40.20.2000',
			'name'		=> 'Jack',
			'phone'		=> '555-55-55'
		);

		$data = process_input($input, array
		(
			'id'		=> 'pint',
			'birthday'	=> 'date',
			'name'		=> 'string',
			'surname'	=> 'string'
		));

		Выходной массив $data будет иметь только те поля, которые перечислены в проверочном массиве (остальные поля, если они есть, будут отброшены). Каждое поле будет содержать данные того типа, который указан в $params, или null, если исходное поля отсутствует во входном массиве или его содержимое не удовлетворяет проверке. Для нашего примера массив $data будет иметь следующий вид:

		array
		(
			'id'		=> 5,
			'birthday'	=> null, // Дата во входном массиве некорректна
			'name'		=> 'Jack',
			'surname'	=> null // Во входном массиве нет этого поля
		)

		Поле 'phone' будет отброшено, поскольку его нет во втором параметре функции.

		Список возможных типов можно найти внутри функции в большом switch-е.

		Предполагается, что данная функция будет по большей части работать совместно с get_input(). В модуле с помощью get_input() данные сохраняются в массив, к примеру, $input, который затем передаётся в методы конкретного класса. В классе с помощью process_input() необработанный массив $input фильтруется заданным образом (одновременно могут выдаваться ошибки некорректного ввода) и выдаёт уже обработанный массив, к примеру, $data. И далее работа в классе осуществляется с массивом $data известной структуры.

		Функция get_input() может вызываться с опциональным параметром $params. В таком случае массивы $_GET и $_POST после объединения сразу будут переданы функции process_input() для обработки согласно структуре $params. На выходе функции get_input() в таком случае будут уже обработанные данные.

		Есть ещё один вариант использования process_input(). Если надо обработать одну переменную, можно использовать следующий вызов функции:

		$var = 5;
		$var = process_input($var, 'pint');

		Т. е. вместо аргументов-массивов мы передаём в функцию простую переменную и строку-тип. На выходе будет также простая переменная, обработанная согласно переданному в качестве второго аргумента типу. В приведённом примере $var будет содержать 5. Аналогично простому вызову, если переменная не объявлена или не удовлетворяет условию, выходная переменная будет содержать null.

		При использовании функции желательно придерживаться следующего подхода к сортировке полей во втором аргументе функции: сначала поле 'id' (если оно есть), затем все остальные поля в алфавитном порядке.
	*/
	function process_input($input, $params)
	{
		$result = array();

		if (!is_array($params))
		{
			$single_param = true;

			$input = array($input);
			$params = array($params);
		}
		else
			$single_param = false;

		foreach ($params as $param_name => &$param_type)
		{
			if ((!isset($input[$param_name])) || ($input[$param_name] === ''))
			{
				$result[$param_name] = null;
				continue;
			}

			switch ((string)$param_type)
			{
				// Массив.
				case 'array':
					if (is_array($input[$param_name]))
						$result[$param_name] = $input[$param_name];
					else
						$result[$param_name] = false;
				break;
				// Объект.
				case 'object':
					if (is_object($input[$param_name]))
						$result[$param_name] = $input[$param_name];
					else
						$result[$param_name] = false;
				break;
				// JSON-строка.
				case 'json':
					$result[$param_name] = json_decode($input[$param_name], true);
				break;
				// Любая строка без переносов на новую строку.
				case 'string':
					$result[$param_name] = var_str($input[$param_name]);
				break;
				// Строка, допускающая наличие переносов на новую строку. Каждый "абзац" (текст от переноса до переноса) автоматически заключается в тег <p>.
				case 'text':
					$result[$param_name] = var_str($input[$param_name], true);
				break;
				// Аналогично 'text', только при этом в строке могут содержаться HTML-теги и стили (такие строки должны вводиться через CKEditor).
				case 'html':
					$result[$param_name] = var_str($input[$param_name], true, true);
				break;
				// Корректный электронный адрес.
				case 'email':
					$result[$param_name] = var_email($input[$param_name]);
				break;
				// Любое целое число.
				case 'int':
					$result[$param_name] = var_int($input[$param_name], true, true);
				break;
				// Неотрицательное целое.
				case 'uint':
					$result[$param_name] = var_int($input[$param_name], false, true);
				break;
				// Положительное целое.
				case 'pint':
					$result[$param_name] = var_int($input[$param_name], false, false);
				break;
				// Любое целое или дробное число
				case 'float':
					$result[$param_name] = var_float($input[$param_name], true, true);
				break;
				// Неотрицательное дробное или целое.
				case 'ufloat':
					$result[$param_name] = var_float($input[$param_name], false, true);
				break;
				// Положительное дробное или целое.
				case 'pfloat':
					$result[$param_name] = var_float($input[$param_name], false, false);
				break;
				// Дата в любом формате ("ДД.ММ.ГГГГ" или "ГГГГ-ММ-ДД").
				case 'date':
					$result[$param_name] = db_date($input[$param_name]);
				break;
				// Дата (см. выше) и время в формате "ЧЧ:ММ" (если времени нет, оно будет подставлено автоматически - "00:00")
				case 'datetime':
					$result[$param_name] = db_datetime($input[$param_name]);
				break;
				// Время.
				case 'time':
					$result[$param_name] = cor_time($input[$param_name]);
				break;
				// Допускаются значения true, false, 1 и 0.
				case 'bool':
					$result[$param_name] = ($input[$param_name] == true);
				break;
				// Входной параметр не обрабатывается и возвращается в исходном виде.
				default:
					$result[$param_name] = $input[$param_name];
				break;
			}
		}

		if ($single_param)
			$result = $result[0];

		return $result;
	}

	/*
		Проверка строки на e-mail'овость. Возвращает ту же строку, если она проходит проверку, и false в противном случае.
	*/
	function var_email(&$var)
	{
		if ((!isset($var)) || (!preg_match('/^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.[A-Za-z]([A-Za-z])+$/', $var)))
    	    return false;

		return $var;
	}

	/*
		Проверка строки на url'овость. Возвращает ту же строку, если она проходит проверку, и false в противном случае.
	*/
	function var_url(&$var)
	{
		if ((!isset($var)) && (!preg_match('/^((https?:\/\/)?(www\.)?([\w, -]+.)(com|net|org|info|biz|spb\.ru|msk\.ru|com\.ru|org\.ru|net\.ru|ru|su|us|bz|ws)(\/)?)$/', $var)))
			return false;

		return $var;
	}

	function var_float(&$var, $allow_negative = false, $allow_zero = true, $default_val = null)
	{
		if (!isset($var))
			return $default_val;

		$temp_var = str_replace(',', '.', trim($var));

		if (
			(stripos('e', $temp_var) !== false)
			||
			(is_numeric($temp_var) === false)
			||
			((!$allow_negative) && ($temp_var < 0))
			||
			((!$allow_zero) && ($temp_var == 0))
			)
		{
			return $default_val;
		}

		return (float)$temp_var;
	}

	function var_int(&$var, $allow_negative = false, $allow_zero = true, $default_val = null)
	{
		if ((!isset($var)) || (is_array($var)))
			return $default_val;

		$temp_var = trim($var);

		if (
			(!preg_match('/^-?[0-9]*$/', $temp_var))
			||
			((!$allow_negative) && ($temp_var < 0))
			||
			((!$allow_zero) && ($temp_var == 0))
			)
		{
			return $default_val;
		}

		return (int)$temp_var;
	}

	function var_pint(&$var, $default_val = null)
	{
		return var_int($var, false, false, $default_val);
	}

	/*
		Если $variable - число (положительное, от 1), функция возвращает это число. Если нет - $default_var (по умолчанию $default_var = false).
		Метод можно использовать в двух случаях:
		- Проверка строки на число. В этом случае нужно использовать оператор "===" во избежание недоразумений. Пример:
		if (var_id($str) === false) // строка $str - не число
			...
		- Запись значения в БД. К примеру, нужно записать в базу индекс либо null, если переданный параметр не является индексом. Тогда можно сделать так:
		$param = var_id($str, 'null'); // если в $str не индекс, функция вернёт 'null'
	*/
	function var_id(&$var, $default_val = null)
	{
		if ((!isset($var)) || (is_array($var)))
			return $default_val;

		$temp_var = trim($var);

		if (!preg_match('/^[1-9][0-9]*$/', $temp_var))
			return $default_val;

		return (int)$temp_var;
	}

	/*
		Убираем пробелы по краям, заменяем в строке слэши, кавычки, переносы строк на их HTML-аналоги для последующей записи в БД.
	*/
	function var_str(&$var, $multiline = false, $html = false, $default_val = null)
	{
		if (!isset($var))
			return $default_val;

		if (is_object($var))
		{
			$temp_var = (array)$var;
			$temp_var = var_str($temp_var, $multiline, $html);

			return $temp_var;
		}
		elseif (is_array($var))
		{
			$temp_var = array();
			if (sizeof($var) > 0)
			{
				foreach ($var as $key => &$val)
					$temp_var[$key] = var_str($val, $multiline, $html);
			}
			return $temp_var;
		}

		if ($html)
		{
			$config = HTMLPurifier_Config::createDefault();
			$config->set('Core.Encoding', 'UTF-8');
			$config->set('Core.EnableIDNA', true);
			$config->set('HTML.Doctype', 'HTML 4.01 Transitional');

			$purifier = new HTMLPurifier($config);

			$temp_var = $purifier->purify($var);

			/*
			$temp_var = htmLawed($var, array
			(
				'schemes'	=> 'href: aim, feed, file, ftp, gopher, http, https, irc, mailto, news, nntp, sftp, ssh, telnet; *: file, http, https; src: data',
				'tidy'		=> -1
			));
			*/
		}
		else
		{
			$temp_var = htmlspecialchars(str_replace('\\', '', trim($var)), ENT_QUOTES);

			if (($multiline) && ($temp_var != ''))
			{
				$temp_var = '<p>'.str_replace("\n", "</p>\n<p>", $temp_var).'</p>';
				$temp_var = str_replace('<p></p>', '', $temp_var);
			}
		}

		return $temp_var;
	}
?>