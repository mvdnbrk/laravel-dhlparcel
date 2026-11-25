<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\Laravel\DhlParcelClientAdapter;
use PHPUnit\Framework\Attributes\Test;

class HelperTest extends TestCase
{
    #[Test]
    public function it_has_a_helper_function(): void
    {
        $this->assertTrue(function_exists('dhlparcel'));

        $this->assertInstanceOf(DhlParcelClientAdapter::class, dhlparcel());
    }
}
