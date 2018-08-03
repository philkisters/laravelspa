<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <app authuser="{{json_encode(Auth::user())}}" csrf="{{ csrf_token() }}" errors="{{json_encode($errors)}}"></app>
        
    </div>
    @if ($errors->has('username'))
        <script>
            setTimeout(function () {
                UIkit.notification({
                    message: '{{ $errors->first("username") }}',
                    status: 'warning',
                    timeout: '5000'
                });
            }, 1000);
        </script>
    @endif
    @if ($errors->has('password'))
        <script>
            setTimeout(function () {
                UIkit.notification({
                    message: '{{ $errors->first("password") }}',
                    status: 'warning',
                    timeout: '5000'
                });
            }, 1000);
        </script>
    @endif
</body>
</html>