<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('admin')}}" class="brand-link">
    <img src="{{asset('assets')}}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @auth
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
          <a href="{{route('logout')}}" class="d-block">Logout</a>
        @endauth
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


        <li class="nav-item">
          <a href="{{route('admin_category')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              Kategori
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('admin_products')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              Ürünler
          </a>
        </li>


        <li class="nav-item">
          <a href="{{route('admin_message')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              İletişim Mesajları
          </a>
        </li>


        <li class="nav-item">
          <a href="{{route('admin_faq')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              Sıkça Sorulan Sorular
          </a>
        </li>




        <li class="nav-item has-treeview">
          <a href="" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Siparişler
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{route('admin_orders')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tüm Siparişler</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('admin_order_list',['status'=>'new'])}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Yeni Siparişler</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('admin_order_list',['status'=>'accepted'])}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Kabul Edilen Siparişler</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('admin_order_list',['status'=>'canceled'])}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>İptal Edilen Siparişler</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('admin_order_list',['status'=>'shipping'])}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Kargoda Olan Siparişler</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('admin_order_list',['status'=>'completed'])}}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Tamamlanmış Siparişler</p>
              </a>
            </li>
          </ul>
        </li>





        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="{{route('admin_setting')}}" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Settings</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
