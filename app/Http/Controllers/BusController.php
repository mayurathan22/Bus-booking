<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use Illuminate\Support\Facades\DB;
use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    
    public function guestIndex()
    {
        $buses = Bus::get();
        $trips=Trip::get();
        // $trips=Bus::find($bus_id)->trips;
        // dd($trips);
        return view('GuestDashboard',compact('trips','buses'));
    }

    public function store(Request $request){

        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|unique:buses,name',
            'price'=>'required|min:1',
            'description' =>'required'

        ],[
            'name.required'=>'Bus name is required',
            'name.unique'=>' this Bus name is alredy entered',
            'price.required'=>'price  is required',
            'description.required'=>'description is required',

        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required'
        // ],
        // [
        //     'name.required' => 'You have to choose the file!',
        //     'description.required' => 'You have to choose type of the file!'
        // ]);

        $bus=new Bus ;
        $bus-> name = $request->name;
        $bus-> total_seat = 45;
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
