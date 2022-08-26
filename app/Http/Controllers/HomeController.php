<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if(Auth::user()->user_role->role->name === "Manager"){
            return redirect()->route("manager.home");
        }
        if(Auth::user()->user_role->role->name === "Cashier"){
            return redirect()->route("cashier.home");
        }

        return redirect()->route("customer.home");
    }
}
