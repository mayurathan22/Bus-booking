@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->id!==1)
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
                                        @php
                                            $count = 0;
                                        @endphp 
                                        
                                        @for ($i = 1; $i <=  11; $i++) 
                                            @if($i !== 11)
                                                @for($x = 1; $x <= 5 ; $x++)
                                                    @if($x == 3)
                                                        <div  class="col-2 bg-white m-1 rounded  d-flex align-items-center justify-content-center text-white" style="width:35px; height:35px"></div>
                                                    @else
                                                    @php  $count++  @endphp 
                                                            @if (in_array($count, $seat_booked_array))
                                                            <div class="col-2 border border-primary m-1 m-1 rounded d-flex align-items-center justify-content-center text-dark" style="width:30px; height:30px; background-color: grey">
                                                                <!-- <input type="checkbox" name="seat_book" value={{$count}} disabled> -->
                                                            </div>
                                                            @else
                                                            <div class="col-2 border border-primary m-1 m-1 rounded  d-flex align-items-center justify-content-center text-dark" style="width:30px; height:30px">
                                                                <input type="checkbox" name="seat_book" value={{$count}}>
                                                            </div>
                                                            @endif
                                                    @endif
                                                @endfor
                                            @else
                                                @for($x = 1; $x <= 5 ; $x++)
                                                @php $count++  @endphp 
                                                <div class="col-2 border border-primary m-1 m-1 rounded  d-flex align-items-center justify-content-center text-dark" style="width:30px; height:30px">
                                                    <input type="checkbox" name="seat_book" value={{$count}}>
                                                </div>
                                                @endfor
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-8 mx-auto mt-3">
        
                                    <button id="myBtn" onclick="doSomething()" class="btn btn-success btn-block my-2">Confirm Select</button>
                            </div>  
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card border-1 rounded p-2">
                            <div class="row ">
                                
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-bus-alt mr-2"></i>Bus</h6> 
                                    <h5 class="my-0 py-0">{{$trip->bus($trip->bus_id)->name}}</h5>
                                    <h5>{{$trip->bus($trip->bus_id)->description}}</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="from"></i>From</h6> 
                                    <h5 class="my-0 py-0">{{$trip->from}}</h5>
                                    <h5 class="mt-0 pt-0">{{$trip->estimate_time}}</h5>
                                  
                                </div>
                                <div class="col-sm-4">
                                    <h6 class="text-secondary mb-1 pb-0"><i class="fas fa-map-marker-alt mr-2" name="to"></i>To</h6> 
                                    <h5 class="mt-0 pt-0">{{$trip->to}}</h5>
                                </diV>
                            </div>
                        </div>

                        <div class="card border-1 rounded p-2 my-2">
                            <div class="row ">
                                <div class="col-8">
                                    <form method="POST" enctype="multipart/form-data" action={{route('user-bus-book-store',$trip->id)}}>
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" name="passenger_name" required>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="mobileNumber">Mobile Number</label>
                                            <input type="text" class="form-control" id="mobileNumber" aria-describedby="mobileNumber" placeholder="Enter Mobile Number" name="mobile_number" required >
                                            
                                           @if ($errors->has('mobileNumber'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('mobileNumber') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="seat_no">Selected Seat</label>
                                            <!-- <p id="selected_seats" name="seat_no"></p> -->
                                            <input type="text" class="form-control" id="seat_no" aria-describedby="seat_no" placeholder="Please Select Seat" name="seat_no" required>

                                             @if ($errors->has('seat_no'))
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $errors->first('seat_no') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        
                                        
                                        <button type="submit"  class="btn btn-success btn-block">Confirm Booking</button>
                                         {{-- <a href="{{ "bus/".$trip['id']."/book" }}" class="btn btn-success btn-block">Confirm Booking</a> --}}
                                    </form>
                                </div>
                                <div class="col-4 d-flex justify-content-center mt-3">
                                    <div>
                                        <h4><i class="fas fa-dollar-sign mr-2" id="myBtn"></i>Fare / Seat</h4>
                                        <h2 class="text-danger">Rs {{$trip->bus($trip->bus_id)->price}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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