<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/home" class="p-3">Bus Booking</a>
            </li>
            
        </ul> 
        
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Login</a>
            </li>
            <li>
                <a href="/signup" class="p-3">Signup</a>
            </li>
        </ul> 
    </nav>
    @yield('content')
</body>
</html>