@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-5" >
    
        <div class="sm:flex justify-between bg-white rounded-lg shadow-2xl w-2/3 my-10 sm:my-0 border-8 border-blue-700">
            <div class="sm:w-1/2">
                <img src="{{ asset('/images/bus.jpg') }}" class="min-h-full shadow-2xl" />
            </div>
            <div class="sm:w-1/2">
                @yield('auth')
            </div>
@endsection