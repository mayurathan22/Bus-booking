@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 rounded px-4 py-5 my-2 shadow" >

                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 mx-auto mt-3">
                            <div class="row">
                                    <div class="col-12 bg-primary rounded text-center text-white py-1 mb-2">
                                       <h4 class="mb-0 ">
                                           Front
                                       </h4> 
                                    </div>
</div>
                                    <div class="row pl-2">
                                        @for ($i = 1; $i <= 50; $i++) 
                                            @if($i  == 3 || $i  == 8 || $i  == 13 || $i  == 18 || $i  == 23 || $i  == 28 || $i  == 33 || $i  == 38 || $i  == 43 )
                                            <div  class="col-2 bg-white m-1 rounded  d-flex align-items-center justify-content-center text-white" style="width:35px; height:35px"></div>
                                            @else
                                            <div class="col-2 border border-primary m-1 m-1 rounded  d-flex align-items-center justify-content-center text-dark" style="width:35px; height:35px">{{ $i }}</div>
                                            @endif
                                        @endfor
                                    </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-8 mx-auto mt-3">
                                <div>
                                    
                                        <div class="d-flex my-1">
                                            <div class="ww-100 border border-primary px-2 text-white">*</div>
                                            <h5 class="mb-0 ml-2">Available</h5>
                                        </div> 
                                    
                                        <div class="d-flex my-1">
                                            <div class="ww-100 bg-primary px-2 text-primary">*</div>
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
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="from"></i>Departure</h6> 
                                    <h5 class="my-0 py-0">Batticaloa</h5>
                                    <h5 class="mt-0 pt-0">06:10 AM</h5>
                                  
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="to"></i>Arrival</h6> 
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
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" name="passenger_name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mobileNumber">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobileNumber" aria-describedby="mobileNumber" placeholder="Enter Mobile Number" name="mobile_number" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="seats">Seat</label>
                                            <select  class="form-control" id="seats" aria-describedby="seats" placeholder="Select Seat" name="seat_no" required>
                                                <option>1</option>
                                            </select>
                                        </div>
                                        
                                        
                                        {{-- <button type="submit"  class="btn btn-success btn-block">Confirm Booking</button> --}}
                                         <a href="{{ URL::to('user/dashboard') }}" class="btn btn-success btn-block">Confirm Booking</a>
                                    </form>
                                </div>
                                <div class="col-4 d-flex align-items-center justify-content-center">
                                        <div>
                                            <h4><i class="fas fa-dollar-sign mr-2" id="myBtn"></i>Fare</h4>
                                            <h2 class="text-danger">Rs 1500</h2>
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