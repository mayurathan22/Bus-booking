@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <h5 class="v font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                            <button class="btn btn-success justify-end" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd" >
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
                                    <form>
                                        <div class="form-group">
                                            <label for="bus">Select Bus</label>
                                            <select  class="form-control" id="bus" aria-describedby="bus" placeholder="Select Bus"> </select>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="departure">Departure</label>
                                                    <select  class="form-control" id="departure" aria-describedby="departure" placeholder="Select Departure"> </select>                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                <label for="arrival">Arrival</label>
                                                    <select  class="form-control" id="arrival" aria-describedby="arrival" placeholder="Select arrival"> </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="time">Departure Time</label>
                                                    <input type="text" class="form-control" id="time" aria-describedby="time" placeholder="Enter Departure Time">
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
                    <!-- <a href="{{ route('admin-route') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-route mr-2"></i>Routes</h5>
                    </a> -->
                    <a  href="#" class="list-group-item list-group-item-action" disabled>
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Settings</h5>
                    </a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
