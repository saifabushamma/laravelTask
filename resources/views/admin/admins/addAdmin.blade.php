@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Admin</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form"  method="POST" action="{{ route('addusers') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label><br>
                                <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Enter Your Username"/>
                                @if($errors->has('username'))
                                    {{$errors->first('username')}}
                                @endif
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Email</label><br>
                                <input type="email" placeholder="Enter Your Email" name="email" value="{{old('email')}}" class="form-control"/>
                                @if($errors->has('email'))
                                    {{$errors->first('email')}}
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Roles</label><br>
                                <input class="form-control" type="text" value="" id="tags-input" data-role="tagsinput" />

                            </div>
                            <div class="form-group">
                                <label>Image</label><br>
                                <input  class="inputImg form-control" type="file" name="image" onchange="readURL(this);">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label><br>
                                <input type="password" placeholder="Enter Your Password"  name="password"  class="form-control"/>
                                @if($errors->has('password'))
                                    {{$errors->first('password')}}
                                @endif
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Confirm password</label><br>
                                <input type="password" placeholder="Enter Your Password" name="password_confirmation" class="form-control"/>
                                @if($errors->has('password_confirmation'))
                                    {{$errors->first('password_confirmation')}}
                                @endif
                            </div>

                            <div class="form-group">
                                <img class="img-thumbnail" id="blah" src="http://127.0.0.1:8000/assets/img/01.png" alt="your image">
                            </div>
                            <!-- /.form-group -->


                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <!-- /.row -->
            </div>

        </div>
    </section>
    <!-- /.box -->

@endsection