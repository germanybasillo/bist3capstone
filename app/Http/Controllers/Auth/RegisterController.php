<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RegisterController extends Controller
{
    public function registration()
    {
        if (Auth::check()) {
            return redirect()->route('page/landingpage');
        }
        return view('account.registration');
    }

    public function validate_registration(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user); // Automatically log in the user after registrations
        return redirect()->route('login')->with('success', 'Registration completed. Welcome to the dashboard!');
    }
}
