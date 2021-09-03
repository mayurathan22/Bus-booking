@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card bg-primary mb-4">
                <div class="card-header bg-primary rounded border-0 text-light">
                    <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus-alt mr-2"></i></i>Available Buses</h5>
                </div>
            

            
               {{-- {{$trips}} --}}
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    @if($trips==[]){
                        {{-- {{$trips}} --}}
                        <h3>There are no buses now !!!</h3>
                    }
                    @endif
                    @if(!$trips->isEmpty())
                        @foreach ($trips as $item)   
                            <div class="card border-0 rounded mx-3 px-3 py-4 my-3 shadow" >
                                <div class="row">
                                    <div class="col-sm-4 col-md-3  my-2 my-sm-1">
                                        <div class="d-flex">
                                            <i class="fas fa-bus-alt mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Bus</h6> 
                                                <h5>{{$item->bus($item->bus_id)->description}}</h5>
                                                <h6>{{$item->bus($item->bus_id)->description}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <div class="d-flex">
                                            <i class="fas fa-clock mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Time</h6> 
                                                <h5 class="my-0 py-0">{{ $item->estimate_time }} H</h5>                                    
                                                <h5>{{$item->date}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <div class="d-flex">
                                            <i class="fas fa-map-marker-alt mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">From</h6>
                                                <h5 class="my-0 py-0">{{$item->from}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <div class="d-flex">
                                            <i class="fas fa-map-marker-alt mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0"></i>To</h6> 
                                                <h5 class="mt-0 pt-0">{{$item->to}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
                                        <div class="d-flex">
                                            <i class="fas fa-dollar-sign mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Fare / Seat</h6> 
                                                <h5 class="mt-0 pt-0 text-danger">Rs {{$item->bus($item->bus_id)->price}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 my-2 my-sm-1">
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
                                        <div class="d-flex">
                                            <i class="fas fa-chair mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Seats</h6> 
                                                <h5 class="mt-0 pt-0 text-success"> {{ count($seat_booked_array)}} / <span class="text-secondary">{{$item->bus($item->bus_id)->total_seat}}</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                      
                                
                                </div>
                                @guest
                                    <div class="row mt-2">
                                        <div class="col-12 d-flex align-items-end justify-content-end">
                                            <a href="/login" class="btn btn-success">Log In to Book</a>
                                        </div>
                                    </div>
                                @else
                                    @if(auth()->user()->id!==1)
                                    <div class="row mt-2">
                                        <div class="col-12 d-flex align-items-end justify-content-end">
                                        <a href="{{ "user/bus/".$item['id']."/book" }}" class="btn btn-success">Book</a>
                                        </div>
                                    </div>
                                    @endif
                                @endguest
                            </div>
                        @endforeach
                    
                    @else
                    <div class="card p-3">
                        <h5>Currently There is  no available buses!</h5>
                    </div>
                    @endif
                </div>
            </div>
    
        
            <div class="col-md-3 mx-auto">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">Contact Us</div>
                            <div class="card-body">
                                <h6><i class="fas fa-phone mr-2"></i>+94 77 123 1234 </h6>
                                <h6><i class="fas fa-envelope-square mr-2"></i>busfly@busfly.com</h6>
                                <h6><i class="fas fa-street-view mr-2"></i>Jaffna, SriLanka</h6>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-12 mt-4">
                        <div class="card rounded">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('/images/bus.jpg') }}" >
                                </div>
                                
                                <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/images/bus.jpg') }}" >
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
    </div>
</div>
@endsection
