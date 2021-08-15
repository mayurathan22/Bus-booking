@extends('layouts.auth')

@section('auth')

<div class="container">  
    <div class="row">
        <div class="col-12 text-center my-4">
            <h2 class="text-primary font-weight-bold"><i class="fas fa-user-lock mr-2"></i>Log In </h2>
        </div>
        <div class="col-md-8 mx-auto">
            <div class="card border-0">
                
                <div>
                    <form method="POST" action="{{ route('login') }}" class="">
                        @csrf

                        <div class="form-group ">

                            <label for="email" class="font-weight-bold">Email Address</label>

                            <div class="mt-0">
                                <input id="email" type="email" class="w-100 px-3 py-2 rounded-lg shadow border-2 border-primary"
                                name="email"
                                value="{{ old('email') }}"
                                required 
                                autocomplete="email"
                                autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                           
                            <label for="password" class="font-weight-bold">Password</label>
            
                            <div class="mt-0">
                                <input id="password" type="password" class="w-100 px-3 py-2 rounded-lg shadow border-2 border-primary"
                                name="password" 
                                required 
                                autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                        <div class="my-5">
                            <button type="submit" class="btn btn-primary shadow btn-block">Login</button>
                                @if (Route::has('password.request'))
                                    <a class="text-red-400" href="{{ route('password.request') }}">
                                        Forgot Password
                                    </a>
                                @endif
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection