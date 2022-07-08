<?php

namespace App\Tests\Controller;

use App\Controller\BaseController;
use App\Entity\User;
use App\Service\MovieService;
use App\Service\UserService;
use App\Tests\Base\BaseUnitTests;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class BaseControllerUnitTest extends BaseUnitTests
{
    public $mockRequest;
    public $mockUserAuthenticated;
    public $mockBaseController;
    public $mockForm;
    public $mockEntity;
    public $mockService;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockRequest = $this->createMockClass(Request::class, [], null);
        $this->mockUserAuthenticated = $this->createMockClass(User::class, [], null);
        $this->mockForm = $this->createMockClass(Form::class, [], null);
        $this->mockEntity = $this->createMockClass(User::class, [], null);
    }

    public function testSave() {
        $this->mockService = $this->createMockClass(UserService::class, [], null);
        $this->mockEntitySimple = $this->createMockClass(User::class, [], null);
        $this->mockForm = $this->createMockClass(Form::class, ["isValid"=>$this->returnValue(true)], null);

        $jsonResponse = new JsonResponse(["foo"=>"bar"]);
        $this->mockBaseController = $this->getMockBuilder(BaseController::class)
            ->onlyMethods(["createForm", "getTypeClass", "getService", "processForm", "json", "getEntity"])
            ->getMock();

        $this->mockBaseController
            ->expects($this->once())
            ->method("createForm")
            ->will($this->returnValue($this->mockForm));

        $this->mockBaseController->expects($this->once())
            ->method("getTypeClass")
            ->will($this->returnValue("class"));

        $this->mockBaseController->expects($this->once())
            ->method("getService")
            ->will($this->returnValue($this->mockService));

        $this->mockBaseController->expects($this->once())
            ->method("processForm")
            ->will($this->returnValue(null));

        $this->mockBaseController->expects($this->once())
            ->method("json")
            ->will($this->returnValue($jsonResponse));

        $this->mockBaseController->expects($this->exactly(2))
            ->method("getEntity")
            ->will($this->returnValue($this->mockEntitySimple));

        $result = $this->mockBaseController->save($this->mockRequest, $this->mockUserAuthenticated);

        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }

    public function testGetListEntity()
    {
        $this->mockService = $this->createMockClass(UserService::class, [], null);
        $this->mockEntitySimple = $this->createMockClass(User::class, [], null);
        $this->mockForm = $this->createMockClass(Form::class, [], null);

        $jsonResponse = new JsonResponse(["foo"=>"bar"]);

        $this->mockBaseController = $this->getMockBuilder(BaseController::class)
            ->onlyMethods(["getService", "json"])
            ->getMock();

        $this->mockBaseController->expects($this->once())
            ->method("getService")
            ->will($this->returnValue($this->mockService));

        $this->mockBaseController->expects($this->once())
            ->method("json")
            ->will($this->returnValue($jsonResponse));

        $result = $this->mockBaseController->getListEntity($this->mockRequest, $this->mockUserAuthenticated);

        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }

    public function testGetSingleEntity()
    {
        $this->mockService = $this->createMockClass(MovieService::class, [], null);
        $this->mockEntitySimple = $this->createMockClass(User::class, [], null);
        $this->mockForm = $this->createMockClass(Form::class, [], null);

        $jsonResponse = new JsonResponse(["foo"=>"bar"]);

        $this->mockBaseController = $this->getMockBuilder(BaseController::class)
            ->onlyMethods(["getService", "json"])
            ->getMock();

        $this->mockBaseController->expects($this->once())
            ->method("getService")
            ->will($this->returnValue($this->mockService));

        $this->mockBaseController->expects($this->once())
            ->method("json")
            ->will($this->returnValue($jsonResponse));

        $id = 1;
        $result = $this->mockBaseController->getSingleEntity($id, $this->mockUserAuthenticated);

        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }
}