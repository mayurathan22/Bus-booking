@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 rounded px-4 py-5 my-2 shadow" >

                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-8 mx-auto mt-3">
                                <div class="w-100 bg-primary rounded px-2 text-center text-white py-1 mb-2">
                                       <h4 class="mb-0">
                                           Front
                                       </h4> 
                                    </div>
                                <div class="d-flex flex-wrap">
                                    @for ($i = 0; $i < 55; $i++)
                                    <div class="bg-secondary m-1 rounded px-2 d-flex align-items-center justify-content-center text-white" style="width:35px; height:35px">{{ $i }}</div>
                                    @endfor
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-8 mx-auto mt-3">
                                <div>
                                    
                                        <div class="d-flex my-1">
                                            <div class="ww-100 bg-secondary px-2 text-secondary">*</div>
                                            <h5 class="mb-0 ml-2">Available</h5>
                                        </div> 
                                    
                                        <div class="d-flex my-1">
                                            <div class="ww-100 bg-danger px-2 text-danger">*</div>
                                            <h5 class="mb-0 ml-2">Booked</h5>
                                        </div> 
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-1 rounded p-2">
                            <div class="row ">
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                    <h5 class="my-0 py-0">Raja Travels</h5>
                                    <h5>AC, Luxury</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>Departure</h6> 
                                    <h5 class="my-0 py-0">Batticaloa</h5>
                                    <h5 class="mt-0 pt-0">06:10 AM</h5>
                                  
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2"></i>Arrival</h6> 
                                    <h5 class="mt-0 pt-0">Pettah</h5>
                                </diV>
                            </div>
                        </div>

                        <div class="card border-1 rounded p-2 my-2">
                            <div class="row ">
                                <div class="col-8">
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mobileNumber">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobileNumber" aria-describedby="mobileNumber" placeholder="Enter Mobile Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="seats">Seat</label>
                                            <select  class="form-control" id="seats" aria-describedby="seats" placeholder="Select Seat"> </select>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-success btn-block">Confirm Booking</button>
                                    </form>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                        <div>
                                            <h4><i class="fas fa-dollar-sign mr-2"></i>Total Fare</h4>
                                            <h2 class="text-danger">Rs 3000</h2>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection