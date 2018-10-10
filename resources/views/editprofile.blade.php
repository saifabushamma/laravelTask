@extends('layouts.app')


@section('content')
    <div class="title text-center">
        <p>@lang('app.editp')</p>
    </div>

    <section class="create-formm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card border-primary">
                        <div class="card-header bg-primary py-0">
                            <div class="row">
                                <div  class="col col-md-12">
                                    <p  class="text-title text-white justify-content-left">@lang('app.editp')</p>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('editprofile') }}" class="needs-validation" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="name" >@lang('app.username')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk d-inline"></i>
                                                <input  value="{{ $user->userName }}" id="name" type="text" class="form-control d-inline" name="userName"  required autofocus>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label  for="name" >@lang('app.profileEM')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk"></i>
                                                <input value="{{ $user->email }}" id="Email" type="email" class="form-control required" name="email"  required autofocus>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="password" >@lang('app.pass')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk"></i>
                                                <input placeholder="Password" id="password" type="password" class="form-control required" name="password" value="{{ $user->password }}" required autofocus>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="name" >@lang('app.repass')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk"></i>
                                                <input class="form-control required" placeholder="repassword" id="pass" type="password"  name="password" value="{{ $user->password }}" required autofocus>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="name" >@lang('app.image')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type='file' name="image" onchange="readURL(this);" value="{{ $user->image }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-primary">
                                                    @lang('app.save')
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="card">
                                                <img id="blah"  src='{{ asset('public/img/'.$user->image) }}' alt="your image"  />

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection