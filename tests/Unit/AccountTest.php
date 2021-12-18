<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Customer;
use App\Models\Account;

class AccountTest extends TestCase
{
    /**
     * test customer account can be created
     *
     * @return void
     */
    public function test_customer_account_can_be_created()
    {
        $response = $this->post('/api/accounts/create', [
            "customer_id" => Customer::first()->id,
            "amount" => rand(2000, 5000)
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
        $response = $this->post('/api/accounts/funds/transfer', [
            "account_debited" => Customer::first()->id,
            "account_credited" => Customer::latest()->id,
            "amount" => rand(2000, 5000)
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
        // get the first account
        $account = Account::first();

        $response = $this->get('/api/accounts/'.$account->uuid.'/balance');
        $response->assertStatus(200);
    }

    /**
     * test account has transfer history(transactions)
     *
     * @return void
     */
    public function test_account_has_transfer_history()
    {
        // get the first account
        $account = Account::first();

        $response = $this->get('/api/accounts/'.$account->uuid.'/history');
        $response->assertStatus(200);
    }
}
