<?php

namespace App\Http\Controllers;

use App\Models\bed;
use App\Models\room;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProjectController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('account.login');
    }

    public function registration()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
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
        return redirect()->route('dashboard')->with('success', 'Registration completed. Welcome to the dashboard!');
    }

    public function validate_login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', 'Login details are not valid');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect()->route('login')->with('error', 'You are not allowed to access');
    }

    public function home()
    {
        if (Auth::check()) {
            return view('page.home');
        }

        return redirect()->route('login')->with('error', 'You are not allowed to access');
    }

    public function admindashboard()
    {
        // if (Auth::check()) {

            return view('page.landingpage',[
                'tenants' => Tenant::count(),
                'rooms' => room::count(),
                'beds' => bed::count(),
            ]);
        // }

        // return redirect()->route('login')->with('error', 'You are not allowed to access');
    }

    public function tenantdashboard()
    {
        // if (Auth::check()) {

            return view('tenant.index',[
                // 'balances' => balance::count(),
                // 'payment_historys' => payment_history::count(),
            ]);
        // }

        // return redirect()->route('login')->with('error', 'You are not allowed to access');
    }



    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
