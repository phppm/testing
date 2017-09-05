<?php

namespace Zan\Framework\Testing;

class UnitTest extends \PHPUnit_Framework_TestCase
{
    private $UnitTest;

    public function __construct()
    {
        $this->UnitTest = new \ZanPHP\Testing\UnitTest();
    }

    protected function invoke(&$object, $methodName, array $parameters = [])
    {
        $this->UnitTest->invoke(&$object, $methodName,$parameters);
    }

    protected function getProperty(&$object, $propertyName)
    {
        $this->UnitTest->getProperty(&$object, $propertyName);
    }

    protected function setPropertyValue(&$object, $propertyName, $value)
    {
        $this->UnitTest->setPropertyValue(&$object, $propertyName, $value);
    }

}