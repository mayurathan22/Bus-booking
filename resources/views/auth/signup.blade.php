@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center login-background py-16" >
    
        <div class="sm:flex justify-between bg-white rounded-lg shadow-2xl w-2/3 my-10 sm:my-0 border-8 border-blue-700">
            <div class="sm:w-1/2">
                <img src="{{ asset('/images/bus.jpg') }}" class="min-h-full shadow-2xl" />
            </div>
            <div class="sm:w-1/2 p-10">
            
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="text-1xl md:text-2xl font-bold text-center mb-10">Create An Account</h2>
                    <div class=" pt-0 pb-8 px-6 sm:px-10">
                        <form action="#" method="POST" class="mb-0 space-y-3">
                        <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="mt-1">
                                    <input 
                                    id="name" 
                                    name="name" 
                                    type="text" 
                                    autocomplete="email" 
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none forcus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" 
                                    required>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <div class="mt-1">
                                    <input 
                                    id="email" 
                                    name="email" 
                                    type="email" 
                                    autocomplete="email" 
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none forcus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" 
                                    required>
                                </div>
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <div class="mt-1">
                                    <input 
                                    id="password" 
                                    name="password" 
                                    type="password"  
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none forcus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" 
                                    required>
                                </div>
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                <div class="mt-1">
                                    <input 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    type="password"  
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none forcus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" 
                                    required>
                                </div>
                            </div>

                            

                            <div>
                                <button 
                                    type="submit" 
                                    class="w-full flex justify-center mt-10 py-2 px-4 border border-transparent rounded-lg shadow-sm text-md font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    Signup
                                </button>
                            </div>

                            <div>
                                <a href="#" class="text-red-400">Forgot Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection