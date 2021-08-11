@extends('layouts.auth')

@section('auth')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="py-10 sm:mx-auto sm:w-full sm:max-w-md">
                 <h2 class="text-1xl md:text-2xl font-bold text-center mb-5">Create An Account</h2>
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class=" pt-0 pb-8 px-6 sm:px-10">
                    <form method="POST" action="{{ route('login') }}" class="mb-0 space-y-3">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>

                            <div class="mt-1">
                                <input id="email" type="email" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none border-2 border-indigo-500 focus:ring-1 focus:ring-indigo-500"
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

                        <div class="form-group row">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>

                            <div class="mt-1">
                                <input id="password" type="password" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none border-2 border-indigo-500 focus:ring-1 focus:ring-indigo-500"
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

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div >
                            <div>
                                <button type="submit" class="w-full flex justify-center mt-10 py-2 px-4 border border-transparent rounded-lg shadow-sm text-md font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Login
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-red-400" href="{{ route('password.request') }}">
                                        Forgot Password
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection