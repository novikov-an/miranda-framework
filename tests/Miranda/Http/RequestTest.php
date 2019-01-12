<?php

namespace Tests\Framework\Http;

use Miranda\Http\Request;
use Miranda\Http\RequestFactory;
use Miranda\Tests\MirandaTestCase;


class RequestTest extends MirandaTestCase
{
    public function testForEmpty()
    {
        $request = RequestFactory::fromGlobals();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams()
    {
        $_GET = $data = [
            'name' => 'John',
            'age' => 28,
        ];

        $request = new Request($_GET, $_POST);

        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testParsedBody()
    {
        $_POST = $data = ['title' => 'Title'];

        $request = new Request($_GET, $_POST);

        self::assertEquals([], $request->getQueryParams());
        self::assertEquals($data, $request->getParsedBody());
    }
}
