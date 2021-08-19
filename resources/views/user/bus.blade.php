@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus-alt mr-2"></i></i>Available Buses</h5>
                </div>
                {{-- {{$trips}} --}}
                {{-- {{$buses}} --}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <tbody>
                        {{-- {{$trips}} --}}
                        @foreach ($trips as $item)   
                    <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                    <div class="row">
                        <div class="col-sm-2">
                            <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                            {{-- {{$item->bus($item->bus_id)}} --}}
                            <h5 class="my-0 py-0">{{$item->bus($item->bus_id)->name}}</h5>
                            <h5>{{$item->bus($item->bus_id)->description}}</h5>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="from"></i>From</h6> 
                            
                            <h5 class="my-0 py-0">{{$item->from}}</h5>
                            <h5 class="mt-0 pt-0">{{$item->bus($item->bus_id)->estimate_time}}</h5>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="to"></i>To</h6> 
                            <h5 class="mt-0 pt-0">{{$item->to}}</h5>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-dollar-sign mr-2" name="price"></i>Fare</h6> 
                        
                            <h5 class="mt-0 pt-0 text-danger">Rs {{$item->bus($item->bus_id)->price}}</h5>
                        </div>
                        <div class="col-sm-2">
                            <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-chair mr-2"></i>Available / Seats</h6> 
                        
                            <h5 class="mt-0 pt-0 text-success">7 / <span class="text-secondary">{{$item->bus($item->bus_id)->total_seat}}</span></h5>
                        </div>
                        <div class="col-sm-2 d-flex align-items-end">
                        
                            {{-- <button class="btn btn-success btn-block" onclick="{{url('/user/bus/book')}}">Book</button> --}}
                            <a href="{{ "bus/".$item['id']."/book" }}" class="btn btn-success btn-block">Book</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                    <a  href="#" class="list-group-item list-group-item-action" disabled>
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Settings</h5>
                    </a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
