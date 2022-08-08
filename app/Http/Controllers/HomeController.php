<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role == 'seller') {
            $role = 'Vendedor';
            return view('seller/dashboard', compact('user', 'role'));
        } else {
            $role = 'Comprador';
            return view('buyer/dashboard', compact('user', 'role'));
        }
    }
}
