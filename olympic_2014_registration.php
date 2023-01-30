<?php
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);

	define('ROOT', getcwd().'/');
	// Папка с локальными классами.
	define('LIB', ROOT.'class/');

	include LIB.'mysql.php';
	include LIB.'gf_global.php';
	include LIB.'gf_vars.php';
	include LIB.'gf_date.php';

	$db = new db;
	$db->connect('localhost', 'workvgik', 'MNgd34Y54tYz', 'workvgik', true);

	$db->insert('olympic_2014', array(
		'fio'			=> '\''.$_POST['fio'].'\'',
		'email'			=> '\''.$_POST['email'].'\'',
		'phone'			=> '\''.$_POST['phone'].'\'',
		'learning'		=> '\''.$_POST['learning'].'\'',
		'city'			=> '\''.$_POST['city'].'\'',
		'film_name'		=> '\''.$_POST['film_name'].'\'',
		'year'			=> '\''.$_POST['year'].'\'',
		'length'		=> '\''.$_POST['length'].'\'',
		'format'		=> ($_POST['format'] != '') ? '\''.$_POST['format'].'\'' : 'NULL',
		'biography'		=> '\''.$_POST['biography'].'\'',
		'annotation'	=> '\''.$_POST['annotation'].'\''
	));
?>