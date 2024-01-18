<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="../../../../public/dashbbord/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../../../../public/dashbbord/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin')}}" >
          <span class="menu-icon">
            <i class="mdi mdi-home"></i>
          </span>
          <span class="menu-title">dashboard</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic-categories" aria-expanded="false" aria-controls="ui-basic-categories">
          <span class="menu-icon">
            <i class="mdi mdi-folder"></i>
          </span>
          <span class="menu-title">Product Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-categories">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">transaction</a></li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic-Products" aria-expanded="false" aria-controls="ui-basic-Products">
          <span class="menu-icon">
            <i class="mdi mdi-store"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-Products">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Product</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic-orders" aria-expanded="false" aria-controls="ui-basic-orders">
          <span class="menu-icon">
            <i class="fa fa-shopping-cart"></i>
          </span>
          <span class="menu-title">orders</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-orders">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">orders</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">transaction</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic-Website-members" aria-expanded="false" aria-controls="ui-basic-Website-members">
          <span class="menu-icon">
            <i class="fa fa-users"></i>
          </span>
          <span class="menu-title">Website members</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-Website-members">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Administrators</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Subscribers</a></li>
          </ul>
        </div>
      </li>
      
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('dashbord.settings.index')}}">
          <span class="menu-icon">
            <i class="mdi mdi-settings"></i>
          </span>
          <span class="menu-title">Settings</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-icon">
            <i class="mdi mdi-logout"></i>
          </span>
          <span class="menu-title">Log out</span>
        </a>
      </li>
   
      <li class="nav-item menu-items">
        <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>