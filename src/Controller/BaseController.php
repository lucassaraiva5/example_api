<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Interfaces\ApplicationEntityInterface;

class BaseController extends AbstractController
{
    protected $entity;
    protected $typeClass;
    protected $service;

    protected function save(Request $request) {
        $data = json_decode($request->getContent(), true);
        $form = $this->createForm($this->typeClass, $this->entity);
        $this->processForm($request, $form);

        if (!$form->isValid()) {
            $errors = $this->getErrorMessages($form);
            return $this->json(["error"=>$errors], Response::HTTP_BAD_REQUEST);
        }

        try {
            $entity = $this->service->save($this->entity, $form);
            return $this->json($entity->toArrayCreated(), Response::HTTP_CREATED);
        }
        catch (\Throwable $exception)
        {
            return $this->json(["error"=>$exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR]);
        }
    }

    protected function getListEntity(Request $request) {
        try {
            $result = $this->service->getAll();
            return $this->json($result, Response::HTTP_OK);
        }
        catch (\Throwable $exception)
        {
            return $this->json(["error"=>$exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR]);
        }
    }

    protected function getSingleEntity(int $id){
        try {
            $result = $this->service->getById($id);
            return $this->json($result, Response::HTTP_OK);
        }
        catch (\Throwable $exception)
        {
            return $this->json(["error"=>$exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR]);
        }
    }

    protected function processForm(Request $request, FormInterface $form)
    {
        $data = json_decode($request->getContent(), true);
        $clearMissing = $request->getMethod() != 'PATCH';
        $form->submit($data, $clearMissing);
    }

    protected function getErrorMessages(FormInterface $form) {
        $errors = array();
        foreach ($form->getErrors() as $key => $error) {
            $template = $error->getMessageTemplate();
            $parameters = $error->getMessageParameters();

            foreach ($parameters as $var => $value) {
                $template = str_replace($var, $value, $template);
            }

            $errors[$key] = $template;
        }
        if ($form->count()) {
            foreach ($form as $child) {
                if (!$child->isValid()) {
                    $errors[$child->getName()] = $this->getErrorMessages($child);
                }
            }
        }
        return $errors;
    }
}