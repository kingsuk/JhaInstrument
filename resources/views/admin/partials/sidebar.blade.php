<nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Mark Stephen</h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="./"><i class="icon-home"></i>Home</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Category </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li> <a href="{{ route('admin-categories') }}"> <i class="icon-grid"></i>See All</a></li>
                <li> <a href="{{route('admin-create-category')}}"> <i class="icon-grid"></i>Add New </a></li>
              </ul>
            </li>

            <li><a href="#applicationdrop" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Applicaton </a>
              <ul id="applicationdrop" class="collapse list-unstyled">
                <li> <a href="{{ route('admin-application') }}"> <i class="icon-grid"></i>See All</a></li>
                <li> <a href="{{route('admin-create-application')}}"> <i class="icon-grid"></i>Add New </a></li>
              </ul>
            </li>

            <li><a href="#productsDrop" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Products </a>
              <ul id="productsDrop" class="collapse list-unstyled">
                <li> <a href="{{ route('admin-products') }}"> <i class="icon-grid"></i>See All</a></li>
                <li> <a href="{{route('admin-create-product')}}"> <i class="icon-grid"></i>Add New </a></li>
              </ul>
            </li>
            
            <li> <a href="tables.html"> <i class="icon-grid"></i>Tables </a></li>
            <li> <a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li> <a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
            <li> <a href="login.html"> <i class="icon-interface-windows"></i>Login Page</a></li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
          </ul>
        </nav>