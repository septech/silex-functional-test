<?php

namespace SepCom\Tests;

use Silex\WebTestCase;

class FrontTest extends WebTestCase
{
    public function createApplication()
    {
        return include __DIR__.'/../../../app.php';
    }

    public function testFrontPageReturnHelloWorldText()
    {
        $client = $this->createClient();
	    $crawler = $client->request('GET', '/');

	    $this->assertTrue($client->getResponse()->isOk());
	    $this->assertEquals('Hello World, SepTech!', $client->getResponse()->getContent());
    }
}
