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
              <h2 class="no-margin-bottom">Categoties</h2>
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
                        <h3 class="h4">Edit Category</h3>
                        </div>
                        <div class="card-body">


                        <form class="form-horizontal" method="POST" action="{{route('admin-edit-categories-post')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$id}}"
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value={{$name}} required>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description" required>{{$description}}</textarea> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Image</label>
                                <div class="col-sm-9">
                                <img src="{{$image1}}" style='width:100%;' border="0" alt="Null"/> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Image</label>
                                <div class="col-sm-9">
                                <input type="file" name="image1" class="form-control" required> 
                                </div>
                            </div>
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