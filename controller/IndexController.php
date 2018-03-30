<?php
/**
 * Created by PhpStorm.
 * User: paq
 * Date: 14-6-24
 * Time: 上午9:35
 */
defined('MYCORE') or  exit('No permission resources.');;
class IndexController
{
    public function index()
    {
        include_once(MVC_PATH.'view/index.php');
    }
}