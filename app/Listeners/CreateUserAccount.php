<?php

namespace App\Listeners;

use App\Currencies;
use App\Models\Account;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserAccount
{

    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $accounts = User::query()->where('id', '=', $event->user->id)
            ->first()
            ->accounts()
            ->saveMany([
                new Account([
                    'number' => rand(10000, 99999) . '-' . Currencies::EUR,
                    'currency' => 'EUR',
                    'balance' => 0
                ]),
                new Account([
                    'number' => rand(10000, 99999) . '-' . Currencies::USD,
                    'currency' => "USD",
                    'balance' => 0
                ]),
                new Account([
                    'number' => rand(10000, 99999) . '-' . Currencies::JOD,
                    'currency' => "JOD",
                    'balance' => 0
                ]),
            ]);
    }
}
