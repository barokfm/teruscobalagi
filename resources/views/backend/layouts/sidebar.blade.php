<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{('backend/dist/img/logo3.png')}}" alt="AdminLTE Logo" class="brand-image elevation-3">
      <span class="text-light">Bakorwil Pamekasan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{('backend/dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <h5 class="fas fa-book"></h5>
              <p>
                <b>{{ __('Data') }} {{ Auth::user()->name }} </b>
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data peminjam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>


@if (Auth::user()->role == 1 )

          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List Book Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/add_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Book Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/user_list')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User List
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

@endif


@if (Auth::user()->role == 2 )

          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List Book Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::to('/add_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Add Book Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>



@endif



@if (Auth::user()->role == 3 )

          <li class="nav-item">
            <a href="{{URL::to('/list_bookcategory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                List Book Category
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


@endif


<li class="nav-item">
<a class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="nav-icon fas fa-th"></i> Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
