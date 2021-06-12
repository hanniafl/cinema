<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->only('name', 'email')
        + [
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->back();
    }
}
