<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use App\Models\TicketBooking;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        $tickets=TicketBooking::paginate(10);
        return view ('bus');
    }

    public function create(){
       
    }

    public function store(Request $request){
       $ticket=new TicketBooking();
       $ticket->schedule_id=$request->schedule_id;
       $ticket->seat_no=$request->seat_no;
       $ticket->mobile_number=$request->mobile_number ;

        if($ticket->save()){
            // return new BusResource($bus);
        }
    }
    public function show($id){
        $ticket=TicketBooking::findOrFail($id);
        // return new BusResource($bus);
    }

   
    public function destroy($id){
       $ticket=TicketBooking::findOrFail($id);
       if($ticket->delete()){
        //    return 
       }
    }
}
