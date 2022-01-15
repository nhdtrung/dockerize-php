<?php

declare(strict_types=1);

namespace App\ExampleTest;

use App\Example\Demo;
use PHPUnit\Framework\TestCase;

/**
 * Class ExampleTest
 */
class DemoTest extends TestCase
{
    /**
     * @group Example
     */
    public function testReturnTrue()
    {
        $this->assertTrue(Demo::returnTrue());
    }
}
