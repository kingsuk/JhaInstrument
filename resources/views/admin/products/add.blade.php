@extends('layouts.admin.master')
@section('scripts')
   
   
    
@stop
@section('content')
  <div class="page home-page">
      <!-- Main Navbar-->
      @include('admin.partials.navbar')
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('admin.partials.sidebar')
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Product</h2>
            </div>
          </header>

          

        @if(session()->has('alart'))
        <div class="alert alert-{{ session()->get('alart') }}">
            {{ session()->get('message') }}
        </div>
        @endif


        
      

          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="row">
            <div class="col-lg-12">
                    <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                        </div>
                        </div>
                        <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Add New Category</h3>
                        </div>
                        <div class="card-body">


                        <form class="form-horizontal" method="POST" action="{{route('admin-create-product')}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Product Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="code" class="form-control" value="{{old('code')}}" required>
                                </div>
                            </div>

                            @if ($errors->has('code'))
                            <div class="alert alert-danger">
                                This Code Needs To Be Unique
                            </div>
                            @endif
                            <div class="line"></div>

                            
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                                </div>
                            </div>
                            <div class="line"></div>


                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" required>{{old('description')}}</textarea> 
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Rating</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="rating" required>{{old('rating')}}</textarea> 
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Status</label>
                                <div class="col-sm-9">
                                    <input type="text" name="status" class="form-control" value="{{old('status')}}" required>
                                </div>
                            </div>
                            <div class="line"></div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Select Category</label>
                                <div class="col-sm-9">
                                    <select name="category_id_fk" class="form-control" required>
                                        <option value="">Please Select</option>
                                        @foreach($categories as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Select Application</label>
                                <div class="col-sm-9">
                                    <select name="application_id_fk" class="form-control" required>
                                        <option value="">Please Select</option>
                                        @foreach($applications as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Upload Data Sheet</label>
                                <div class="col-sm-9">
                                <input type="file" name="data_sheet_url" class="form-control" value="{{old('data_sheet_url')}}"> 
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Image1</label>
                                <div class="col-sm-9">
                                <input type="file" name="image1" class="form-control" value="{{old('image1')}}"> 
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Image2</label>
                                <div class="col-sm-9">
                                <input type="file" name="image2" class="form-control" value="{{old('image2')}}"> 
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Image3</label>
                                <div class="col-sm-9">
                                <input type="file" name="image3" class="form-control" value="{{old('image3')}}"> 
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Image4</label>
                                <div class="col-sm-9">
                                <input type="file" name="image4" class="form-control" value="{{old('image4')}}"> 
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="col-sm-4 offset-sm-3">
                                
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
          </section>
          
               
              </div>
            </div>
          </section>
          @include('admin.partials.footer')
        </div>
      </div>
    </div>
    
@stop