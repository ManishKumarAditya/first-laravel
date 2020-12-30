<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog @yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
        <a href="" class="navbar-brand">result</a>
        <form action="" method="GET" class="form-inline mx-auto">
            <input type="search" name="search" size="70" class="form-control">
            <input type="submit" name="send" class="btn btn-danger" value="Go">
        </form>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('insertpage')}}" class="nav-link">insert</a></li>
        </ul>
    </nav>
    @section('content')
    @show
</body>

</html>
