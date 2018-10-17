@extends('admin.layouts.app')

@section('content')

    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add item</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form enctype="multipart/form-data" class="form"  method="POST" class="needs-validation" action="{{ route('additemss') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label><br>
                                <input type="text" class="form-control" name="name" placeholder="Name of the item"/>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Description</label><br>
                                <input id="desc" placeholder="Description of The Item" id="item_description" type="text" class="form-control required" name="description" value="">

                            </div>

                                <div class="form-group">
                                    <label>Categories</label><br>
                                    <select name="category" id="inputState" class="form-control">
                                        <option >..
                                        </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->categoryID }}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
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
                                <input id="price" placeholder="Price of Item" id="item_price" type="number" class="form-control required" name="price" value="" >

                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>Country</label><br>
                                <input class="form-control required" placeholder="Country of made" id="pass" type="text"  name="country" value="">

                            </div>


                            <div class="form-group">
                                <img id="blah" src="{{ asset('assets/img/03.png') }}" alt="your image" name="image" style="border: solid 1px black;"/>
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