<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\ReferralToken;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAgentsController extends Controller
{
    public function index() {
        $referredAgents = User::query()
            ->role('agent')
            ->where('referred_by', auth()->id())
            ->get();

        return view('admin.agent.index', compact('referredAgents'));
    }


    public function store(RegisterUserRequest $request) {
        User::create($request->validated() + ['referred_by' => auth()->id()])
            ->assignRole('agent');
        return redirect()->route('admin.agents.index');
    }


    public function create() {
        return view('admin.agent.create');
    }


    public function referralView(Request $request) {
        if (!$referralToken = ReferralToken::where('referral_token', $request->input('referral_token'))->first()) {
            abort(404, 'Not Found');
        }
        return view('admin.agent.invite', compact('referralToken'));
    }


    public function referralRegistration(RegisterUserRequest $request, ReferralToken $referralToken) {
        User::create($request->validated() + ['referred_by' => $referralToken->user_id])
            ->assignRole('agent');

        return redirect()->route('login');
    }
}
