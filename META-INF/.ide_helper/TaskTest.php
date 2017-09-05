<?php

namespace Zan\Framework\Testing;

class TaskTest extends UnitTest
{
    private $TaskTest;

    public function __construct()
    {
        $this->TaskTest = new \ZanPHP\Testing\TaskTest();
    }

    public function testTasksWork()
    {
        $this->TaskTest->testTasksWork();
    }
    
    protected function scanTasks()
    {
        $this->TaskTest->scanTasks();
    }

    protected function initTask()
    {
        $this->TaskTest->initTask();
    }
    
    protected function runTaskTests()
    {
        $this->TaskTest->runTaskTests();
    }

}





