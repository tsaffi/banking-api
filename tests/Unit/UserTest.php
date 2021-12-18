<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * register a user
     *
     * @return void
     */
    public function test_user_can_be_registered()
    {
        $response = $this->post('/api/register', [
            "name" => "John Doe",
            "email" => "johndoe2@gmail.com",
            "password" => "password"
        ]);
        $response->assertStatus(201);
    }

}
