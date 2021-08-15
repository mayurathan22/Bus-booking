<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        $buses=Bus::paginate(10);
        // return view ('bus');
    }

    public function create(){
       
    }

    public function store(Request $request){
       $bus=new Bus();
       $bus->agency_name=$request->agency_name;
       $bus->seat_no=$request->seat_no;
       $bus->description=$request->description ;

        if($bus->save()){
            // return new BusResource($bus);
        }
    }
    public function show($id){
        $bus=Bus::findOrFail($id);
    }

    public function edit(){
        
    }

    public function update(Request $request, $id){
       $bus= Bus::findOrFail($id);
       $bus->agency_name=$request->agency_name;
       $bus->seat_no=$request->seat_no;
       $bus->description=$request->description ;

        if($bus->save()){
        }

    }
    public function destroy($id){
       $bus=Bus::findOrFail($id);
       if($bus->delete()){
       }
    }
}
