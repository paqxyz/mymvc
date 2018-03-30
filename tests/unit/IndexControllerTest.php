<?php
/**
 * Created by PhpStorm.
 * User: paq
 * Date: 14-6-25
 * Time: 下午1:29
 */
include_once(MVC_PATH.'controller/IndexController.php');
class IndexControllerTest extends PHPUnit_Framework_TestCase {

    public function testindex()
    {
        $Index = new IndexController();
        //$this->assertTrue($Index->index());
    }
}
 