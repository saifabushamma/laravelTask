<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">




</head>
<body class="bg-light">
    <div id="app">

        <!-- Start Navbar -->
        <div class="start">
            <div class="container">
                <div class="row">
                    @foreach (config('translatable.locales') as $lang => $language)
                        @if ($lang != app()->getLocale())
                            <ul style="list-style-type:none">
                            <li >
                                <a href="{{ route('lang.switch', $lang) }}" style="color: #000">
                                    {{ $language }}
                                </a>
                            </li>
                            </ul>
                        @endif
                    @endforeach
                    <div class="col-sm text-center text-sm-left">

                                <!-- Authentication Links -->

                                @if (Auth::guest())
                            <ul class="nav col-sm text-center justify-content-end nav-item">

                            <li><a class="nav-link  d-inline pr-0 " href="{{ route('login') }}">@lang('app.login')/</a></li>
                                    <li><a class="nav-link pl-0 d-inline pr-0" href="{{ route('register') }}">@lang('app.signup')</a></li>
                            </ul>
                                @else
                            <ul class="nav col-sm text-center  nav-item">
                                <li>
                                <img class="userimg img-fluid img-thumbnail " src='{{ asset('public/img/'.$user->image) }}' style="height: 35px; width: 35px;" ></li>
                            <li class="dropdown fdrop">

                                        <a href="#" class="dropdown-toggle  text-muted" style="text-decoration: none;" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->userName }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>

                                                <a href="{{ route('myprofile') }}">
                                                    @lang('app.myprofile')
                                                </a></li>
                                            <li>

                                            <li>
                                                <a href="{{ route('newItem') }}">
                                                    @lang('app.newitem')
                                                </a></li>
                                            <li>


                                            <li>
                                                <a href="{{ route('myItem') }}">
                                                    @lang('app.myitems')
                                                </a></li>
                                                <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    @lang('app.logout')
                                                </a>

                                                </li>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Navbar -->


                <div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <div  class="container">
                        <a class="navbar-brand" href="{{ route('home') }}">@lang('app.homepage')</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarNavDropdown" class="navbar-collapse collapse">
                            <ul class="navbar-nav mr-auto"></ul>
                            <ul class="navbar-nav">

                                @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('filter', ['id' => $category->categoryID]) }}">{{$category->name}}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </nav>
        @yield('content')
    </div>





    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
