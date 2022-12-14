<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;

class RegisterController extends Controller
{

    public function __construct() {
        $this->middleware('guest', ['except' => 'index']);
    }

    public function create() {

        return view('auth.register');
    }

    public function store(CreateUserRequest $request) {

        $validated = $request->validated();

        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();

        auth()->logout($user);

        return redirect('/');
    }
}
