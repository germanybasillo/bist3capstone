<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    
    public function logout()
    {
        Auth::logout();

        return redirect()->route('/login')->with('success', 'You have been logged out.');
    }
}
