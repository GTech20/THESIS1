<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-10">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
        <!-- Heading -->
      <div class="sidebar-heading">
        Master File
      </div>
        <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="employee.php">
          <i class="fas fa-user"></i>
          <span>Employee</span></a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="client.php">
          <i class="fas fa-users"></i>
          <span>Clients</span></a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="supplier.php">
          <i class="fas fa-users"></i>
          <span>Suppliers</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
        
      <!-- Heading -->
      <div class="sidebar-heading">
        Transactions
      </div>
        
        <!-- Nav Item - Transaction -->
      <li class="nav-item">
        <a class="nav-link" href="sales.php">
          <i class="fas fa-fw fa-barcode"></i>
          <span>Sales</span></a>
      </li>
        
        
        <!-- Nav Item - Transaction -->
      <li class="nav-item">
        <a class="nav-link" href="purchase.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Purchase</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Product Services</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Caters</h6>
            <a class="collapse-item" href="consignee.php">Consignee</a>
            <a class="collapse-item" href="custom.php">Custom Made</a>
            <a class="collapse-item" href="walkins.php">Walkins</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Inventory</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="inventory.raw.php">Raw Materials</a>
            <a class="collapse-item" href="inventory.display.php">Displayed Items</a>
            <a class="collapse-item" href="inventory.custom.php">Custom Made Materials</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Reports
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="sales.report.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Sales</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="production.report.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Production</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->