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
                            <h5 class="mt-2 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Buses</h5>
                            <button class="btn btn-success justify-end" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd" onclick="{{ url("admin/bus/add") }}" >
                                <i class="fas fa-plus-circle mr-2"></i>Add Bus
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="collapse" id="collapseAdd">
                        <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                            <div class="row mx-5">
                                <div class="col-12">
                                    <form action={{route('admin-bus')}} method="POST" >
                                        @csrf
                                            <div class="form-group">
                                                <label for="name">Bus Name</label>
                                                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Bus Name" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter Bus Description" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="seats">Total Seats</label>
                                                        <input type="text" class="form-control" name="total_seat" id="total_seat" aria-describedby="seats" placeholder="Enter Total Seats Count" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fare">Fare</label>
                                                        <input type="text" class="form-control" name="price" id="price" aria-describedby="fare" placeholder="Enter fare" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row my-2">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit"  class="btn btn-success justify-end">Add Bus</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header mt-3 mb-2">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus mr-2"></i></i>Available Buses</h5>
                    </div>
                    <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                        <div class="row ">
                                <div class="col-sm-2">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                    <h5 class="my-0 py-0">Raja Travels</h5>
                                </div>
                                <div class="col-sm-2">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Description</h6> 
                                    <h5 class="my-0 py-0">AC, Luxury</h5>
                                </div>
                                <div class="col-sm-2">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-dollar-sign mr-2"></i>Fare</h6> 
                                
                                    <h5 class="mt-0 pt-0 text-danger">Rs 1500</h5>
                                </div>
                                <div class="col-sm-2">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-chair mr-2"></i>Total Seats</h6> 
                                
                                    <h5 class="mt-0 pt-0 text-success">50</h5>
                                </div>
                                <div class="col-sm-3 d-flex align-items-end">
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
                    <a href="{{ route('admin-trip') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                    </a>
                    <a href="{{ route('admin-bus') }}" class="list-group-item list-group-item-action active">
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
