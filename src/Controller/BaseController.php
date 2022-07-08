<?php

namespace App\Controller;

use App\Controller\Interfaces\ControllerInterface;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use function PHPUnit\Framework\returnValue;

class BaseController extends AbstractController implements ControllerInterface
{
    protected $entity;
    protected $typeClass;
    protected $service;

    public function save(Request $request, ?User $userAuthenticated): Response  {
        $form = $this->createForm($this->getTypeClass(), $this->getEntity());
        $this->processForm($request, $form);

        if (!$form->isValid()) {
            $errors = $this->getErrorMessages($form);
            return $this->json(["error"=>$errors], Response::HTTP_BAD_REQUEST);
        }

        try {
            $entity = $this->getService()->save($this->getEntity(), $form, $userAuthenticated);
            return $this->json($entity->toArrayCreated(), Response::HTTP_CREATED);
        }
        catch (\Throwable $exception)
        {
            return $this->json(["error"=>$exception->getMessage()], $exception->getCode());
        }
    }

    public function getListEntity(Request $request, ?User $userAuthenticated): Response {
        try {
            $result = $this->getService()->getAll($userAuthenticated);
            return $this->json($result, Response::HTTP_OK);
        }
        catch (\Throwable $exception)
        {
            return $this->json(["error"=>$exception->getMessage()], $exception->getCode());
        }
    }

    public function getSingleEntity(int $id, ?User $userAuthenticated): Response {
        try {
            $result = $this->getService()->getById($id, $userAuthenticated);
            return $this->json($result, Response::HTTP_OK);
        }
        catch (\Throwable $exception)
        {
            return $this->json(["error"=>$exception->getMessage()], $exception->getCode());
        }
    }

    public function processForm(Request $request, FormInterface $form): void
    {
        $data = json_decode($request->getContent(), true);
        $clearMissing = $request->getMethod() != 'PATCH';
        $form->submit($data, $clearMissing);
    }

    public function getErrorMessages(FormInterface $form): array {
        $errors = [];
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

    function getEntity()
    {
        return $this->entity;
    }

    function getTypeClass()
    {
        return $this->typeClass;
    }

    function getService()
    {
        return $this->service;
    }


}