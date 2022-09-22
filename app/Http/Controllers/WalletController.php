<?php

namespace App\Http\Controllers;

use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Bavix\Wallet\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WalletController extends Controller
{
    public function index(): View {
        $recentTransfers = Transfer::query()
            ->with(['from.holder', 'to.holder', 'deposit'])
            ->whereHas('from.holder', function ($query) {
                $query->where('id', auth()->id());
            })
            ->get();

        $users = User::query()
            ->role('user')
            ->where('created_by', auth()->id())
            ->get();
        return view('agent.wallet.index', compact('recentTransfers', 'users'));
    }

    public function store(Request $request) {
        auth()->user()->transfer(User::find($request->receiver), $request->amount);
        return redirect()->back();
    }

    public function create() {
        return view('agent.player.create');
    }
}
