@extends('layouts.app')

@section('content')
    <div class="title text-center">
        <p>@lang('app.myprofile')</p>
    </div>



    <section class="create-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card border-primary">
                        <div class="card-header bg-primary py-0">
                            <div class="row">
                                <div  class="col col-md-12">
                                    <p  class="text-title text-white justify-content-left">@lang('app.myinfo')</p>
                                </div>

                            </div>
                        </div>

                        <div class="card-body ">

                            <table class ="w-100">

                                <tr class="color1">
                                    <th>
                                <i class="fas fa-unlock cform"></i>
                                <label>@lang('app.loginN')</label>
                                    </th>
                                    <td>
                                <span class="card-text ">:{{$user->userName}}</span>
                                    </td>
                                </tr>



                                    <tr>
                                        <th>
                                <i class="far fa-envelope"></i>
                                <label>@lang('app.profileEM')</label>
                                        </th>
                                        <td>
                                            <span class="card-text ">:{{$user->email}}</span>
                                        </td>
                                    </tr>


                                    <tr class="color1">
                                        <td>
                                <i class="fas fa-calendar-alt"></i>
                                <label>@lang('app.regDate')</label>
                                        </td>

                                    <td>
                                        <span class="card-text ">:{{date('Y-m-d', strtotime($user->created_at))}}</span>
                                    </td>
                                    </tr>
                                </table>

                            <div>
                                <a href="{{ route('editprofile') }}"><button>@lang('app.editInfo')</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
