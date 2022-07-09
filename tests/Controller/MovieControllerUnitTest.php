<?php

namespace App\Tests\Controller;

use App\Controller\MovieController;
use App\Entity\User;
use App\Service\MovieService;
use App\Tests\Base\BaseUnitTests;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class MovieControllerUnitTest extends BaseUnitTests
{
    private $mockUser;
    private $mockMovieController;
    private $mockTokenStorage;
    private $mockMovieService;
    private $mockRequest;


    public function setUp(): void
    {
        parent::setUp();
        $this->mockUser = $this->createMock(User::class);
        $this->mockToken = $this->createMockClass(PreAuthenticatedToken::class, ["getUser"=>$this->returnValue($this->mockUser)], null);
        $this->mockTokenStorage = $this->createMockClass(TokenStorage::class, ["getToken"=>$this->returnValue($this->mockToken)], null);
        $this->mockMovieService = $this->createMockClass(MovieService::class, [], null);
        $this->mockRequest = $this->createMockClass(Request::class, [], null);
    }

    public function testNewAction(): void
    {
        $mockedJsonResponse = new JsonResponse(["foo"=>"bar"]);
        $this->mockMovieController = $this->createMockClass(MovieController::class, ["save"=>$this->returnValue($mockedJsonResponse)], [$this->mockMovieService, $this->mockTokenStorage]);

        $result = $this->mockMovieController->new($this->mockRequest);
        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }

    public function testGetByIdAction(): void
    {
        $mockedJsonResponse = new JsonResponse(["foo"=>"bar"]);
        $this->mockMovieController = $this->createMockClass(MovieController::class, ["getSingleEntity"=>$this->returnValue($mockedJsonResponse)], [$this->mockMovieService, $this->mockTokenStorage]);
        $mockedId = 1;

        $result = $this->mockMovieController->getById($this->mockRequest, $mockedId);
        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }

    public function testGetAllAction(): void
    {
        $mockedJsonResponse = new JsonResponse(["foo"=>"bar"]);
        $this->mockMovieController = $this->createMockClass(MovieController::class, ["getListEntity"=>$this->returnValue($mockedJsonResponse)], [$this->mockMovieService, $this->mockTokenStorage]);

        $result = $this->mockMovieController->getAll($this->mockRequest);
        $resultArray = json_decode($result->getContent(), true);
        $this->assertArrayHasKey("foo", $resultArray);
        $this->assertEquals("bar", $resultArray["foo"]);
    }
}
