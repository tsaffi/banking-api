<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Customer;
use App\Models\Account;
use App\Models\User;

class AccountTest extends TestCase
{
    /**
     * test customer account can be created
     *
     * @return void
     */
    public function test_customer_account_can_be_created()
    {
        // create a user
        $user = User::factory()->create();

        // create 3 customers
        $customers = Customer::factory(3)->create();

        // create account 1
        $response = $this->actingAs($user, 'api')
        ->withHeaders([
            'apikey' => $user->access_key
        ])->post('/api/accounts/create', [
            "customer_id" => Customer::inRandomOrder()->first()->id,
            "amount" => rand(20000, 50000)
        ]);

        $response->assertStatus(201);

        // create account 2
        $response = $this->actingAs($user, 'api')
        ->withHeaders([
            'apikey' => $user->access_key
        ])->post('/api/accounts/create', [
            "customer_id" => Customer::inRandomOrder()->first()->id,
            "amount" => rand(20000, 50000)
        ]);

        $response->assertStatus(201);

        // create account 3
        $response = $this->actingAs($user, 'api')
        ->withHeaders([
            'apikey' => $user->access_key
        ])->post('/api/accounts/create', [
            "customer_id" => Customer::inRandomOrder()->first()->id,
            "amount" => rand(20000, 50000)
        ]);

        $response->assertStatus(201);
    }

    /**
     * test funds can be transfered betweeen bank accounts
     *
     * @return void
     */
    public function test_funds_can_be_transfered_between_bank_accounts()
    {
        // create a user
        $user = User::factory()->create();

        // create 3 accounts
        $sccounts = Account::factory()->create();

        $response = $this->actingAs($user, 'api')
        ->withHeaders([
            'apikey' => $user->access_key
        ])->post('/api/accounts/funds/transfer', [
            "account_debited" => Account::first()->uuid,
            "account_credited" => Account::inRandomOrder()->first()->uuid,
            "amount" => rand(200, 500)
        ]);

        $response->assertStatus(200);
    }

    /**
     * test account balance can be retrieved
     *
     * @return void
     */
    public function test_account_balance_can_be_retrieved()
    {
        // create a user
        $user = User::factory()->create();

        // create 3 accounts
        $sccounts = Account::factory()->create();

        // get the first account
        $account = Account::first();

        $response = $this->actingAs($user, 'api')
        ->withHeaders([
            'apikey' => $user->access_key
        ])->get('/api/accounts/'.$account->uuid.'/balance');
        
        $response->assertStatus(200);
    }

    /**
     * test account has transfer history(transactions)
     *
     * @return void
     */
    public function test_account_has_transfer_history()
    {
        // create a user
        $user = User::factory()->create();

        // create 3 accounts
        $sccounts = Account::factory()->create();

        // get the first account
        $account = Account::first();

        $response = $this->actingAs($user, 'api')
        ->withHeaders([
            'apikey' => $user->access_key
        ])->get('/api/accounts/'.$account->uuid.'/history');
        
        $response->assertStatus(200);
    }
}
