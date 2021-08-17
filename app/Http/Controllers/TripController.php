<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
class TripController extends Controller
{
    public function index($id){
        // dd("ssdsd");
        // $bus=Bus::find($id);
        // dd($bus);
        $trips=Trip::paginate(10);
        return view ('admin.trip');
    }

    public function create()
    {
        $bus=Bus::all();
        dd($bus);

        return view('admin/trip',compact('bus'));
        
    }

    public function store(Request $request)
    {
        // dd($request);
        $trip=new Trip;
        $trip->bus_id=$request->bus_id;
        $trip->from=$request->from;
        $trip->to=$request->to;
        $trip->estimate_time=$request->estimate_time;
        // $trip->available_seat=$request->available_seat;
        $trip->save();

        return redirect('admin/bus');

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

    public function destroy(Trip $trip)
    {
        $trip->delete();
        return back()->with('success', 'trip Deleted Successfully!');
    }
}
