<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use Illuminate\Support\Facades\DB;
use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        // dd("dsds");
        $buses=Bus::paginate(10);
        $buses = Bus::get();
        // dd($buses);
        // dd("dds");
        return view('admin.bus',compact('buses'));
    }
    public function userBusIndex()
    {
        // dd("dds");
        $buses = Bus::get();
        $trips=Trip::get();
        // $trips=Bus::find($bus_id)->trips;
        // dd($trips);
        return view('user.bus',compact('trips','buses'));
    }

    public function store(Request $request){
        
        $bus=new Bus ;
        $bus-> name = $request->name;
        $bus-> total_seat = $request->total_seat;
        $bus-> price = $request->price;
        $bus-> description = $request->description;
        $bus->save();
        // dd($bus);
        return redirect('/admin/bus');
    }

    public function show($id)
    {
        // dd($id);
        try {
            $bus = Bus::findOrFail($id);
        
        } catch (\Exception $exception ) {
            abort(404);
        }
        return view('admin.bus');
    }

    public function destroy($id)
    {
        $bus=Bus::find($id);
        // dd($bus);
        $bus->delete();
        return redirect('/admin/bus')->with(['message'=> 'Successfully deleted!!']);
    }
   
}
