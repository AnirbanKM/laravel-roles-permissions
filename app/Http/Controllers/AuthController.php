<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createUser(Request $r)
    {
        try {

            $validated = $r->validate([
                'name' => 'required|string',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6'
            ]);


            User::create([
                'name' => $r->name,
                'email' => $r->email,
                'role_id' => 1,
                'password' => Hash::make($r->password)
            ]);

            return redirect()->route('login');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function loginAction(Request $r)
    {
        try {
            $validated = $r->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $check = Auth::attempt(['email' => $r->email, 'password' => $r->password]);

            if ($check) {
                return redirect()->route('dashboard');
            }
            return redirect()->route('login');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }
}
