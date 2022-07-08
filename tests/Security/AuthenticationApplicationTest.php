<?php

namespace App\Tests\Security;

use App\Entity\User;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationApplicationTest extends WebTestCase
{
    use ReloadDatabaseTrait;

    const PASSWORD_TEST = "password!";

    public function setUp(): void
    {
        parent::setUp();
        self::bootKernel();
    }

    public function testLogin(): void
    {
        $client = new \GuzzleHttp\Client([
            'base_url' => 'http://host.docker.internal:8001',
            'defaults' => [
                'exceptions' => false
            ]
        ]);

        $response = $client->post( 'http://host.docker.internal:8001/authentication_token', [
            \GuzzleHttp\RequestOptions::JSON => [
                'email' => 'test@example.com',
                'password' => 'test1234',
            ]
        ]);
        $json = (string) $response->getBody();
        $json = json_decode($json, true);

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
        $this->assertArrayHasKey('token', $json);

        // test not authorized
        $response = $client->request('GET','http://host.docker.internal:8001/api/v1/movies', ['http_errors' => false]);
        $this->assertEquals($response->getStatusCode(), Response::HTTP_UNAUTHORIZED);

        // test authorized
        $response = $client->request('GET', 'http://host.docker.internal:8001/api/v1/movies', ['http_errors' => false, 'headers' =>
        [
            'Authorization' => "Bearer {$json['token']}"
        ]]);
        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
    }
}