<?php

use Miranda\Http\Response;
use Miranda\Tests\MirandaTestCase;

class ResponseTest extends MirandaTestCase
{
    public function testEmpty()
    {
        $body = 'Body';
        $response = new Response($body);

        self::assertEquals($body, $response->getBody());
        self::assertEquals(200, $response->getStatusCode());
    }
}
