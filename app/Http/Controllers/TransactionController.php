<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'items' => 'required|array',
            'total' => 'required|integer'
        ]);

        $transaction = Transaction::create([
            'store_id' => $request->user()->store_id,
            'user_id' => $request->user()->id,
            'items' => json_encode($validated['items']),
            'total' => $validated['total']
        ]);

        return response()->json($transaction);
    }
}
