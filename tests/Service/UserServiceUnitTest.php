<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Service\BaseService;
use App\Service\UserService;
use App\Tests\Base\BaseUnitTests;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Form;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;

class UserServiceUnitTest extends BaseUnitTests
{
    private $mockEntity;
    private $mockForm;
    private $mockEntityManager;
    private $mockUserPasswordHasher;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockForm = $this->createMockClass(Form::class, [], null);
    }

    public function testSave(): void
    {
        $this->mockEntity = $this->createMockClass(User::class, [], null);
        $this->mockUserPasswordHasher = $this->createMockClass(UserPasswordHasher::class, [], null);

        $this->mockEntityManager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->onlyMethods(["persist", "flush"])
            ->getMock();

        $this->mockEntityManager->expects($this->any())
            ->method("persist")
            ->willReturn($this->returnValue(null));

        $this->mockEntityManager->expects($this->any())
            ->method("flush")
            ->willReturn($this->returnValue(null));


        $mockUserService = $this->getMockBuilder(UserService::class)
            ->setConstructorArgs([$this->mockEntityManager, $this->mockUserPasswordHasher])
            ->getMock();

        $result = $mockUserService->save($this->mockEntity, $this->mockForm, null);

        $this->assertNotEquals($result, $this->mockEntity);
    }
}