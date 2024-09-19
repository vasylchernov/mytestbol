<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
        foreach ([1,1,1,1,1,1,1,1,1] as $i) {
            $this->assertTrue(true);
        }
    }

    public function my_test_that_true_is_true(): void
    {
        $this->assertTrue(true);
        foreach ([1,1,1,1,1,1] as $i) {
            $this->assertTrue(true);
        }
    }
}
