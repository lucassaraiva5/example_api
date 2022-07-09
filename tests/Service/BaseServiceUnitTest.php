<?php

namespace App\Tests\Service;

use App\Controller\BaseController;
use App\Controller\MovieController;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\BaseService;
use App\Tests\Base\BaseUnitTests;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;

class BaseServiceUnitTest extends BaseUnitTests
{
    private $mockEntity;
    private $mockForm;
    private $mockUserAuthenticated;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockEntity = $this->createMockClass(User::class, [], null);
        $this->mockForm = $this->createMockClass(Form::class, [], null);
        $this->mockUserAuthenticated = $this->createMockClass(User::class, [], null);
    }

    public function testSave()
    {
        $mockEntityManager = $this->createMockClass(EntityManager::class, [], null);
        $this->mockBaseService = $this->getMockBuilder(BaseService::class)
            ->onlyMethods(["getEntityManager"])
            ->getMock();

        $this->mockBaseService->expects($this->exactly(2))
            ->method("getEntityManager")
            ->will($this->returnValue($mockEntityManager));

        $this->mockBaseService->save($this->mockEntity, $this->mockForm, $this->mockUserAuthenticated);
    }

    public function testGetAll()
    {
        $this->mockUserAuthenticated = $this->createMockClass(User::class, ["toArray"=>$this->returnValue(["foo"=>"bar"])], null);
        $mockRepository = $this->createMockClass(UserRepository::class, ["findAll"=>$this->returnValue([$this->mockUserAuthenticated])], null);
        $mockEntityManager = $this->createMockClass(EntityManager::class, ["getRepository"=>$this->returnValue($mockRepository)], null);

        $this->mockBaseService = $this->getMockBuilder(BaseService::class)
            ->onlyMethods(["getEntityManager", "getEntityClass"])
            ->getMock();

        $this->mockBaseService->expects($this->once())
            ->method("getEntityManager")
            ->will($this->returnValue($mockEntityManager));

        $this->mockBaseService->expects($this->once())
            ->method("getEntityClass")
            ->will($this->returnValue("class"));

        $result = $this->mockBaseService->getAll($this->mockEntity);
        $this->assertArrayHasKey(0, $result);
        $this->assertArrayHasKey("foo", $result[0]);
        $this->assertEquals("bar", $result[0]["foo"]);
    }

    public function getById()
    {
        $this->mockUserAuthenticated = $this->createMockClass(User::class, ["toArray"=>$this->returnValue(["foo"=>"bar"])], null);
        $mockRepository = $this->createMockClass(UserRepository::class, ["findOneById"=>$this->returnValue($this->mockUserAuthenticated)], null);
        $mockEntityManager = $this->createMockClass(EntityManager::class, ["getRepository"=>$this->returnValue($mockRepository)], null);

        $this->mockBaseService = $this->getMockBuilder(BaseService::class)
            ->onlyMethods(["getEntityManager", "getEntityClass"])
            ->getMock();

        $this->mockBaseService->expects($this->once())
            ->method("getEntityManager")
            ->will($this->returnValue($mockEntityManager));

        $this->mockBaseService->expects($this->once())
            ->method("getEntityClass")
            ->will($this->returnValue("class"));

        $id = 1;
        $result = $this->mockBaseService->getById($id, $this->mockEntity);
        $this->assertArrayHasKey("foo", $result);
        $this->assertEquals("bar", $result["foo"]);
    }
}