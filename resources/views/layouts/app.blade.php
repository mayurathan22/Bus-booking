<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body class="min-h-screen login-background">
    <nav class="p-6 md:px-10 flex justify-between mb-5">
        <ul class="flex items-center">
            <li>
                <a href="/home" class="p-3">Bus Booking</a>
            </li>
            
        </ul> 
        
        <ul class="flex items-center">
            <li class="mx-2">
                <a href="/" class="p-3">Login</a>
            </li>
            <li class="mx-2">
                <a href="/signup" class="text-blue-700 px-3 py-2 rounded-sm border-2 border-blue-700">Signup</a>
            </li>
        </ul> 
    </nav>
    @yield('content')
</body>
</html>