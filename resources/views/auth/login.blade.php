@extends('layouts.app')

@section('content')
<div class="container bg-light">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="panel panel-default text-center login bg-light border-0">
                <a class="log-btn text-primary" href="{{ route('login') }}">@lang('app.login')</a>
                <a class="sign-btn text-muted" href="{{ route('register') }}">@lang('app.signup')</a>

                <div class="panel-body bg-light">
                    <form class="form text-center" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group row justify-content-center{{ $errors->has('userName') ? ' has-error' : '' }}">

                            <div >
                                <input id="text" type="text" class="form-control" name="userName" value="{{ old('userName') }}" placeholder="@lang('app.placeholderUN')" required autofocus>

                                @if ($errors->has('userName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="@lang('app.placeholderPA')" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input class="sumbit-log text-center" type="submit" value="@lang('app.login')">


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
