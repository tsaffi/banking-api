<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseController; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use DB;

class AccountController extends ResponseController
{
  /**
   * Create user bank account.
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request) 
  {
    // validate the data
    $validator = Validator::make($request->all(), [
      'customer_id' => 'required|exists:customers,id',
      'amount' => 'required'
    ]);
  
    if ($validator->fails()) {
      return $this->formatJson($validator->errors()->first(), "Bad Request", 400);
    }
  
    // create user bank account
    $account = new Account();
    $account->uuid = generateAID();
    $account->customer_id = $request->customer_id;

    if (!$account->save())
      return $this->formatJson("The account could not be created. Please try again", "FAILURE", 406);

    // Credit/Deposit/Top up the account
    $transaction = new Transaction();
    $transaction->account_id = $account->id;
    $transaction->type = "deposit";
    $transaction->amount = $request->amount;
    if (!$transaction->save())
      return $this->formatJson("The account couldnot be topup", "FAILURE", 406);

    return $this->formatJson("The account was successfully created and top up", "SUCCESS", 201);
  }


    /**
   * Get bank account transfer history.
   * @return \Illuminate\Http\Response
   */
  public function history($uuid)
  {
    $account = Account::whereUuid($uuid)->first();
    // $transaction = Transaction::where('account_id', Account::whereUuid($uuid)->first()->id)->with(['account'])->get();

    if ($account) {
      return $this->formatJson("Account history", "SUCCESS", 200, $account->transactions);
    }

    return $this->formatJson("The account does not exist.", "FAILURE", 406);
  }

  /**
   * Get bank account balance.
   * @return \Illuminate\Http\Response
   */
  public function balance($uuid)
  {
    $account = Account::whereUuid($uuid)->first();

    if ($account) {
      return $this->formatJson("Account balance", "SUCCESS", 200, "$account->balance");
    }

    return $this->formatJson("Account balance", "FAILURE", 406);
  }

  /**
   * Transfer funds from one account to another.
   * @return \Illuminate\Http\Response
   */
  public function fundsTransfer(Request $request)
  {
    // validate the data
    $validator = Validator::make($request->all(), [
      'account_debited' => 'required|exists:accounts,uuid',
      'account_credited' => 'required|exists:accounts,uuid',
      'amount' => 'required'
    ]);
  
    if ($validator->fails()) {
      return $this->formatJson($validator->errors()->first(), "Bad Request", 400);
    }

    $response = DB::transaction(function() use ($request)
    {
      try{
        // create the transaction
        $transaction = new Transaction();
        $transaction->type = "transfer";
        $transaction->amount = $request->amount;
        $transaction->from = $request->account_debited;
        $transaction->to = $request->account_credited;
        if (!$transaction->save()) {
          return $this->formatJson("The transaction could not be created", "FAILURE", 406);
        }

        // debit account sending
        $account = Account::where('uuid', $request->account_debited)->first();

        if (!$account) {
          throw new \Exception('Account to be debited does not exist');
        }

        if ($account->balance < $request->amount) {
          // return $this->formatJson("Funds not transfered", "FAILURE", 406);
          throw new \Exception('The account balance is less than the amount requested');
        }

        $account->balance = $account->balance - $request->amount;
        $account->save();

        // $account = new Account();
        // $account->balance = 9;
        // $account->save();

        // credit account receiving
        $account = Account::where('uuid', $request->account_credited)->first();

        if (!$account) {
          throw new \Exception('Account to be credited does not exist');
        }

        $account->balance = $account->balance + $request->amount;
        $account->save();

        return $this->formatJson("Funds successfully transfered", "SUCCESS", 200);
      } catch (\Exception $e) {
        DB::rollback();
        return $this->formatJson($e, "FAILURE", 406);
      }
    });

    return $response;
  }

}