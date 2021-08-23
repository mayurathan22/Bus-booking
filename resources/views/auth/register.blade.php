@extends('layouts.auth')

@section('auth')
<div class="container">  
    <div class="row">
        <div class="col-12 text-center my-3">
            <h2 class="text-primary font-weight-bold"><i class="fas fa-user-plus mr-2 "></i>Sign Up </h2>
        </div>
        <div class="col-md-8 mx-auto">
            <div class="card border-0"> 
            
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="font-weight-bold">Name</label>

                            <div class="mt-0">
                                <input id="name" type="text" class="w-100 px-3 py-2 rounded-lg shadow border-2 border-primary" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"  class="font-weight-bold">Email Address</label>

                            <div class="mt-1">
                                <input id="email" type="email" class="w-100 px-3 py-2 rounded-lg shadow border-2 border-primary"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password"  class="font-weight-bold">Password</label>

                            <div class="mt-1">
                                <input id="password" type="password" class="w-100 px-3 py-2 rounded-lg shadow border-2 border-primary"
                                name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"  class="font-weight-bold">Confirm Password</label>

                            <div class="mt-1">
                                <input id="password-confirm" type="password" class="w-100 px-3 py-2 rounded-lg shadow border-2 border-primary" 
                                name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary shadow btn-block">
                                Register
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
