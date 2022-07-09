<?php

namespace App\Service;

use App\Entity\User;
use App\Service\Interfaces\ServiceInterface;
use Symfony\Component\Form\FormInterface;
use App\Entity\Interfaces\ApplicationEntityInterface;

class BaseService implements ServiceInterface
{
    protected $entityManager;
    protected $entityClass;

    public function saveEntity(ApplicationEntityInterface $entity, FormInterface $form, ?User $userAuthenticated): ApplicationEntityInterface {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();

        return $entity;
    }

    public function getAllEntities(?User $userAuthenticated): array {
        $entities = $this->getEntityManager()->getRepository($this->getEntityClass())->findAll();
        $array = [];
        foreach ($entities as $entity) {
            $array[] = $entity->toArray();
        }
        return $array;
    }

    public function getEntityById(int $id, ?User $userAuthenticated): array {
        $entity = $this->getEntityManager()->getRepository($this->getEntityClass())->findOneById($id);

        if(empty($entity)) {
            throw new \Exception("Movie not found");
        }

        return $entity->toArray();
    }

    function getEntityManager()
    {
        return $this->entityManager;
    }

    function getEntityClass()
    {
        return $this->entityClass;
    }
}