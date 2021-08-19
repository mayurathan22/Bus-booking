@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 font-weight-bold"><i class="fas fa-user  mr-2"></i></i>Dashboard</h5>
                </div>
{{-- {{$buses}} --}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-header mt-3 mb-2">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-file-invoice-dollar mr-2"></i></i>Booked Receipts</h5>
                    </div>

                    <table id="cart" class="table table-borderless table-hover">
                        <tbody>
                           
                            @foreach ($booking as $item)
                    <div class="card border-0 rounded px-3 py-3 my-2 shadow" >
                    <div class="row mx-2">
                            <div class="col-sm-8 sol-md-6 card border shadow py-3 px-5" >
                                <div class="text-center">
                                    <h4 class="font-weight-bold">{{$item->trip($item->trip_id)->from}} --> {{$item->trip($item->trip_id)->to}}</h4>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <h5>{{$item->trip($item->trip_id)->bus($item->trip($item->trip_id)->bus_id)->name}}</h5>
                                    <h5>{{$item->trip($item->trip_id)->bus($item->trip($item->trip_id)->bus_id)->description}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5>Passenger Name</h5>
                                    <h5>{{$item->passenger_name}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5>Mobile number</h5>
                                    <h5>{{$item->mobile_number}}</h5>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5>Seat Number</h5>
                                    <h5>{{$item->seat_no}}</h5>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <h5>Fare</h5>
                                    <h5>Rs {{$item->trip($item->trip_id)->bus($item->trip($item->trip_id)->bus_id)->price}}</h5>
                                </div>
                                <div class="d-flex align-items-end mt-3">
                                    {{-- <button class="btn btn-danger ">Delete</button> --}}
                                    <a href={{"dashboard/delete/".$item['id']}} class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
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
                    <a  href="#" class="list-group-item list-group-item-action" disabled>
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Settings</h5>
                    </a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
