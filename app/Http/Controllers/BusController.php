<?php
namespace App\Http\Controllers;

use App\Http\Resources\BusResource;
use Illuminate\Support\Facades\DB;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        // dd("dsds");
        $buses=Bus::paginate(10);
        return view ('admin.bus');
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
        dd($id);
        try {
            $bus = Bus::findOrFail($id);
        
        } catch (\Exception $exception ) {
            abort(404);
        }
        return view('admin.bus');
    }
   
}
