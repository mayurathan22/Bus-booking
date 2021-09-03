<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bus Booking</title>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<style> 
.login-background {
    background-image: url('{{ asset('images/cover.png') }}');
    background-size: cover;
    background-repeat: repeat-y;
    height: 100vh;
}
.login-img {
    background-image: url('{{  asset('/images/bus.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    max-height: 100%;
    background-position: center;
}
</style>
<body class="login-background"  style="box-sizing: border-box;">
    <div id="app" >
		<nav class="navbar navbar-expand-lg bg-white navbar-fixed-top px-sm-5 shadow" >
            <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{ asset('images/Logo.svg') }}" class="w-25" />
            </a>

			<button type="button" class="navbar-toggler text-primary" data-toggle="collapse" data-target="#navbarSupportedContent">
                <i class="fas fa-sliders-h text-prmiary"></i>
			</button>

			 {{-- <div class="collapse navbar-collapse justify-content-end " id="navBar">
				<ul class="navbar-nav  align-items-center">  --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        {{-- <ul class="navbar-nav mr-auto">
    
                        </ul>
     --}}
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                         @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" ><h5 class="mb-0 pb-0">Login</h5></a>	
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"> <h5 class="mb-0 pb-0">Register</h5>
                                    {{-- <button type="button" class="btn btn-outline-primary"><h5 class="mb-0 py-1">Register</h5></button> --}}
                                </a>	
                            </li>
                        @endif
                        @else
                        @if(auth()->user()->id==1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{  route('admin-bus') }}" >Bus</a>	
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{  route('admin-trip') }}" >Trip</a>	
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{  route('admin-booked-users') }}" >Booked User</a>	
                        </li>
                        
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{  route('user-dashboard') }}" >Dashboard</a>	
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{  route('user-bus') }}" >Bus</a>	
                        </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
					
					
				 </ul>
			</div>
		</nav>

        <main class="py-4">
            @yield('content')
        </main>

	</div>
<script>
    document.getElementById("myBtn").addEventListener("click", function() {
        console.log("Hello World!");
    });
</script>
</body>
</html>
