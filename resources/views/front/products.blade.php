@extends('layouts.front.master')

@section('scripts')
     <!-- FlexSlider -->
     <script src="{{asset('web/js/imagezoom.js')}}"></script>
              <script defer src="{{asset('web/js/jquery.flexslider.js')}}"></script>
            <link rel="stylesheet" href="{{asset('web/css/flexslider.css')}}" type="text/css" media="screen" />

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->

@endsection

@section('content')

<div class="products-gallery">
           <div class="container">
               <div class="grid-gallery">

               @foreach($items as $value)
               
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
                        {{ $items->links() }}
                    </div>
                </div>
        </div>

@endsection