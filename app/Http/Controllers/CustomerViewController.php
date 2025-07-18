<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class CustomerViewController extends Controller
{
    public function show($sessionId)
    {
        $transaction = Transaction::find($sessionId);

        if (!$transaction) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return [
            'items' => json_decode($transaction->items),
            'total' => $transaction->total
        ];
    }
}
