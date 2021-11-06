<?php

declare(strict_types=1);

namespace ComposerTemplate\Tests\Examples;

use ComposerTemplate\Examples\Example;
use PHPUnit\Framework\TestCase;

/**
 * Class ExampleTest
 */
class ExampleTest extends TestCase
{
    /**
     * @group Example
     */
    public function testReturnTrue()
    {
        $this->assertTrue(Example::returnTrue());
    }
}
