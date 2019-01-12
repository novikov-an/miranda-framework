<?php

namespace Miranda\Tests;

use PHPUnit\Framework\TestCase;

class MirandaTestCase extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->clearGlobalVariables();
    }

    private function clearGlobalVariables()
    {
        $_GET = [];
        $_POST = [];
    }
}
