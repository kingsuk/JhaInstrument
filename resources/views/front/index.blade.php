@extends('layouts.front.master')
@section('content')
<div class="header-end">
            <div class="container">
                
                <div class="clearfix"></div>
            </div>
            <img src="http://3.bp.blogspot.com/-mM5mDcia-yk/Tie4L4WhUzI/AAAAAAAAAM4/7x2SciqVQjk/w1200-h630-p-k-no-nu/Switched-Mode-Power-Supply-SMPS.jpg" alt="...">
        </div>
        
        <div class="shop-grid">
            <div class="container">

            @foreach($products as $value)

                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                     <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                            <div class="img"><img src="{{$value->image1}}" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>{{$value->name}}</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add">
                                    <span class=" item_price">{{$value->description}}</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            </div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="{{route('view-product-by-id',$value->id)}}">Quick view</a>
                    </div>
                </div>
            @endforeach

           

                
                
                
        <div class="clearfix"></div>
            </div>
        </div>

        

        <div class="container">
            <div class="pull-right">
                {{ $products->links() }}
            </div>
        </div>

@endsection