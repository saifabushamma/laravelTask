@extends('admin.layouts.app')

@section('content')

    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Category</h3>
            </div>
            <form class="form"  method="POST" class="needs-validation" action="{{ route('addcategory') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Name in english</th>
                                <th rowspan="1" colspan="1">Name in arabic</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td rowspan="1" colspan="1">
                                    <input type="text" class="form-control" name="name_en" placeholder="Name of the category in english"/>
                                </td>
                                <td rowspan="1" colspan="1">
                                    <input type="text" class="form-control" name="name_ar" placeholder="Name of the category in arabeic"/>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="box-footer">
                            <a href="{{route('catlist')}}" type="submit" class="btn btn-default">Back </a>

                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                        </div>


                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>

@endsection

