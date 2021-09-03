@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->id!==1)
    <div class="row">
        <div class="col-md-9">
                
                    <div class="card-header rounded text-light bg-primary mt-3">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-file-invoice-dollar mr-2"></i></i>Booked Receipts</h5>
                    </div>

                    @if(!$booking->isEmpty())
                   
                    <table id="cart" class="table table-borderless table-hover">
                        <tbody>
                            @foreach ($booking as $item)
                            @php
                                $bus = DB::table('buses')->where('id', $item->bus_id)->first();

                                $seat_booked_array = array();
                                $decoded_result = json_decode($item->seat_no);
                                $splitted_array = explode(',', $decoded_result);
                                foreach ($splitted_array as $vl) {
                                    $seat = (int)$vl;
                                    array_push( $seat_booked_array, $seat );
                                }
                                $fare = count($seat_booked_array) * $bus->price 
                            @endphp
                                    
                           <div class="card bg-primary border-0 rounded px-3 py-3 shadow" >
                                <div class="row mx-2">
                                    <div class="col-sm-8 col-md-12 card border shadow py-3 px-5 mx-auto" >
                                        <div>
                                            <div class="text-center">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h5>
                                                            <span class="font-weight-normal">
                                                            <i class="fas fa-map-marker-alt mr-2" name="from"></i>
                                                            From: </span>
                                                            {{$item->from}} 
                                                        </h5>
                                                    </div> 
                                                    <div>
                                                        <h5>
                                                            <span class="font-weight-normal">
                                                            <i class="fas fa-map-marker-alt mr-2" name="from"></i>
                                                            To: </span>
                                                            {{$item->to}}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <h6>Bus Name</h6>
                                                <h6>{{$bus->name}}</h6>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6>Bus Type</h6>
                                                <h6>{{$bus->description}}</h6>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6>Passenger Name</h6>
                                                <h6>{{$item->passenger_name}}</h6>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6>Mobile number</h6>
                                                <h6>{{$item->mobile_number}}</h6>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6>Seat Number</h6>
                                                <h6>
                                                    @foreach($seat_booked_array as $a)
                                                        {{ $a }}
                                                    @endforeach
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6>Date</h6>
                                                <h6>{{$item->date}}</h6>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6>Time</h6>
                                                <h6>{{$item->estimate_time}} H</h6>
                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-between">
                                                <h6>Fare</h6>
                                                <h6>Rs {{  $fare  }}</h6>
                                                {{ $item->id }}
                                            </div>
                                            <div class="d-flex align-items-end justify-content-end mt-3">
                                                <a href={{"dashboard/delete/".$item->id}} class="btn btn-danger">Delete</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <div class="card p-3">
                        <h5>You don't have any booking details!</h5>
                    </div>
                    @endif

                    {{--
                    <div class="d-flex justify-content-center">
                    {{$booking->links('pagination::bootstrap-4')}}
                    </div> --}}
                
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="list-group">
                    <a href="{{ route('user-dashboard') }}" class="list-group-item list-group-item-action active">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user mr-2"></i></i>Dashboard</h5>
                    </a>
                    <a href="{{ route('user-bus') }}" class="list-group-item list-group-item-action">
                            <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus mr-2"></i>Bus</h5>
                    </a>
                    <!-- <a  href="#" class="list-group-item list-group-item-action" disabled>
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Settings</h5>
                    </a> -->
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
