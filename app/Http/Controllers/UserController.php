<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show($id) {
        $user = User::with(['mesVoyages', 'likes', 'avis'])->findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.show', $user->id);
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
