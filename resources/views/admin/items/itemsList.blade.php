@extends('admin.layouts.app')

@section('content')
    <section class="content">
        <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Items List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Price</th>
                                <th rowspan="1" colspan="1">Category</th>
                                <th rowspan="1" colspan="1">Added by</th>
                                <th rowspan="1" colspan="1">Description</th>
                                <th rowspan="1" colspan="1">Controls</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td rowspan="1" colspan="1">{{$item->name}}</td>
                                    <td rowspan="1" colspan="1">{{$item->price}}</td>
                                    <td rowspan="1" colspan="1">{{$item->category->name_en}}</td>
                                    <td rowspan="1" colspan="1">{{$item->addedBy}}</td>
                                    <td rowspan="1" colspan="1">{{$item->description}}</td>

                                    <td rowspan="1" colspan="1">
                                        <a href="{{route('edititem', $item->itemID)}}" class="btn btn-primary" >Edit</a>
                                        <a href="{{route('itemdetails',$item->itemID)}}" class="btn btn-success">Details</a>
                                       <a href="{{route('deleteitem',$item->itemID)}}" class="btn btn-danger">Delete</a>


                                        @if($item->status==0)

                                            <div class="btn-group">

                                                <button type="button" style="width: 105px;"class="btn btn-success dropdown-toggle" data-toggle="dropdown">Activate
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>

                                                <ul class="dropdown-menu"style="width: 105px;" role="menu">
                                                    <li><a href="{{route('item_status',$item->itemID)}}" class="" >Deactivate</a></li>
                                                </ul>
                                            </div>
                                        @else
                                            <div class="btn-group">
                                                <button type="button" style="width: 105px;" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Deactivate
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu"style="width: 105px;" role="menu">
                                                    <li class=""><a href="{{route('item_status',$item->itemID)}}" >Activate</a></li>
                                                </ul>
                                            </div>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Price</th>
                                <th rowspan="1" colspan="1">Category</th>
                                <th rowspan="1" colspan="1">Added by</th>
                                <th rowspan="1" colspan="1">Description</th>
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