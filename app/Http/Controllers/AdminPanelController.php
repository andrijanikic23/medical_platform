<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function users()
    {
        $users = User::all();

        return view('admin', ['users' => $users]);
    }

    public function changeRole(User $user)
    {
        $user->update([
            'role' => $user->role === 'patient' ? 'staff' : 'patient'
        ]);

        return redirect()->back();
    }
}
