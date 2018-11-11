@extends('layouts.app')

@section('content')
    <div class="card">
        <table class="table table-hover shopping-cart-wrap">
            <thead class="text-muted">
            <tr>
                <th scope="col">Product</th>
                <th scope="col" width="120">Quantity</th>
                <th scope="col" width="120">Price</th>
                <th scope="col" width="200" class="text-right">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items AS $item)
            <um>
                <td>
                    <figure class="media">


                        <div class="img-wrap">
                            <img src="{{ asset('public/img/'.$item->image) }}" class="img-thumbnail img-sm">
                        </div>
                        <figcaption class="media-body">

                            <h2 class="title text-truncate">{{ $item->name }}</h2>
                            <h6 class="title text-truncate">{{ $item->description }}</h6>


                        </figcaption>
                    </figure>
                </td>
                <td>
                    <input type="number" class="form-control" name="quantity" value="{{$item->qty}}">

                </td>

                <td>
                    <div class="price-wrap">
                        <var class="price">{{\App\Currency::ConvertFromUSD($item->price * $item-> qty)}} {{\Session::get('currency')[0]->currency_en}}</var>
                    </div> <!-- price-wrap .// -->
                </td>
                <td class="text-right">
                    <a href="{{Route('removecart',$item->itemID.":". $item->qty)}}" class="btn btn-outline-danger btn-round"> × Remove</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div> <!-- card.// -->
@endsection