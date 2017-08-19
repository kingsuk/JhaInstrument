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
              <h2 class="no-margin-bottom">All Applications</h2>
            </div>
          </header>

       


        @if(session()->has('alart'))
        <div class="alert alert-{{ session()->get('alart') }}">
            {{ session()->get('message') }}
        </div>
        @endif

        

        <br>
      @for($i=0;$i<count($data);$i=$i+2)
      
        
       
        <div class="row">
        
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown show">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: block;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                        <a href="{{route('admin-edit-application',$data[$i]->id)}}" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                        <a href="{{route('admin-delete-application',$data[$i]->id)}}" onclick="return confirm('Are you sure?')" class="dropdown-item edit"> <i class="fa fa-gear"></i>Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">{{$data[$i]->name}}</h3>
                    </div>
                    <div class="card-body text-center">
                      
                        <img src="{{$data[$i]->image1}}" style='width:100%;' border="0" alt="Null"/>
                        <div class="client-title">
                        <h3>Name</h3>
                        <span>{{$data[$i]->description}}</span>
                      </div>

                    </div>
                  </div>
                </div>
                @if($i+1<count($data))
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown show">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow" style="display: block;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                        <a href="{{route('admin-edit-application',$data[$i+1]->id)}}" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                        <a href="{{route('admin-delete-application',$data[$i+1]->id)}}" onclick="return confirm('Are you sure?')" class="dropdown-item edit"> <i class="fa fa-gear"></i>Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">{{$data[$i+1]->name}}</h3>
                    </div>
                    <div class="card-body text-center">
                      
                        <img src="{{$data[$i+1]->image1}}" style='width:100%;' border="0" alt="Null"/>
                        <div class="client-title">
                        <h3>Name</h3>
                        <span>{{$data[$i+1]->description}}</span>
                      </div>

                    </div>
                  </div>
                </div>
                @endif
        
          </div>
         
      @endfor
      {{ $data->links() }}
      
         
          
               
              </div>
            </div>
          </section>
          @include('admin.partials.footer')
        </div>
      </div>
    </div>
    
@stop