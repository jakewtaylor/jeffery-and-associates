<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\{ CreateUserRequest, UpdateUserRequest };

class UserController extends Controller {
    // GET /users
    public function index () {
        $users = User::all()->sortBy('name');
        return view('app.users.index', [
            'users' => $users,
        ]);
    }

    // GET /users/create
    public function create () {
        return view('app.users.create');
    }

    // POST /users
    public function store (CreateUserRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.show', [
            'id' => $user->id,
        ]);
    }

    // GET /users/{id}
    public function show (User $user) {
        return view('app.users.show', [
            'user' => $user,
        ]);
    }

    // GET /users/{id}/edit
    public function edit (User $user) {
        return view('app.users.edit', [
            'user' => $user,
        ]);
    }

    // PATCH /users/{id}
    public function update (UpdateUserRequest $request, User $user) {
        $user->name = $request->name;
        if ($request->password) $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('users.show', [
            'id' => $user->id,
        ]);
    }

    // DELETE /users/{id}
    public function destroy (User $user) {
        if (User::count() <= 1) {
            return back()->withErrors(['You can\'t delete every user!']);
        }

        $user->delete();
        return redirect()->route('users.index');
    }
}
