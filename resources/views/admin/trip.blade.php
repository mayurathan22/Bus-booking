@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                @if(auth()->user()->id==1)
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <h5 class="v font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                            <button class="btn btn-success justify-end" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd" onclick="{{ url("admin/trip/add") }}" >
                                <i class="fas fa-plus-circle mr-2"></i>Add Trip
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="collapse" id="collapseAdd">
                        <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                            <div class="row mx-5">
                                <div class="col-12">
                                    <form action={{route('admin-trip')}} enctype="multipart/form-data" method="POST">
                                        @csrf
                                        <div class="form-group">

                                            <label for="bus">Select Bus </label>
                                            <select  class="form-control" id="bus" name="bus_id" aria-describedby="bus" placeholder="Select Bus" required>

                                                <option disabled selected> select </option>
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
                                                    <label for="time">Departure Time</label>
                                                    <input type="text" name="estimate_time" class="form-control" id="time" aria-describedby="time" placeholder="Enter Departure Time (hh:mm:ss)" required>
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
                    
                    
                    <div class="card-header mt-3 mb-2">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Available Trips</h5>
                    </div>
                    <table id="cart" class="table table-borderless table-hover">
                        <tbody>
                            {{-- {{$trip}} --}}
                            {{-- {{$bus}} --}}
                            @foreach ($trip as $item)
                            {{-- {{$item->bus}} --}}
                    <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                        <div class="row">
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                {{-- {{$item->bus($item->bus_id)}} --}}
                                <h5 class="my-0 py-0">{{$item->bus($item->bus_id)->name}}</h5>                                    
                                <h5>{{$item->bus($item->bus_id)->description}}</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>Departure</h6> 
                                
                                <h5 class="my-0 py-0">{{$item->from}}</h5>
                                <h5 class="mt-0 pt-0">{{$item->bus($item->bus_id)->estimate_time}}</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>Arrival</h6> 
                                <h5 class="mt-0 pt-0">{{$item->to}}</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-dollar-sign mr-2"></i>Fare</h6> 
                            
                                <h5 class="mt-0 pt-0 text-danger">Rs {{$item->bus($item->bus_id)->price}} </h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-chair mr-2"></i>Available / Seats</h6> 
                            
                                <h5 class="mt-0 pt-0 text-success">15 / <span class="text-secondary">{{$item->bus($item->bus_id)->total_seat}}</span></h5>
                            </div>
                            <div class="col-sm-2 d-flex align-items-end">
                                <a href={{"trip/delete/".$item['id']}} class="btn btn-danger btn-block shadow">Delete</a>
                                {{-- <button class="btn btn-danger btn-block shadow">Delete</button> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </table>
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
                    <!-- <a href="{{ route('admin-route') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-route mr-2"></i>Routes</h5>
                    </a> -->
                    <a  href="#" class="list-group-item list-group-item-action" disabled>
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Settings</h5>
                    </a>
                    </div>
                </div>
            
        </div>
        @else
        <h3> unauthorized user</h3>
        @endif
    </div>
</div>
@endsection
