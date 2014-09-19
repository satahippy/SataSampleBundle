<?php

namespace Sata\SampleBundle\Tests\Functional\Controller;

use Sata\SampleBundle\Tests\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testWelcomeMessagePrintIfEnabledInConfig()
    {
        $client = static::createClient(['environment' => 'with_welcome']);
        $crawler = $client->request('GET', '/welcome');

        $this->assertEquals(1, $crawler->filter('html:contains("Welcome to the club!")')->count());
    }

    public function testWelcomeMessageNotPrintIfDisabledInConfig()
    {
        $client = static::createClient(['environment' => 'without_welcome']);
        $crawler = $client->request('GET', '/welcome');

        $this->assertEquals(1, $crawler->filter('html:contains("We don\'t like you!")')->count());
    }
}