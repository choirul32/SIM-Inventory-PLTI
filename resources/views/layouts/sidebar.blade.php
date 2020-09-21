<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel ">
          <li class="text-center ">
            <img src="{{ asset('logo.png') }}" class="user-image img-responsive"/>
          </li>
        </div>

        

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><br><br></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="nav-link {{ request()->is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="nav-link {{ request()->is('user*') ? 'active' : '' }}"><a href="{{ route('user.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
            <li class="nav-link {{ request()->is('categories*') ? 'active' : '' }}"><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i> <span>Kategori</span></a></li>
            <li class="nav-link {{ request()->is('products') ? 'active' : '' }}"><a href="{{ route('products.index') }}"><i class="fa fa-cubes"></i> <span>Product</span></a></li>
            <li class="nav-link {{ request()->is('productsOut*') ? 'active' : '' }}"><a href="{{ route('productsOut.index') }}"><i class="fa fa-minus"></i> <span>Product Keluar</span></a></li>

            <li class="nav-link {{ request()->is('productsIn*') ? 'active' : '' }}"><a href="{{ route('productsIn.index') }}"><i class="fa fa-plus"></i> <span>Product Masuk</span></a></li>








        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    
</aside>
