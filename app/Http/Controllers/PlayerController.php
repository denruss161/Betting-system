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
        return view('agent.createPlayer');
    }

    public function signUp(RegisterUserRequest $request)
    {
        $user = User::create($request->validated())->assignRole('user');
        return redirect()->back();
    }

}
