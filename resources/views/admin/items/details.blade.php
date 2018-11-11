@extends('admin.layouts.app')

@section('content')

    <section class="content">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Item Details</h3>
            </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="title text-center">
                                    <p>{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img src="{{ asset('public/img/'.$item->image) }}" class="img-fluid img-thumbnail"/>
                        </div>
                        <div class="col-md-9">

                            <div class="table-responsive-sm">
                                <table class="table table-striped ">
                                    <tbody>

                                    <tr>
                                        <td>
                                            @lang('app.price'):
                                        </td>
                                        <td>${{ $item->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('app.madein'):
                                        </td>
                                        <td>{{ $item->country }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('app.cate'):
                                        </td>
                                        <td> {{$category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('app.addedby'):
                                        </td>
                                        <td>{{$user->userName}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('app.createdat'):
                                        </td>
                                        <td> <small class="text-muted">{{date('Y-m-d', strtotime($item->created_at))}}</small></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('app.updateby'):
                                        </td>
                                        <td>{{$user->userName}}</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @lang('app.updateat'):
                                        </td>
                                        <td> <small class="text-muted">{{date('Y-m-d', strtotime($item->updated_at))}}</small></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="box-footer">
                            <a href="{{route('itemlist')}}" type="submit" class="btn btn-default">Back </a>
                        </div>
                    </div>
        </div>
    </section>
@endsection