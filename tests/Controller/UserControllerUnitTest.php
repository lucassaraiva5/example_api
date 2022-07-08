<?php

namespace App\Tests\Controller;

use App\Controller\UserController;
use App\Service\UserService;
use App\Tests\Base\BaseUnitTests;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserControllerUnitTest extends BaseUnitTests
{
    private $mockUserService;
    private $mockRequest;
    private $mockUserController;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockUserService = $this->createMockClass(UserService::class, [], null);
        $this->mockRequest = $this->createMockClass(Request::class, [], null);
    }

    public function testRegister(): void
    {
        //Define response
        $mockedJsonResponse = new JsonResponse(["foo"=>"bar"]);
        $this->mockUserController = $this->createMockClass(UserController::class, [
            "save"=>$this->returnValue($mockedJsonResponse)
        ], [$this->mockUserService]);

        $result = $this->mockUserController->register($this->mockRequest);
        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }

}