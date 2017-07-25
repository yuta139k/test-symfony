<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TeamControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/team');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('team', $crawler->filter('h1')->text());
    }
}
