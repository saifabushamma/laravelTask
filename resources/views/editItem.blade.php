@extends('layouts.app')

@section('content')

    <div class="title text-center">
        <p> @lang('app.editI')</p>
    </div>

    <section class="create-formm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card border-primary">
                        <div class="card-header bg-primary py-0">
                            <div class="row">
                                <div  class="col col-md-12">
                                    <p  class="text-title text-white justify-content-left">Edit Item</p>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">

                            <form method="POST" action="{{ route('editItem',array($item->itemID)) }}" class="needs-validation" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="name" >@lang('app.name')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk d-inline"></i>
                                                <input id="name" type="text" class="form-control d-inline" name="name" value="{{ $item->name }}" required autofocus>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label  for="name" >@lang('app.desc')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk"></i>
                                                <input id="desc" id="item_description" type="text" class="form-control required" name="description" value="{{ $item->description }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="price" >@lang('app.price')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk"></i>
                                                <input id="price"  id="item_price" type="number" class="form-control required" name="price" value="{{ $item->price }}" required autofocus>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="country" >@lang('app.country')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <i class="fas fa-asterisk"></i>
                                                <input class="form-control required"  id="country" type="text"  name="country" value="{{ $item->country }}" required autofocus>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">

                                                <label for="inputState">@lang('app.cate')</label>
                                            </div>
                                            <div class="col-md-9">

                                                <select name="category" id="inputState" class="form-control" >
                                                    <option >..</option>

                                                @foreach($categories as $category)
                                                        <option @if($item->category_categoryID == $category->categoryID) {{"SELECTED"}} @endif
                                                                value="{{$category->categoryID}}">{{$category->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-3 text-right">
                                                <label for="name" >@lang('app.image')</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input name="image" type="file" value="{{ $item->image }}" onchange="readURL(this); " />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-primary">
                                                    @lang('app.additem')
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="card">
                                                <img id="blah" src='{{ asset('public/img/'.$item->image) }}' alt="your image" />
                                                <span id="price-live" class="badgee badge-secondary">${{ $item->price }}</span>
                                                <div class="card-body">
                                                    <h5 id="name-live" class="card-title text-">{{ $item->name }}</h5>
                                                    <p id="desc-live" class="card-text">{{ $item->description }}</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection