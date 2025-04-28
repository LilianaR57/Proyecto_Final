  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @if(Auth::user()->photo == '')
                <img src="{{ url('storage/users/mujer.jpg') }}" class="user-image" alt="User Image">
          @else
                <img src="{{ url('storage/users/'.Auth::user()->photo) }}" class="user-image" alt="User Image">
          @endif
              
          



        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li >
          <a href="{{ route('start') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>
        <li><a href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i> <span>Registrar Usuario</span></a></li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>

        <li >
          <a href="{{ url('branches') }}">
            <i class="fa fa-map-marker"></i> <span>Sucursales</span>
          </a>
        </li>
        <li >
          <a href="{{ url('categories') }}">
            <i class="fa fa-list-ol" ></i> <span>Categorias</span>
          </a>
        </li>
        <li >
          <a href="{{ url('products') }}">
            <i class="fa fa-product-hunt"></i> <span>Productos</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
