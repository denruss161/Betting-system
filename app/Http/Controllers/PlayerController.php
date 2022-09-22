<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\View\View;



class PlayerController extends Controller
{


    public function index()
    {
        $players = User::query()
            ->with('createdBy')
            ->role('user')
            ->paginate(10);
        return view('agent.player.index', compact('players'));
    }


    public function create() {
        return view('agent.player.create');
    }

    public function store(RegisterUserRequest $request)
    {
        User::create($request->validated() + ['created_by' => auth()->id()])->assignRole('user');
        return redirect()->back();
    }
}
