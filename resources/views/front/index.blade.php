@extends('layouts.front.master')
@section('content')
<div class="header-end">
            <div class="container">
                
                <div class="clearfix"></div>
            </div>
            <img src="./images/shoe3.jpg" alt="...">
        </div>
        <div class="feel-fall">
            <div class="container">
                <div class="pull-left fal-box">
                    <div class=" fall-left">
                        <h3>Fall</h3>
                        <img src="images/f-l.png" alt="/" class="img-responsive fl-img-wid">
                        <p>Inspiration and innovation<br> for every athlete in the world</p>
                        <span class="fel-fal-bar"></span>
                    </div>
                </div>
                <div class="pull-right fel-box">
                    <div class="feel-right">
                        <h3>Feel</h3>
                        <img src="images/f-r.png" alt="/" class="img-responsive fl-img-wid">
                        <p>Inspiration and innovation<br> for every athlete in the world</p>
                        <span class="fel-fal-bar2"></span>
                    </div>
                </div>
            <div class="clearfix"></div>
            </div>
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