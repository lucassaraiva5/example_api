<?php

namespace App\Service;

use Symfony\Component\Form\FormInterface;
use App\Entity\Interfaces\ApplicationEntityInterface;

class BaseService
{
    protected $entityManager;
    protected $entityClass;

    public function save(ApplicationEntityInterface $entity, FormInterface $form) {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        return $entity;
    }

    public function getAll() {
        $entities = $this->entityManager->getRepository($this->entityClass)->findAll();
        $array = [];
        foreach ($entities as $entity) {
            $array[] = $entity->toArray();
        }
        return $array;
    }

    public function getById(int $id) {
        $entity = $this->entityManager->getRepository($this->entityClass)->findById($id);

        if(empty($entity)) {
            throw new \Exception("Movie not found");
        }

        return $entity[0]->toArray();
    }
}