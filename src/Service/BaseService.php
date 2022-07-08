<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\Form\FormInterface;
use App\Entity\Interfaces\ApplicationEntityInterface;

class BaseService
{
    protected $entityManager;
    protected $entityClass;

    public function save(ApplicationEntityInterface $entity, FormInterface $form, ?User $userAuthenticated) {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        return $entity;
    }

    public function getAll(?User $userAuthenticated) {
        $entities = $this->entityManager->getRepository($this->entityClass)->findAll();
        $array = [];
        foreach ($entities as $entity) {
            $array[] = $entity->toArray();
        }
        return $array;
    }

    public function getById(int $id, ?User $userAuthenticated) {
        $entity = $this->entityManager->getRepository($this->entityClass)->findOneById($id);

        if(empty($entity)) {
            throw new \Exception("Movie not found");
        }

        return $entity->toArray();
    }
}