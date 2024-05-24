<?php

namespace App\Http\Controllers\Page;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bed;
use App\Models\room;
use App\Models\Tenant;

class PageController extends Controller
{
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
}
