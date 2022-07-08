<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\UserService;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="My First API", version="0.1")
 */
class UserController extends BaseController
{
    public function __construct(UserService $userService){
        $this->service = $userService;
        $this->entity = new User();
        $this->typeClass = RegistrationFormType::class;
    }


    /**
     * @Route("/register", name="app_register")
     * @OA\Get(
     *     path="/api/data.json",
     *     @OA\Response(
     *         response="200",
     *         description="The data"
     *     )
     * )
     */
    public function register(
        Request $request): Response
    {
        return $this->save($request);
    }
}
