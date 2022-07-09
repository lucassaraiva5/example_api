<?php

namespace App\Tests\Controller;

use App\Entity\Movie;
use App\Entity\User;
use App\Repository\MovieRepository;
use App\Repository\UserRepository;
use App\Service\BaseService;
use App\Service\MovieService;
use App\Tests\Base\BaseUnitTests;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;

class MovieServiceUnitTest extends BaseUnitTests
{
    private $mockEntity;
    private $mockUserAuthenticated;
    private $mockForm;
    private $mockEntityManager;
    private $mockMovieService;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockEntity = $this->createMockClass(Movie::class, [], null);
        $this->mockUserAuthenticated = $this->createMockClass(User::class, [], null);
        $this->mockForm = $this->createMockClass(Form::class, [], null);
        $this->mockEntityManager = $this->createMockClass(EntityManager::class, [], null);

    }

    public function testSave(): void
    {
        $this->mockMovieService = $this->getMockBuilder(MovieService::class)
            ->onlyMethods(["saveEntity"])
            ->setConstructorArgs([$this->mockEntityManager])
            ->getMock();

        $this->mockMovieService->expects($this->once())
            ->method("saveEntity")
            ->will($this->returnValue($this->mockEntity));

        $mockEntity = $this->createMockClass(Movie::class, ["setUser"=>$this->returnValue(null)], null);

        $return = $this->mockMovieService->save($mockEntity, $this->mockForm, $this->mockUserAuthenticated);

        $this->assertEquals($return, $this->mockEntity);
    }

    public function testGetAll(): void
    {
        $this->mockMovieResponse = $this->createMockClass(User::class, ["toArray"=>$this->returnValue(["foo"=>"bar"])], null);
        $mockRepository = $this->createMockClass(MovieRepository::class, ["findBy"=>$this->returnValue([$this->mockMovieResponse])], null);
        $mockEntityManager = $this->createMockClass(EntityManager::class, ["getRepository"=>$this->returnValue($mockRepository)], null);

        $this->mockMovieService = $this->getMockBuilder(MovieService::class)
            ->onlyMethods(["getEntityManager", "getEntityClass"])
            ->setConstructorArgs([$this->mockEntityManager])
            ->getMock();

        $this->mockMovieService->expects($this->once())
            ->method("getEntityManager")
            ->will($this->returnValue($mockEntityManager));

        $this->mockMovieService->expects($this->once())
            ->method("getEntityClass")
            ->will($this->returnValue("class"));

        $result = $this->mockMovieService->getAll($this->mockUserAuthenticated);
        $this->assertArrayHasKey(0, $result);
        $this->assertArrayHasKey("foo", $result[0]);
        $this->assertEquals("bar", $result[0]["foo"]);
    }

    public function testGetById(): void
    {
        $this->mockMovieResponse = $this->createMockClass(User::class, ["toArray"=>$this->returnValue(["foo"=>"bar"])], null);
        $mockRepository = $this->createMockClass(MovieRepository::class, ["findOneBy"=>$this->returnValue($this->mockMovieResponse)], null);
        $mockEntityManager = $this->createMockClass(EntityManager::class, ["getRepository"=>$this->returnValue($mockRepository)], null);


        $this->mockMovieService = $this->getMockBuilder(MovieService::class)
            ->onlyMethods(["getEntityManager", "getEntityClass"])
            ->setConstructorArgs([$this->mockEntityManager])
            ->getMock();

        $this->mockMovieService->expects($this->once())
            ->method("getEntityManager")
            ->will($this->returnValue($mockEntityManager));

        $this->mockMovieService->expects($this->once())
            ->method("getEntityClass")
            ->will($this->returnValue("class"));

        $id = 1;
        $result = $this->mockMovieService->getById($id, $this->mockUserAuthenticated);
        $this->assertArrayHasKey("foo", $result);
        $this->assertEquals("bar", $result["foo"]);
    }
}