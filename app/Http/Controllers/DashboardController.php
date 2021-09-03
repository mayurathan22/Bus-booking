<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\TicketBooking;
use App\Models\Trip;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // dd("dsds");
        // $booking=TicketBooking::paginate(1);

        $user_id = auth()->user()->id;
        $booking = DB::table('ticket_bookings')->where('user_id', $user_id)
        ->join('trips', 'ticket_bookings.trip_id', '=', 'trips.id')
        ->get();
        // dd($booking);
        return view('user.dashboard',compact('booking'));
    }

    public function destroy($id)
    {
        $booking=TicketBooking::find($id);
        $booking->delete();
        return redirect('/user/dashboard')->with(['message'=> 'Successfully deleted!!']);
    }
}
