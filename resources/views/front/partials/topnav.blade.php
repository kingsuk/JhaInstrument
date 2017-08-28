
<div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{route('/')}}">Jha Instrument</a>
                    </div>
                    <div class="login-bars">
                        <a class="btn btn-default log-bar" href="register.html" role="button">About Us</a>
                        <a class="btn btn-default log-bar" href="register.html" role="button">Contact Us</a>
                        
                        <!-- <div class="cart box_1">
                            <a href="checkout.html">
                            <h3>
                                <div class="total">
<span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                            <div class="clearfix"> </div>
                        </div>	 -->
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav nav-font">
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-4 menu-img-pad">
                                                <ul class="multi-column-dropdown">
                                                    @foreach (menuCategory() as $item)
                                                    <li><a href="{{route('view-product-by-category-id',$item->id)}}">{{$item->name}}</a></li>
                                                    
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @foreach (menuCategory() as $item)
                                            <div class="col-sm-4 menu-img-pad">
                                                <a href="{{route('view-product-by-category-id',$item->id)}}"><img src="{{$item->image1}}" alt="/" class="img-rsponsive men-img-wid" /></a>
                                                <h4><a href="{{route('view-product-by-category-id',$item->id)}}">{{$item->name}}</a><h4>
                                            </div>
                                            
                                            @endforeach
                                            
                                        </div>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applications<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-4 menu-img-pad">
                                                <ul class="multi-column-dropdown">
                                                    @foreach (menuApplication() as $item)
                                                    <li><a href="{{route('view-product-by-application-id',$item->id)}}">{{$item->name}}</a></li>
                                                    
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @foreach (menuApplication() as $item)
                                            <div class="col-sm-4 menu-img-pad">
                                                <a href="{{route('view-product-by-application-id',$item->id)}}"><img src="{{$item->image1}}" alt="/" class="img-rsponsive men-img-wid" /></a>
                                                <h4><a href="{{route('view-product-by-application-id',$item->id)}}">{{$item->name}}</a><h4>
                                            </div>
                                            
                                            @endforeach
                                            
                                        </div>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-4 menu-img-pad">
                                                <ul class="multi-column-dropdown">
                                                    @foreach (menuProduct() as $item)
                                                    <li><a href="{{route('view-product-by-id',$item->id)}}">{{$item->name}}</a></li>
                                                    
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @foreach (menuProduct() as $item)
                                            <div class="col-sm-4 menu-img-pad">
                                                <a href="{{route('view-product-by-id',$item->id)}}"><img src="{{$item->image1}}" alt="/" class="img-rsponsive men-img-wid" /></a>
                                                <h4><a href="{{route('view-product-by-id',$item->id)}}">{{$item->name}}</a><h4>
                                            </div>
                                            
                                            @endforeach
                                            
                                        </div>
                                    </ul>
                                </li>
                                
                                
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>