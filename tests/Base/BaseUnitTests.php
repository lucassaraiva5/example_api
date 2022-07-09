<?php

namespace App\Tests\Base;

use PHPUnit\Framework\TestCase;

abstract class BaseUnitTests extends TestCase
{
    public function createMockClass(string $className, array $methods, ?array $constructParams)
    {
        $methodsNameArray = [];
        foreach ($methods as $method => $will){
            $methodsNameArray[] = $method;
        }

        if(!empty($constructParams) && empty($methods)) {
            $mockedClass = $this->getMockBuilder($className)
                ->setConstructorArgs($constructParams)
                ->getMock();
        }else if(empty($constructParams) && empty($methods)){
            $mockedClass = $this->getMockBuilder($className)
                ->disableOriginalConstructor()
                ->getMock();
        }else if(!empty($constructParams) && !empty($methods)) {
            $mockedClass = $this->getMockBuilder($className)
                ->setConstructorArgs($constructParams)
                ->onlyMethods($methodsNameArray)
                ->getMock();
        }else if(empty($constructParams) && !empty($methods)) {
            $mockedClass = $this->getMockBuilder($className)
                ->disableOriginalConstructor()
                ->onlyMethods($methodsNameArray)
                ->getMock();
        }
        
        foreach ($methods as $name => $will) {
            $mockedClass->expects($this->once())
                ->method($name)
                ->will($will);
        }

        return $mockedClass;
    }
}
