@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->id!==1)
    <div class="row">
        <div class="col-md-9">
            <div class="card bg-primary">
                <div class="card-header  bg-primary text-light">
                    <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus-alt mr-2"></i></i>Available Buses</h5>
                </div>
                {{-- {{$trips}} --}}
                {{-- {{$buses}} --}}
                <div class="card-body">
                    
                    @if(!$trips->isEmpty())    
                    <table>
                        <tbody> 
                            @foreach ($trips as $item)  
                            <div class="card  border-0 rounded px-3 py-3 my-2 shadow" >
                                <div class="row">
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                        {{-- {{$item->bus($item->bus_id)}} --}}
                                        <h5 class="my-0 py-0">{{$item->bus($item->bus_id)->name}}</h5>
                                        <h5>{{$item->bus($item->bus_id)->description}}</h5>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <div class="d-flex">
                                            <i class="fas fa-clock mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Time</h6> 
                                                <h5 class="my-0 py-0">{{ $item->estimate_time }}</h5>                                    
                                                <h5>{{$item->date}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="from"></i>From</h6> 
                                        
                                        <h5 class="my-0 py-0">{{$item->from}}</h5>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="to"></i>To</h6> 
                                        <h5 class="mt-0 pt-0">{{$item->to}}</h5>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-dollar-sign mr-2" name="price"></i>Fare / Seat</h6> 
                                    
                                        <h5 class="mt-0 pt-0 text-danger">Rs {{$item->bus($item->bus_id)->price}}</h5>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        @php
                                            $result1 = DB::table('trips')->where('id', $item->id)->pluck('bus_id');
                                            $result = DB::table('ticket_Bookings')->where('trip_id', ($result1)[0])->get('seat_no');
                                            $seat_booked_array = array();

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
                                        @endphp
                                        <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-chair mr-2"></i>Available / Seats</h6> 
                                    
                                        <h5 class="mt-0 pt-0 text-success">{{ count($seat_booked_array)}} / <span class="text-secondary">{{$item->bus($item->bus_id)->total_seat}}</span></h5>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <div class="col-sm-2 d-flex align-items-end">
                                            <a href="{{ "bus/".$item['id']."/book" }}" class="btn btn-success btn-block">Book</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                

                @else
                <div class="card p-3">
                    <h5>Currently There is  no available buses!</h5>
                </div>
                @endif
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="list-group">
                    <a href="{{ route('user-dashboard') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user mr-2"></i></i>Dashboard</h5>
                    </a>
                    <a href="{{ route('user-bus') }}" class="list-group-item list-group-item-action active">
                            <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus mr-2"></i>Bus</h5>
                    </a>
                    <!-- <a  href="#" class="list-group-item list-group-item-action" disabled>
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Settings</h5>
                    </a> -->
                    </div>
                </div>
            
        </div>

    </div>
    @else
    <div class="row ">
        <div class="col-12 ">
            <div class="card px-4 pt-2">
                <h4 class="text-danger">Unauthorized User</h4>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
