 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cocosmile Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ Route::currentRouteName() === 'home'  ? 'active' : null }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        คำปรึกษา
      </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item {{ Route::currentRouteName() === 'counsel.index'  ? 'active' : null }}">
        <a class="nav-link" href="{{ route('counsel.index') }}">
          <i class="fas fa-envelope"></i>
          <span>Email</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        หน้าเว็บ
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ Route::currentRouteName() === 'welcome.index'||Route::currentRouteName() === 'our-product.index'? 'active' : null }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>จัดการเว็บไซด์</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Route::currentRouteName() === 'welcome.index'||Route::currentRouteName() === 'our-product.index' ? 'show' : null }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ส่วนต่างๆ:</h6>
            <a class="collapse-item {{ Route::currentRouteName() === 'welcome.index'  ? 'active' : null }}" href="{{ route('welcome.index') }}">หน้าหลัก</a>
            <a class="collapse-item {{ Route::currentRouteName() === 'our-product.index'  ? 'active' : null }}" href="{{ route('our-product.index') }}">Our Product</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Contact Us
      </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item {{ Route::currentRouteName() === 'contact-us.index'  ? 'active' : null }}">
        <a class="nav-link" href="{{ route('contact-us.index') }}">
          <i class="fas fa-id-card"></i>
          <span>ติดต่อเรา</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Products
      </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item {{ Route::currentRouteName() === 'product.index'||Route::currentRouteName() === 'product.create'||Route::currentRouteName() === 'product.store'||Route::currentRouteName() === 'product.edit'||Route::currentRouteName() === 'product.update'||Route::currentRouteName() === 'product.delete-one'||Route::currentRouteName() === 'product.delete-two'? 'active' : null }}">
        <a class="nav-link" href="{{ route('product.index') }}">
          <i class="fab fa-product-hunt"></i>
          <span>สินค้า</span></a>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Logistic & Order
      </div>
      <!-- Nav Item - Tables -->
      <li class="nav-item {{ Route::currentRouteName() === 'logistic-order.index'? 'active' : null }}">
        <a class="nav-link" href="{{ route('logistic-order.index') }}">
          <i class="fas fa-truck"></i>
          <span>Logistic & Order</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
