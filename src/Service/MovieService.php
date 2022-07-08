<?php

namespace App\Service;

use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use App\Entity\Interfaces\ApplicationEntityInterface;

class MovieService extends BaseService
{
    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
        $this->entityClass = Movie::class;
    }

    /**
     * @throws \Exception
     */
    public function save(ApplicationEntityInterface $entity, FormInterface $form) {
        return parent::save($entity, $form);
    }

    public function getAll(){
        return parent::getAll();
    }

    public function getById(int $id) {
        return parent::getById($id);
    }

}