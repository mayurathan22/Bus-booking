<?php

namespace App\Http\Controllers;

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
        // dd(auth()->user()->roleusers->roles->id);
        if(auth()->user()->roleusers->roles->id==1){

            return redirect(route('admin-home'));
        }
        else
        {
            return view('user.dashboard');
        }
    }

    public function adminIndex()
    {
        return view('admin.bus');
    }

    // public function userDashboard()
    // {
    //     return view('user.dashboard');
    // }
}
