<?php
/**
* 单元测试
*/
class IndexTest extends \PHPUnit_Framework_TestCase
{
    
    public function testHello()
    {
        $_GET['name'] = 'forecho';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello forecho', $content);
    }
}