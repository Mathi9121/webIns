<?php

namespace App\Tests\Controller\Evenements;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InscriptionPubliqueControllerTest extends WebTestCase
{
    public function testInscription()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/inscription');
    }

    public function testCreateinscription()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createInscription');
    }

}
