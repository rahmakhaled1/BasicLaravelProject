<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title></title>
</head>
<body>

<div class="container-fluid mb-4">
<nav class="navbar bg-body-tertiary">
        <a class="navbar-brand" href="#">BlogWeb</a>
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    @if (Route::has('login'))
        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('create.post') }}"> {{ Auth::user()->name }}</a>
            </li>
        @else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
        @endauth
    @endif
</ul>
</nav>
</div>
<div style="padding-left: 25px" class="mb-5">
    <a href="{{ route('create.post') }}" class="btn btn-sm btn-outline-primary mr-2">Create New Posty</a>
</div>
<div class=" d-flex flex-column align-items-center text-center ">
    @foreach($post as $post)
    <div>
    <h6 class="mb-4" >{{$post->username}}</h6>

    <p class="fst-italic"> {{$post->description}}</p>
    <img src="post/{{$post->image}}" class="mb-4" height="400px" width="400px">
    </div>
    @endforeach
</div>






</body>
</html>
