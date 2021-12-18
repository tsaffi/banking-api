<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * register a customer
     *
     * @return void
     */
    public function test_customer_can_be_registered()
    {
        // create customer 1
        $response = $this->post('/api/customers/register', [
            'name' => 'Brandon Ford',
            'email' => 'brandon@gmail.com',
            'phone' => '+237670000001',
            'address' => 'Douala Bonaberi'
        ]);

        $response->assertStatus(201);

        // // create customer 2
        // $response = $this->post('/api/customers/register', [
        //     "name" => "Henry Jordan",
        //     "email" => "jordan@gmail.com",
        //     "phone" => "+237670000002",
        //     "address" => "Buea Molyko"
        // ]);

        // $response->assertStatus(201);
    }
}
