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
                    <form class="form text-center"  method="POST" action="{{ route('saif') }}">
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
                        <input type="Email" name="email" placeholder="@lang('app.placeholderEM')">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-9">

                                <input class="inputImg" type="file" name="image" onchange="readURL(this);">
                            </div>
                            <div class="col-md-3">

                                <img class="img-thumbnail" id="blah" src="http://127.0.0.1:8000/assets/img/01.png" alt="your image">
                            </div>
                        </div>
                        <div>
                        <input class="sumbit-sign text-center" type="submit" value="@lang('app.signup')">
                        </div>
                    </form>
                </div>
            </div>
            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
