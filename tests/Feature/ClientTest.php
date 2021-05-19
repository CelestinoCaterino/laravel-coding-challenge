<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * @return void
     */
    public function testIndexReturnStatus200()
    {
        $response = $this->get('clients');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testIndexReturnViewWithData()
    {
        $response = $this->get('clients');
        $response->assertViewHas('clients');
    }

    /**
     * @return void
     */
    public function testShowReturnStatus200()
    {
        $client = \App\Models\Client::first();
        $response = $this->get('clients/'.$client->id);
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testShowReturnViewWithData()
    {
        $client = \App\Models\Client::first();
        $response = $this->get('clients/'.$client->id);
        $response->assertViewHas('client');
    }

    /**
     * @return void
     */
    public function testCreateReturnStatus200()
    {
        $response = $this->get('clients/create');
        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testClientCreation()
    {
        $client = \App\Models\Client::factory()->create();
        $this->post('clients/create', $client->toArray());
        $response = $this->get('clients/'.$client->id);
        $response->assertStatus(200);
    }
}
