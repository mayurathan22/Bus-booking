@extends('layouts.app')

@section('content')
<div class="container">
    @if(auth()->user()->id==1)
    <div class="row">
        <div class="col-md-9">
            <div class="card bg-primary">
                <div class="card-header text-light">
                    <h5 class="mb-0 font-weight-bold"><i class="far fa-user mr-2"></i></i></i>Booked Info</h5>
                </div>

                <div class="card-body">
                   

                    
                <div class="card px-3">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Bus</th>
                            <th scope="col">From - To</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Seats</th>
                            <th scope="col">Time</th>
                            <th scope="col">Fare</th>
                            </tr>
                        </thead>
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
                            <tr>
                                <th scope="row">{{ $bus->name }}</th>
                                <td>{{$item->from}} - {{ $item->to}}</td>
                                <td>{{ $item->passenger_name}}</td>
                                <td>{{ $item->mobile_number}}</td>
                                <td>
                                    @foreach($seat_booked_array as $a)
                                        {{ $a }}
                                    @endforeach
                                </td>
                                <td>{{$item->date}} - {{ $item->estimate_time}}</td>
                                <td>Rs {{ $fare }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                    <a href="{{ route('admin-bus') }}" class="list-group-item list-group-item-action">
                            <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus mr-2"></i>Bus</h5>
                    </a>
                    <a href="{{ route('admin-booked-users') }}" class="list-group-item list-group-item-action active">
                        <h5 class="mb-0 font-weight-bold"><i class="far fa-user mr-2"></i>Booked Info</h5>
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
