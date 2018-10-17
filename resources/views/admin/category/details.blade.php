@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Categories list</h3>
        </div>

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
                            <td rowspan="1" colspan="1">{{$categories->name_en}}</td>
                            <td rowspan="1" colspan="1">{{$categories->name_ar}}</td>
                        </tr>
                    </tbody>
                </table>

                    <div class="box-footer">
                        <a href="{{route('catlist')}}" type="submit" class="btn btn-default">Back </a>
                    </div>


            </div>
        </div>
    </div>
</section>

@endsection