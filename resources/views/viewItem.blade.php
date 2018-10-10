@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="container">
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
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                        <div class="table-responsive-sm">
                            <table class="table table-striped ">
                                <tbody>
                                <tr>
                                    <td style="width: 20%">
                                        <i class="fas fa-calendar-alt"></i>
                                        @lang('app.added')
                                    </td>
                                    <td>:{{date('Y-m-d', strtotime($item->created_at))}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-dollar-sign"></i>
                                       @lang('app.price')
                                    </td>
                                    <td>:${{ $item->price }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-globe-asia"></i>
                                        @lang('app.madein')
                                    </td>
                                    <td>:{{ $item->country }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-tags"></i>
                                        @lang('app.cate')
                                    </td>
                                    <td> {{$category->name}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-user"></i>
                                        @lang('app.addedby')
                                    </td>
                                    <td>{{$user->userName}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

                <hr/>
            <div class="row">

                        @auth
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form method="post" action="{{route('comment', $item->itemID)}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label >@lang('app.comment')</label>
                                <textarea class="form-control" name="comment" id="Textarea" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">@lang('app.addC')</button>
                        </form>
                    </div>
            </div>
                            @endauth

                        @guest
                                <div> <a class="nav-link  d-inline pr-0 " href="{{ route('login') }}">Login </a>or
                                    <a class="nav-link pl-0 d-inline pr-0" href="{{ route('register') }}">Register</a> To Add Comment</div>
                            @endguest

                    </div>

            <hr/>
                <div class="row">
                    @foreach($comments as $comment)

                    <div class="col-md-12">
                        <img src="{{ asset('public/img/'.$comment['user']->image) }}" class="img-fluid img-thumbnail" style="border-radius: 50%; width: 80px; height: 80px;"/>


                        <span style="    padding: 10px; margin: 30px;">{{$comment->comment}}</span>
                        <hr/>

                    </div>
                        @endforeach


                </div>
                </div>

            </div>
        </div>

@endsection