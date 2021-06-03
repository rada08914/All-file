<div class="col-3">
    <div style="height:90vh " class="bg-dark d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4 text-white">INVENTORY</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item"> 
            <a href="/products" class="nav-link @if($active == 'products')active @endif text-white" aria-current="page">
              <i class="fa fa-list"></i>
              Products
            </a>
          </li>
          <li>
            <a href="/categories" class="nav-link @if($active == 'categories')active @endif link-dark text-white">
              <i class="fa fa-object-group"></i>
              Categories
            </a>
          </li>
          <li>
            <a href="/orders" class="nav-link @if($active == 'orders')active @endif link-dark text-white">
              <i class="fa fa-cart-plus"></i>
              Orders
            </a>
          </li>
          <li>
            <a href="/customers" class="nav-link @if($active == 'customers')active @endif link-dark text-white">
           <i class="fa fa-users"></i>
              Customers 
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
  </div>