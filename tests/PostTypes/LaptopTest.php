<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class LaptopTest extends TestCase {
    /**
     * @test
     */
    function laptop_post_type_is_registered() {
        $this->assertTrue(post_type_exists('laptop'));
    }
}
