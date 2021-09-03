<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use App\Models\TicketBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user_id = auth()->user()->id;
        $result = DB::table('role_users')->where('user_id', $user_id)->first();
        
        if($result->role_id==1){
            return redirect(route('admin-homeIndex'));
        }
        else
        {
            return redirect(route('user-homeIndex'));
            // return view('user.dashboard');
        }
    }

    public function adminIndex()
    {
        $buses = Bus::get();
        // dd($bus);
        // dd("dds");
        return view('admin.bus',compact('buses'));
    }
    public function userIndex(){
        // $booking=TicketBooking::paginate(1);
        $user_id = auth()->user()->id;
        $booking = DB::table('ticket_bookings')->where('user_id', $user_id)
        ->join('trips', 'ticket_bookings.trip_id', '=', 'trips.id')
        ->get();
        // dd($booking);
        return view('user.dashboard',compact('booking'));
    }
   
}
