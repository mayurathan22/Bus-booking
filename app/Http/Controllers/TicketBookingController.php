<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use App\Models\TicketBooking;
use App\Models\Trip;
use Illuminate\Http\Request;

class TicketBookingController extends Controller
{
    public function index($id){
        $trip=Trip::find($id);
        // dd($trip);
        $tickets=TicketBooking::get();
        return view ('user.bus-book',compact('trip','tickets'));
    }

    // public function create($id){
    // $tripId=Trip::where('id',$id)->first()->trip_id;
    //  return view ('user.bus-book');    
       
    // }

    public function store(Request $request,$id){
        // dd($request->all(),$id);
        $ticket=new TicketBooking();
        $ticket->trip_id=$id;
        $ticket->passenger_name=$request->passenger_name;
        $ticket->seat_no=$request->seat_no;
        $ticket->mobile_number=$request->mobile_number ;
        $ticket->save();
        // dd($ticket);
        return redirect('user/dashboard');

       
    }
    public function show($id)
    {
        dd($id);
        try {
            $ticket = TicketBooking::findOrFail($id);
        
        } catch (\Exception $exception ) {
            abort(404);
        }
        return view('user.bus');
    }

   
}
