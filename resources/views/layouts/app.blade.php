<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built In Laravel</title>
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
</head>
<body>
    @include('inc.navbar')
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
</body>
</html>