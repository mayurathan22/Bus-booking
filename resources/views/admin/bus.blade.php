@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(auth()->user()->id==1)
    <div class="row">
        <div class="col-md-9">

            <div class="card bg-primary rounded">
                
                <div class="card-header rounded bg-primary">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <h5 class="mt-2 font-weight-bold text-light"><i class="fas fa-shuttle-van mr-2"></i></i>Buses</h5>
                            <button class="btn btn-success justify-end" type="button" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseAdd" onclick="{{ url("admin/bus/add") }}" >
                                <i class="fas fa-plus-circle mr-2"></i>Add Bus
                            </button>
                        </div>
                    </div>
                </div>
            
            
                <div class="body"> 

                    <div class="card-body">
                    
                        <div class="collapse" id="collapseAdd">
                            <div class="card border-0 rounded px-3 py-3 mb-4 shadow" >
                                <div class="row mx-5">
                                    <div class="col-12">
                                        <form action={{route('admin-bus')}} method="POST" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Bus Name</label>
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" aria-describedby="name" placeholder="Enter Bus Name" >
                                                @if ($errors->has('name'))
                                                <div class="error">
                                                    {{ $errors->first('name') }}
                                                </div>
                                                @endif
                                                {{-- {{$errors}} --}}
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" class="form-control" name="description" id="description" aria-describedby="description" placeholder="Enter Bus Description" >
                                            </div>

                                            <div class="row">
                                                <!-- <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="seats">Total Seats</label>
                                                        <input type="text" maxlength="2" class="form-control" name="total_seat" id="total_seat" aria-describedby="seats" placeholder="Enter Total Seats Count" >
                                                    </div>
                                                </div> -->
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fare">Fare / Seats</label>
                                                        <input type="text" class="form-control" name="price" id="price" aria-describedby="fare" placeholder="Enter fare" >
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

                        @foreach ($buses as $item)
                        {{-- {{$bus}} --}}
                        <div class="card border-0 rounded px-3 py-3 my-3 shadow" >
                            <div class="row ">
                                    <div class="col-sm-3 my-1">
                                        <div class="d-flex">
                                                <i class="fas fa-bus-alt mr-2 text-secondary" style="font-size: 18px"></i>
                                                <div>
                                                    <h6 class="text-secondary mb-1 pb-0">Bus</h6> 
                                                    <h5>{{$item->name}}</h5>
                                                    
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-3 my-1">
                                        <div class="d-flex">
                                            <i class="fas fa-bus-alt mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Description</h6> 
                                                <h5 class="my-0 py-0">{{$item->description}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-1">
                                        <div class="d-flex">
                                            <i class="fas fa-dollar-sign mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Fare</h6> 
                                                <h5 class="mt-0 pt-0 text-danger">Rs {{$item->price}}</h5>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-1">
                                        <div class="d-flex">
                                            <i class="fas fa-chair mr-2 text-secondary" style="font-size: 18px"></i>
                                            <div>
                                                <h6 class="text-secondary mb-1 pb-0">Seats</h6> 
                                                <h5 class="mt-0 pt-0 text-success">{{$item->total_seat}}</h5>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex align-items-end justify-content-end">
                                    {{-- <button class="btn btn-danger btn-block shadow" type="submit" {{ url('admun/bus/{{ $bus->id }}') }} type="">Delete</button> --}}
                                    <a href={{"bus/delete/".$item['id']}} class="btn btn-danger shadow">Delete</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>

        <div class="col-md-3 mt-4 mt-sm-0">
            <div class="card">
                <div class="list-group">
                    <a href="{{ route('admin-trip') }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-0 font-weight-bold"><i class="fas fa-shuttle-van mr-2"></i></i>Trips</h5>
                    </a>
                    <a href="{{ route('admin-bus') }}" class="list-group-item list-group-item-action active">
                            <h5 class="mb-0 font-weight-bold"><i class="fas fa-bus mr-2"></i>Bus</h5>
                    </a>
                    <a href="{{ route('admin-booked-users') }}" class="list-group-item list-group-item-action">
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
</div>
@endsection
