<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class UserTest extends TestCase
{
    use WithFaker;

    /**
     * register a user
     *
     * @return void
     */
    public function test_user_can_be_registered()
    {
        $response = $this->post('/api/register', [
            "name" => "John Doe",
            'email' => $this->faker->unique()->safeEmail(),
            "password" => "password"
        ]);
        $response->assertStatus(201);
    }

}
