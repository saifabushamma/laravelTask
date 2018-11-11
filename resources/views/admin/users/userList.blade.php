@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Users list</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th rowspan="1" colspan="1">Username</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Controls</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)

                                    <tr>
                                        <td>{{$user->userName}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('edituser',$user->id)}}" class="btn btn-primary" >Edit</a>
                                            <a href="{{route('userdetails',$user->id)}}" class="btn btn-success">Details</a>
                                            <a href="{{route('deleteuser',$user->id)}}" class="btn btn-danger">Delete</a>

                                            @if($user->status==0)

                                                <div class="btn-group">

                                                    <button type="button" style="width: 105px;"class="btn btn-success dropdown-toggle" data-toggle="dropdown">Activate
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>

                                                    <ul class="dropdown-menu"style="width: 105px;" role="menu">
                                                        <li><a href="{{route('users_status',$user->id)}}" class="" >Deactivate</a></li>
                                                    </ul>
                                                </div>
                                            @else
                                                <div class="btn-group">
                                                    <button type="button" style="width: 105px;" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Deactivate
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu"style="width: 105px;" role="menu">
                                                        <li class=""><a href="{{route('users_status',$user->id)}}" >Activate</a></li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Username</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Controls</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
@endsection

