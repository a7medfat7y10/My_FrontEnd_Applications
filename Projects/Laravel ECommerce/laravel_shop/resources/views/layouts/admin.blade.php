<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href =" {{asset('css/bootstrap.css')}}">
    <!-- normalize library  for good reset-->
    <link rel="stylesheet" href ="{{asset('css/normalize.css')}}">
    <!-- font-awesome icons library -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Main Css File -->
    <link rel="stylesheet" href="{{asset('css/backend.css?v=') . time()}}">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/admin')}}">Admin</a>
        </div>
        <div class="collapse navbar-collapse" id="app-nav">
            <ul class="nav navbar-nav">
                <li ><a href="{{url('/admin/users')}}">Users </a></li>
                <li ><a href="{{url('/admin/categories')}}">Categories </a></li>
                <li ><a href="{{url('/admin/items')}}">Items</a></li>
                <li ><a href="{{url('/admin/comments')}}">Comments</a></li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/home')}}">Visit Shop</a></li>
                        <li><a href="{{url('admin/users/' . Auth::user()->id . '/edit')}}">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>


<div class="footer">
    @yield('footer')
</div>
</body>
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('js/html5shiv.min.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}"></script>
<!-- bootstrap library -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Main JavaScript File -->
<script src="{{asset('js/backend.js')}}"></script>
</html>
