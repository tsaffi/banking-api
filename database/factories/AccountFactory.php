<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer = \App\Models\Customer::all()->pluck('id')->toArray();

        return [
            'uuid' => generateAID(),
            'customer_id' => $this->faker->randomElement($customer),
            'balance' => rand(2000, 50000),
        ];
    }
}
