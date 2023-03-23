<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DataTest extends TestCase
{
    use RefreshDatabase;

    public function test_data_create(): void
    {
        $response = $this->json('post', '/api/send');

        $response->assertCreated();
        $response->assertJsonStructure([
            'data' => [
                'id',
                'local_uuid',
                'message',
                'created_at',
                'updated_at'
            ]
        ]);

        var_dump($response->json('data.10'));
    }

}

