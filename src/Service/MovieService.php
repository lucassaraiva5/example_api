<?php

namespace App\Service;

use App\Entity\Movie;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use App\Entity\Interfaces\ApplicationEntityInterface;
use Symfony\Component\HttpFoundation\Response;

class MovieService extends BaseService
{
    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
        $this->entityClass = Movie::class;
    }

    /**
     * @throws \Exception
     */
    public function save(ApplicationEntityInterface $entity, FormInterface $form, ?User $userAuthenticated) {
        $entity->setUser($userAuthenticated);
        return parent::save($entity, $form, $userAuthenticated);
    }

    public function getAll(?User $userAuthenticated){
        $entities = $this->entityManager->getRepository($this->entityClass)->findBy(["user"=>$userAuthenticated]);
        $array = [];
        foreach ($entities as $entity) {
            $array[] = $entity->toArray();
        }
        return $array;
    }

    public function getById(int $id, ?User $userAuthenticated) {
        $entity = $this->entityManager->getRepository($this->entityClass)->findOneBy(["id"=>$id, "user"=>$userAuthenticated]);

        if(empty($entity)) {
            throw new \Exception("Movie not found", Response::HTTP_NOT_FOUND);
        }

        return $entity->toArray();
    }

}