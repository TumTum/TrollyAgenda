<?php

namespace Trolley\AgendaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserListeControllerTest extends WebTestCase
{
    public function testList()
    {
        $this->markTestSkipped();
        $client = static::createClient();
        $crawler = $client->request('GET', '/list');
    }

}
