@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Categories list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th rowspan="1" colspan="1">Name in english</th>
                                    <th rowspan="1" colspan="1">Name in arabic</th>
                                    <th rowspan="1" colspan="1">Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)

                                    <tr>
                                        <td rowspan="1" colspan="1">{{$category->name_en}}</td>
                                        <td rowspan="1" colspan="1">{{$category->name_ar}}</td>
                                        <td rowspan="1" colspan="1">
                                            <a href="{{route('editcategory', $category->categoryID)}}" class="btn btn-primary" >Edit</a>
                                            <a href="{{route('categorydetails', $category->categoryID)}}" class="btn btn-success">Details</a>
                                            <a href="{{route('deletecategory', $category->categoryID)}}" class="btn btn-danger">Delete</a>

                                            @if($category->status==0)

                                                <div class="btn-group">

                                                    <button type="button" style="width: 105px;"class="btn btn-success dropdown-toggle" data-toggle="dropdown">Activate
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>

                                                    <ul class="dropdown-menu"style="width: 105px;" role="menu">
                                                        <li><a href="{{route('cat_status',$category->categoryID)}}" class="" >Deactivate</a></li>
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="btn-group">
                                                    <button type="button" style="width: 105px;" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Deactivate
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu"style="width: 105px;" role="menu">
                                                        <li class=""><a href="{{route('cat_status',$category->categoryID)}}" >Activate</a></li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name in english</th>
                                    <th rowspan="1" colspan="1">Name in arabic</th>
                                    <th rowspan="1" colspan="1">Controls</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection
