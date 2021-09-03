<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use App\Models\TicketBooking;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TicketBookingController extends Controller
{
    public function index($id){

        $trip=Trip::find($id);
        $seat_booked_array = array();
        
        $result = DB::table('ticket_Bookings')->where('trip_id', $id)->get('seat_no');
        
        
        foreach ($result as $value) {
            foreach ($value as $val) {
                $decoded_result = json_decode($val);
                    $splitted_array = explode(',', $decoded_result);
                    foreach ($splitted_array as $vl) {
                        $seat = (int)$vl;
                        array_push( $seat_booked_array, $seat );
                    }
            }
        }
        // $initial_number = 48;
        // $rounded_number = (int)floor( $initial_number / 5 ) * 5;

        $tickets=TicketBooking::get();
        return view ('user.bus-book',compact('trip','tickets', 'seat_booked_array'));
    }

    // public function create($id){
    // $tripId=Trip::where('id',$id)->first()->trip_id;
    //  return view ('user.bus-book');    
       
    // }

    public function store(Request $request,$id){

        // $input = $request->all();
        // $validator = Validator::make($input, [
        //     'name' => 'required',
        //     'mobileNumber'=>'required|min:10',
        //     'seat_no'=>'required',

        // ],[
        //     'name.required'=>'Passenger name is required.',
        //     'mobileNumber.required'=>'Mobile Number  is required.',
        //     'mobileNumber.min'=>'Mobile Number  is invalid.',
        //     'seat_no.required'=>'Please Select Seat.',

        // ]);
        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
        // dd($request->all(),$id);
        $user_id = auth()->user()->id;

        $ticket=new TicketBooking();
        $ticket->trip_id=$id;
        $ticket->user_id=$user_id;
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
