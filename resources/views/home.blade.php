@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="title text-center">
                    @if(isset($name))
                    <p>{{ $name }}</p>
                        @else
                    <p>@lang('app.homepage')</p>
                    @endif
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="container">
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-lg-3 col-sm-12 p-0 m-0">
                                <div class="card-body">
                                    <div class="card-deck my-3">
                                        <div class="card">
                                            <img class="card-img-top" src='{{ asset('public/img/'.$item->image) }}' alt="Card image cap">
                                            <span class="badgee badge-secondary">${{$item->price}}</span>
                                            <div class="card-body">
                                                <a href="{{ route('viewItem', $item->itemID) }}" class="card-title text-primary nav-link"><p>{{$item->name}}</p></a>
                                                <p class="card-text">{{$item->description}}</p>
                                                <p class="card-text text-right"><small class="text-muted">{{date('Y-m-d', strtotime($item->created_at))}}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
</div>
        </div>
    </div>
</div>

@endsection
