<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\WithFaker;

class CustomerTest extends TestCase
{
    use HasFactory, WithFaker;

    /**
     * register a customer
     *
     * @return void
     */
    public function test_customer_can_be_registered()
    {
        // create a user
        $user = \App\Models\User::factory()->create();

        // create customer 1
        $response = $this->actingAs($user, 'api')
            ->withHeaders([
                'apikey' => $user->access_key
            ])->post('/api/customers/register', [
                'name' => 'Brandon Ford',
                'email' => $this->faker->unique()->safeEmail(),
                'phone' => '+237670000001',
                'address' => 'Douala Bonaberi'
            ]);

        $response->assertStatus(201);

        // create customer 2
        $response = $this->actingAs($user, 'api')
            ->withHeaders([
                'apikey' => $user->access_key
            ])->post('/api/customers/register', [
                "name" => "Henry Jordan",
                'email' => $this->faker->unique()->safeEmail(),
                "phone" => "+237670000002",
                "address" => "Buea Molyko"
            ]);

        $response->assertStatus(201);
    }
}
