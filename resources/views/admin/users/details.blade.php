@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">User Details</h3>
            </div>

                    <div class="card border-primary">
                        <div class="card-header bg-primary py-0">

                        </div>

                        <div class="card-body ">

                            <table class ="w-100">

                                <tr class="color1">
                                    <th>
                                        <label style="margin-left: 10px; margin-bottom: 10px">@lang('app.loginN'):</label>
                                    </th>
                                    <td>
                                        <span class="card-text ">:{{$user->userName}}</span>
                                    </td>
                                </tr>



                                <tr>
                                    <th>
                                        <label style="margin-left: 10px; margin-bottom: 10px">@lang('app.profileEM'):</label>
                                    </th>
                                    <td>
                                        <span class="card-text ">:{{$user->email}}</span>
                                    </td>
                                </tr>


                                <tr class="color1">
                                    <td>
                                        <label style="margin-left: 10px; margin-bottom: 10px">@lang('app.createdat')</label>
                                    </td>

                                    <td>
                                        <span class="card-text ">:{{date('Y-m-d', strtotime($user->created_at))}}</span>
                                    </td>
                                </tr>

                                <tr class="color1">
                                    <td>
                                        <label style="margin-left: 10px; margin-bottom: 10px">@lang('app.updateat')</label>
                                    </td>

                                    <td>
                                        <span class="card-text ">:{{date('Y-m-d', strtotime($user->updated_at))}}</span>
                                    </td>
                                </tr>



                            </table>

                            <div class="box-footer">
                                <a href="{{route('userlist')}}" type="submit" class="btn btn-default">Back </a>
                            </div>

                        </div>
                    </div>
                </div>
    </section>
@endsection
