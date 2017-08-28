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


<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Product</li>
                </ol>
            </div>
        </div>
        <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div class="flexslider">
                          <ul class="slides">
                            <li data-thumb="{{$product->image1}}">
                                <div class="thumb-image"> <img src="{{$product->image1}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{$product->image2}}">
                                 <div class="thumb-image"> <img src="{{$product->image2}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{$product->image3}}">
                               <div class="thumb-image"> <img src="{{$product->image3}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                            <li data-thumb="{{$product->image4}}">
                               <div class="thumb-image"> <img src="{{$product->image4}}" data-imagezoom="true" class="img-responsive"> </div>
                            </li>
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 showcase">
                    <div class="showcase-rt-top">
                        <div class="pull-left shoe-name">
                            <h3>{{$product->name}}</h3>
                            <p>Code:  <kbd>{{$product->code}}</kbd></p>
                            <h4>{{$product->status}}</h4>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="shocase-rt-bot">
                        <div class="float-qty-chart">
                        
                        <div class="clearfix"></div>
                        </div>
                        <ul>
                            <li class="ad-2-crt simpleCart_shelfItem">
                                <a class="btn" href="#" role="button">Show Interest</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="featurette-divider">
                    
                   
                    <div class="showcase-last">
                        <h3>product details</h3>
                        <ul>
                            <li>{{$product->description}}</li>
                        </ul>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="specifications">
            <div class="container">
              <h3>Item Details</h3> 
                <div class="detai-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills tab-nike" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Rating</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Data Sheet</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                    <p>{{$product->rating}}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                    <p>Click on the download button to download the Data Sheet PDF:<p>
                    
                    <a href="{{$product->data_sheet_url}}" download>
                      <button class="btn btn-lg btn-info">Download</button>
                    </a>                    
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
@endsection