<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
    <title>安安</title>

    @include('layouts.css')
    
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    @include('layouts.js')
</body>
</html>