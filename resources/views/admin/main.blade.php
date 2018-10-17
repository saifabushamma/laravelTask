@extends('admin.layouts.app')

@section('content')



        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <a href="{{route('userlist')}}">  <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">{{ $stats['userC'] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div></a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <a href="{{route('itemlist')}}"> <div class="info-box">
                      <span class="info-box-icon bg-red"><i class="ion ion-ios-cart-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Items</span>
                            <span class="info-box-number">{{ $stats['itemC'] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div></a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                   <a href="{{route('catlist')}}"> <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa  fa-tags"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Categories</span>
                            <span class="info-box-number">{{ $stats['categoryC'] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                       </div></a>
                    <!-- /.info-box -->
                </div>

                <!-- /.col -->
            </div>
        </section>
            <!-- /.row -->
    </div>
@endsection