<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'teams/1/players');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('player', $crawler->filter('h1')->text());
    }
}
