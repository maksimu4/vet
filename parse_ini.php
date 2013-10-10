<?php
$lang = isset($_GET['lng'])? $_GET['lng']:'ua';
switch ($lang)
{
	case 'ru':
    	$array = parse_ini_file($lang.".ini");
    break;

 	case 'en':
    	$array = parse_ini_file($lang.".ini");
  	break;

    default:
    $array = parse_ini_file($lang.".ini");
}
?>