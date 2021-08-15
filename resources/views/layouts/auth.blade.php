@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-primary rounded my-2 shadow pl-2" style="border-width: 20px; box-sizing: border-box; z-index:10;">

                <div class="row">
                    <div class="col-sm-6 login-img rounded" class="z-index:-1">
                        <!-- <img src="{{ asset('/images/bus.jpg') }}" class="rounded" style="max-width: 120%; max-height: 100%; backgroun" /> -->
                    </div>
                    <div class="col-sm-6">
                    @yield('auth')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- <div class="flex justify-center mt-5" >
    
        <div class="sm:flex justify-between bg-white rounded-lg shadow-2xl w-2/3 my-10 sm:my-0 border-8 border-blue-500">
            <div class="hidden sm:block sm:w-1/2">
                <img src="{{ asset('/images/bus.jpg') }}" class="min-h-full shadow-2xl" />
            </div>
            <div class="sm:w-1/2">
               
            </div> -->
@endsection