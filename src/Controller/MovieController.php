<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Service\MovieService;
use App\Form\MovieFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1")
 */
class MovieController extends BaseController
{
    private $movieService;

    public function __construct(MovieService $movieService){
        $this->service = $movieService;
        $this->entity = new Movie();
        $this->typeClass = MovieFormType::class;
    }

    /**
     * @Route("/movies", name="movie_save", methods={"POST"})
     */
    public function new(
        Request $request): Response
    {
        return $this->save($request);
    }

    /**
     * @Route("/movies/{id}", name="movie_get_one", methods={"GET"})
     */
    public function getById(Request $request, int $id): Response
    {
        return $this->getSingleEntity($id);
    }

    /**
     * @Route("/movies", name="movie_get_all", methods={"GET"})
     */
    public function getAll(Request $request): Response
    {
        return $this->getListEntity($request);
    }
}
