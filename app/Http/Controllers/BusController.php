<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        $buses=Bus::paginate(10);
        return view ('admin.bus');
    }

    public function store(Request $request){
        
        $bus=new Bus ;
        $bus-> name = $request->name;
        $bus-> seat_no = $request->seat_no;
        $bus-> price = $request->price;
        $bus-> description = $request->description;
        $bus->save();
        // dd($bus);
        return redirect('/admin/bus');
    }

//    public function show($id){
//     $bus = Bus::findOrFail($id);
//     return view('admin.bus',compact('bus'));
//    }
   
}
