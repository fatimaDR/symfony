<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SiteControllerTest extends WebTestCase
{
    public function testAcueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acueil');
    }

    public function testService()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/service');
    }

    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

}
