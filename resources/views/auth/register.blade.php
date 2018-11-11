@extends('layouts.app')

@section('content')
    <div class="container bg-light">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default text-center login bg-light border-0">
                    <a class="log-btn text-muted " href="{{ route('login') }}">@lang('app.login')</a>
                    <a class="sign-btn text-success" href="{{ route('register') }}">@lang('app.signup')</a>
                </div>



                <div class="panel-body">

                    <div id="Signup" class="tabcontent text-center">
                        <form class="form text-center"  method="POST" action="{{ route('saif') }}"  enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div>
                                <input type="text" name="username" placeholder="@lang('app.placeholderUN')">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>
                            <div>
                                <input id="password" type="password"  name="password"  placeholder="@lang('app.placeholderPA')" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div><br>
                            <div>
                                <input id="password-confirm" type="password"  name="password_confirmation" placeholder="@lang('app.placeholderPA')" required>
                            </div><br>
                            <div >
                                <input type="Email" value="@if(isset($email)) {{$email}} @else {{old('email')}} @endif" name="email" placeholder="@lang('app.placeholderEM')">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">

                                    <input class="inputImg" type="file" name="image" onchange="readURL(this);">
                                </div>
                                <div class="col-md-6">

                                    <img class="img-thumbnail" id="blah" src="http://127.0.0.1:8000/assets/img/01.png" alt="your image">
                                </div>
                            </div>
                            <div>
                                <input class="sumbit-sign text-center" type="submit" value="@lang('app.signup')">
                            </div>

                            <div>

                                <label for="name" class="col-md-4 control-label">@lang('app.loginW')</label>

                                <div class="col-md-12">

                                    <a href="{{ route('socialLogin','facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fab fa-facebook" style="color: blue"></i></a>

                                    <a href="{{route('socialLogin','twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fab fa-twitter" style="color: blue"></i></a>

                                    <a href="{{route('socialLogin','google')}}" class="btn btn-social-icon btn-google-plus"><i class="fab fa-google" style="color: orangered"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
