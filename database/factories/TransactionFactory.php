<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $account = \App\Models\Account::all()->pluck('id')->toArray();
        $customer = \App\Models\Customer::all()->pluck('id')->toArray();

        return [
            // 'account_id' => $this->faker->randomElement($account),
            'from' => $this->faker->randomElement($customer),
            'to' => $this->faker->randomElement($customer),
            // 'type' => $this->faker->randomElement(['transfer', 'deposit', 'withdrawal']),
            'type' => 'transfer',
            'amount' => rand(2000, 50000),
        ];
    }
}
