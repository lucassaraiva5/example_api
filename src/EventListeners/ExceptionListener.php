<?php

namespace App\EventListeners;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

class ExceptionListener
{
    /**
     * @var LoggerInterface $logger
     */
    private $logger;

    /**
     * @var bool $showDebugMessages
     */
    private $showDebugMessages;

    /**
     * @codeCoverageIgnore
     *
     * @param LoggerInterface $logger
     * @param mixed           $showDebugMessages
     */
    public function __construct(
        LoggerInterface $logger,
                        $showDebugMessages = false
    ) {
        $this->logger            = $logger;
        $this->showDebugMessages = $showDebugMessages;
    }

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        // Only handle JSON requests (if the body can actually have JSON)
        // Must use === and false to check for false return since a 0 position would also evaluate to false
        if (($event->getRequest()->getMethod() === 'POST' || $event->getRequest()->getMethod() === 'PUT') && strpos($event->getRequest()->headers->get('Content-Type', null), 'application/json') === false
        ) {
            return;
        }

        $this->logger->error($exception->getMessage(), ['exception' => $exception]);

        switch (get_class($exception)) {
            case 'Doctrine\ORM\EntityNotFoundException':
                $response = new JsonResponse([
                    'error' => 'Could not find ' . $exception->getMessage(),
                ], Response::HTTP_NOT_FOUND);

                break;
            case 'HttpExceptionInterface':
                $response = new JsonResponse(["error" => $exception->getMessage()], $exception->getStatusCode());
                $response->headers->replace($exception->getHeaders());

                break;
            case 'UniqueConstraintViolationException':
                $response = new JsonResponse([
                    'error' => 'Entity Already Exists',
                ], Response::HTTP_CONFLICT);

                break;
            case 'Symfony\Component\HttpKernel\Exception\BadRequestHttpException':
                $response = new JsonResponse([
                    'error' => 'Bad request.',
                ], Response::HTTP_BAD_REQUEST);

                break;
            case 'Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException':
                $response = new JsonResponse([
                    'error' => 'You do not have permission to access this.',
                ], Response::HTTP_FORBIDDEN);

                break;
            case 'Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException':
                $response = new JsonResponse([
                    'error' => 'You do not have valid authorization credentials to access this.',
                ], Response::HTTP_UNAUTHORIZED);

                break;
            case 'Symfony\Component\HttpKernel\Exception\NotFoundHttpException':
                $response = new JsonResponse([
                    'error' => 'Route not found.',
                ], Response::HTTP_NOT_FOUND);
                break;
            case 'Symfony\Component\PropertyAccess\Exception\InvalidArgumentException':
                $response = new JsonResponse([
                    'error' => 'Invalid JSON content.',
                ], Response::HTTP_BAD_REQUEST);
                break;
            default:
                $response = new JsonResponse([
                    'error' => 'There was an issue completing your request.',
                ]);

                var_dump($exception->getMessage());
                var_dump($exception->getTraceAsString());

                break;
        }
        $event->setResponse($response);
    }
}