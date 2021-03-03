<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>安安</title>

    <link rel="stylesheet" href="/css/app.css">

    <?php $asset_ver = env('MIX_ASSET_VER')?>
    <script src="{{ mix("/js/{$asset_ver}/app.js") }}"></script>
    
	<!-- <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet"> -->
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    @include('layouts.js')
</body>
</html>