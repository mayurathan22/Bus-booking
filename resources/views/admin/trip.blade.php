@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-header mt-3 mb-2">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-plus-circle mr-2"></i></i>Add Trip</h5>
                    </div>
                    
                    <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                        <div class="row mx-5">
                            Add Form Loading...
                        </div>
                    </div>
                    
                    
                    <div class="card-header mt-3 mb-2">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Available Trips</h5>
                    </div>
                    
                    <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                        <div class="row">
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                <h5 class="my-0 py-0">Raja Travels</h5>
                                <h5>AC, Luxury</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>Departure</h6> 
                                
                                <h5 class="my-0 py-0">Batticaloa</h5>
                                <h5 class="mt-0 pt-0">06:10 AM</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>Arrival</h6> 
                                <h5 class="mt-0 pt-0">Pettah</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-dollar-sign mr-2"></i>Fare</h6> 
                            
                                <h5 class="mt-0 pt-0 text-danger">Rs 1500</h5>
                            </div>
                            <div class="col-sm-2">
                                <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-chair mr-2"></i>Available / Seats</h6> 
                            
                                <h5 class="mt-0 pt-0 text-success">15 / <span class="text-secondary">50</span></h5>
                            </div>
                            <div class="col-sm-2 d-flex align-items-end">
                                <button class="btn btn-danger btn-block shadow">Delete</button>
                            </div>
                        </div>
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
                    <a href="{{ route('admin-route') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-route mr-2"></i>Routes</h5>
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
