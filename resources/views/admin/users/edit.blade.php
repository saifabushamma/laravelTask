@extends('admin.layouts.app')

@section('content')

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit item</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form enctype="multipart/form-data" class="form"  method="POST" class="needs-validation" action="{{route('submitedituser',$user->id)}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label><br>
                                <input type="text" class="form-control" name="userName" value="{{$user->userName}}"/>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Password</label><br>
                                <input id="pass"  type="password" class="form-control required" name="description" value="{{$user->password}}">

                            </div>
                            <div class="form-group">
                                <label>Image</label><br>
                                <input class="inputImg" class="form-control" type="file" name="image" onchange="readURL(this);">
                            </div>
                            <!-- /.form-group -->

                        </div>

                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input id="price"  id="email" type="email" class="form-control required" name="email" value="{{$user->email}}" >

                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Confirm password</label><br>
                                <input class="form-control required" id="pass" type="password"  name="password" value="{{$user->password}}">

                            </div>


                            <div class="form-group">
                                <img id="blah" src="{{ asset($user->image) }}" alt="your image" name="image" style="border: solid 1px black;"  class="img-fluid img-thumbnail"/>
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