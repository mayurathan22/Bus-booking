@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                <h3 class="text-primary"><i class="fas fa-bus-alt mx-2"></i>Available Buses</h3>
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
                        
                            <button class="btn btn-success btn-block">Book</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
@endsection