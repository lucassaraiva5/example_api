<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Service\MovieService;
use App\Form\MovieFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * @Route("/api/v1")
 */
class MovieController extends BaseController
{
    private $tokenStorage;

    public function __construct(MovieService $movieService, TokenStorageInterface $storage)
    {
        $this->service = $movieService;
        $this->entity = new Movie();
        $this->typeClass = MovieFormType::class;
        $this->tokenStorage = $storage;
    }

    /**
     * @Route("/movies", name="movie_save", methods={"POST"})
     */
    public function new(Request $request): Response
    {
        $user = $this->tokenStorage->getToken()->getUser();
        return $this->save($request, $user);
    }

    /**
     * @Route("/movies/{id}", name="movie_get_one", methods={"GET"})
     */
    public function getById(Request $request, int $id): Response
    {
        $user = $this->tokenStorage->getToken()->getUser();
        return $this->getSingleEntity($id, $user);
    }

    /**
     * @Route("/movies", name="movie_get_all", methods={"GET"})
     */
    public function getAll(Request $request): Response
    {
        $user = $this->tokenStorage->getToken()->getUser();
        return $this->getListEntity($request, $user);
    }
}
