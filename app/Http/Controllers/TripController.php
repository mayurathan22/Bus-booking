<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\TicketBooking;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function index(){
        $trip = Trip::get();
        $bus=Bus::get();
        // $trip=Bus::find(1);
        // $trip->bus->name;
        // $trip->bus->description;

        // dd($trip,$bus);
        // dd("dds");
        return view('admin.trip',compact('trip','bus'));
    }

    // public function adminIndex()
    // {
    //     $bus = Bus::get();
    //     $trip=Trip::get();
    //     // dd($trip);
    //     // dd("dds");
    //     return view('admin.trip',compact('bus','trip'));
    // }

    public function create()
    {
        // $bus=Bus::all();
        // $trip=Trip::get();
        // // dd($bus);

        // return view('admin/trip',compact('bus','trip'));
        
    }

    public function store(Request $request)
    {
        // dd($request);
        $trip=new Trip;
        $trip->bus_id=$request->bus_id;
        $trip->from=$request->from;
        $trip->to=$request->to;
        $trip->estimate_time=$request->time;
        $trip->date=$request->date;
        // $trip->available_seat=$request->available_seat;
        $trip->save();
        // $trip->bus()->attach($bus);
        return redirect('admin/trip');

    }

    // public function getBuses($id)
    // {
    //     $bus=Bus::find($id);
    //     dd($bus);



    // }

    public function show($id)
    {
        // dd($id);
        try {
            $trip = Trip::findOrFail($id);
        
        } catch (\Exception $exception ) {
            abort(404);
        }
        return view('admin.trip');
    }


    public function destroy($id)
    {
        $trip=Trip::find($id);
        $trip->delete();
        return redirect('/admin/trip')->with(['message'=> 'Successfully deleted!!']);
    }

    public function user()
    {
        // $result = DB::table('ticket_Bookings')->get();
        $booking = DB::table('ticket_bookings')
        ->join('trips', 'ticket_bookings.trip_id', '=', 'trips.id')
        ->get();
        // dd($booking);
       return view('admin.booked-users', compact('booking'));
    }
}
