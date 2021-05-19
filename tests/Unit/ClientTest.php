<?php

namespace Tests\Unit;

use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testIndex()
    {
        $response = $this->call('GET', 'clients');
        $response->assertViewHas('clients');
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function testShow()
    {
        $response = $this->call('GET', 'clients/1');
        $response->assertViewHas('client');
    }
}
