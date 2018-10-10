@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="title text-center">
                        <p> @lang('app.myitems')</p>
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
                                                <img class="card-img-top" onerror="this.src='{{ asset('public/img/'.$item->image) }}'" src="/uploads/{{$item->image}}" alt="Card image cap">
                                                <span class="badgee badge-secondary">${{$item->price}}</span>
                                                <div class="card-body">
                                                    <a href="#" class="card-title text-primary nav-link"><p>{{$item->name}}</p></a>
                                                    <a href="{{ route('deleteItem',array($item->itemID))}}"><h5 style="color: #ff0018">@lang('app.delete')</h5></a>
                                                    <a href="{{ route('editItem',array($item->itemID)) }}"><h5 style="color:#37d25a">@lang('app.edit')</h5></a>
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
