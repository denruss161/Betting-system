<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bavix\Wallet\Models\Transfer;

class PlayerWalletController extends Controller
{
    
    public function index() {
        $recentTransfers = Transfer::query()
            ->with(['from.holder', 'to.holder', 'deposit'])
            ->whereHas('to.holder', function ($query) {
                $query->where('id', auth()->id());
            })
            ->get();
        return view('player.wallet', compact('recentTransfers'));
    }
}
