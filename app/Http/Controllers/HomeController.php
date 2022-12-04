<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
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
        // return ("hi"); 
        $user = Auth::user();
        if($user->hasRole("Admin"))
        {
            $title = "Admin Dashboard"; 
            $pagename = "You are viewing Admin Dashboard"; 
            return view("dashboards/admin", compact("user", "title", "pagename")); 
        }
    }
}
