<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\TicketBooking;
use App\Models\Trip;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // dd("dsds");
        $booking=TicketBooking::paginate(1);

        return view('user.dashboard',compact('booking'));
    }

    public function destroy($id)
    {
        $booking=TicketBooking::find($id);
        $booking->delete();
        return redirect('/user/dashboard')->with(['message'=> 'Successfully deleted!!']);
    }
}
