<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class stateTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function state_routes()
    {
        $responseIndex = $this->get('/api/states/');
        $responseIndex->assertStatus(200);

        $responseShow = $this->get('/api/states/1');
        $responseShow->assertStatus(200);
    }
}
