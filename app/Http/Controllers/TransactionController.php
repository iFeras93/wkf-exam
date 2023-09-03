<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TransactionController extends Controller
{
    public function index($account_id)
    {
        $transactions = Transaction::query()
            ->where('account_id', '=', $account_id)->get();

//        return $transactions;
        return Inertia::render('TransactionsList', [
            'transactions' => $transactions,
        ]);
    }

    public function showTransactionForm($account_id)
    {

        return Inertia::render('TransactionForm', [
            'account_id' => $account_id,
        ]);
    }

    public function makeTransaction(TransactionRequest $request)
    {
        Transaction::query()->create([
            'account_id' => $request->input('account_id'),
            'type' => $request->input('type'),
            'amount' => $request->input('amount'),
            'timestamp' => now(),
        ]);

        auth()->user()
            ->accounts()
            ->where('id', '=', $request->input('account_id'))->first()
            ->increment('balance', $request->input('amount'));
        return to_route('dashboard');
    }
}
