@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->id==1)
    <div class="row">
        <div class="col-md-9">
            <div class="card bg-primary">
                
                <div class="card-header bg-primary">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between text-light">
                            <h5 class="v font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                            <button class="btn btn-success justify-end" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd" onclick="{{ url("admin/trip/add") }}" >
                                <i class="fas fa-plus-circle mr-2"></i>Add Trip
                            </button>
                        </div>
                    </div>
                </div>
            

                <div class="body"> 

                    <div class="card-body">
                        
                        <div class="collapse" id="collapseAdd">
                            <div class="card border-0 rounded px-3 py-3 mb-4 shadow" >
                                <div class="row mx-5">
                                    <div class="col-12">
                                        <form action={{route('admin-trip')}} enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="form-group">

                                                <label for="bus">Select Bus </label>
                                                <select  class="form-control" id="bus" name="bus_id" aria-describedby="bus" placeholder="Select Bus" required>

                                                    <option disabled selected> Select Bus </option>
                                                    @foreach($bus as $bus)
                                                    @if(old('bus_id') == $bus->id)
                                                    <option value="{{ $bus->id }}" selected>{{ $bus->name }}</option>
                                                    @else
                                                        <option value="{{ $bus->id }}">{{ $bus->name }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="from">From</label>
                                                        <select  class="form-control" id="from" name="from" aria-describedby="from" placeholder="Select" required>
                                                            <option></option>
                                                            <option>Jaffna</option>
                                                            <option>Kilinochchi</option>
                                                            <option>Mannar</option>
                                                            <option>Mullaitivu</option>
                                                            <option>Vavuniya</option>
                                                            <option>Puttalam</option>
                                                            <option>Kurunegala</option>
                                                            <option>Anuradhapura</option>
                                                            <option>Polonnaruwa</option>
                                                            <option>Matale</option>
                                                            <option>Kandy</option>
                                                            <option>Nuwara Eliya</option>
                                                            <option>Kegalle</option>
                                                            <option>Ratnapura</option>
                                                            <option>Gampaha</option>
                                                            <option>Colombo</option>
                                                            <option>Kalutara</option>
                                                            <option>Trincomalee</option>
                                                            <option>Batticaloa</option>
                                                            <option>Ampara</option>
                                                            <option>Badulla</option>
                                                            <option>Monaragala</option>
                                                            <option>Hambantota</option>
                                                            <option>Matara</option>
                                                            <option>Galle</option>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                    <label for="to">To</label>
                                                        <select  class="form-control" id="to" name="to" aria-describedby="to" placeholder="Select arrival" required>
                                                            <option></option>
                                                            <option>Jaffna</option>
                                                            <option>Kilinochchi</option>
                                                            <option>Mannar</option>
                                                            <option>Mullaitivu</option>
                                                            <option>Vavuniya</option>
                                                            <option>Puttalam</option>
                                                            <option>Kurunegala</option>
                                                            <option>Anuradhapura</option>
                                                            <option>Polonnaruwa</option>
                                                            <option>Matale</option>
                                                            <option>Kandy</option>
                                                            <option>Nuwara Eliya</option>
                                                            <option>Kegalle</option>
                                                            <option>Ratnapura</option>
                                                            <option>Gampaha</option>
                                                            <option>Colombo</option>
                                                            <option>Kalutara</option>
                                                            <option>Trincomalee</option>
                                                            <option>Batticaloa</option>
                                                            <option>Ampara</option>
                                                            <option>Badulla</option>
                                                            <option>Monaragala</option>
                                                            <option>Hambantota</option>
                                                            <option>Matara</option>
                                                            <option>Galle</option>    
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="date">Date</label>
                                                        <input type="date" id="date" name="date" class="form-control"
                                                            value="2021-08-30"
                                                            min="2021-08-30" max="2021-12-31">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="time">Departure Time</label>
                                                        <!-- <input type="text" name="time" class="form-control" id="time" aria-describedby="time" placeholder="Enter Departure Time (hh:mm:ss)" required> -->
                                                        <input type="time" id="time" name="time" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit"  class="btn btn-success justify-end">Add Trip</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                {{-- {{$trip}} --}}
                                {{-- {{$bus}} --}}
                                @foreach ($trip as $item)
                                {{-- {{$item->bus}} --}}
                        <div class="card border-0 rounded px-3 py-3 my-3 shadow" >
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                    <h5 class="my-0 py-0">{{$item->bus($item->bus_id)->name}}</h5>                                    
                                    <h5>{{$item->bus($item->bus_id)->description}}</h5>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="far fa-clock mr-2"></i>Time</h6> 
                                    <h5 class="my-0 py-0">{{ $item->estimate_time }}</h5>                                    
                                    <h5>{{$item->date}}</h5>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>From</h6> 
                                    
                                    <h5 class="my-0 py-0">{{$item->from}}</h5>
                                    <h5 class="mt-0 pt-0">{{$item->bus($item->bus_id)->estimate_time}}</h5>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>From</h6> 
                                    
                                    <h5 class="my-0 py-0">{{$item->from}}</h5>
                                    <h5 class="mt-0 pt-0">{{$item->bus($item->bus_id)->estimate_time}}</h5>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>To</h6> 
                                    <h5 class="mt-0 pt-0">{{$item->to}}</h5>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-dollar-sign mr-2"></i>Fare</h6> 
                                
                                    <h5 class="mt-0 pt-0 text-danger">Rs {{$item->bus($item->bus_id)->price}} </h5>
                                </div>
                                <div class="col-sm-3 my-1">
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
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-chair mr-2"></i>Seats</h6> 
                                    <h5 class="mt-0 pt-0 text-success">{{ count($seat_booked_array)}}  / <span class="text-secondary">{{$item->bus($item->bus_id)->total_seat}}</span></h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    <a href={{"trip/delete/".$item['id']}} class="btn btn-danger shadow">Delete</a>    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="list-group">
                    <a href="{{ route('admin-trip') }}" class="list-group-item list-group-item-action active">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                    </a>
                    <a href="{{ route('admin-bus') }}" class="list-group-item list-group-item-action">
                            <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus mr-2"></i>Bus</h5>
                    </a>
                    <a href="{{ route('admin-booked-users') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="far fa-user mr-2"></i>Booked Info</h5>
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
