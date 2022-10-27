<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class cityTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function cities_route()
    {
        $responseIndex = $this->get('/api/cities/1');
        $responseIndex->assertStatus(200);
    }
}
