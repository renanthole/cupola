<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class enterpriseTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function enterprise_routes()
    {
        $responseIndex = $this->get('/api/enterprises/');
        $responseIndex->assertStatus(200);

        $responseShow = $this->get('/api/enterprises/1');
        $responseShow->assertStatus(200);
    }
}
