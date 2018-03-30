<?php
/**
 * Created by PhpStorm.
 * User: paq
 * Date: 14-6-24
 * Time: 上午9:09
 */
define('MYCORE', true);
define('MVC_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
$c_str = $_GET['c'] ? $_GET['c'] : 'index';
$c_name = $c_str.'Controller';
$c_path = MVC_PATH.'controller/'.$c_name.'.php';
if(!file_exists($c_path)) throw new Exception("Controller not found");
$method = $_GET['a'] ? $_GET['a'] : 'index';
require_once($c_path);
$controller=new $c_name;
$controller->$method();

