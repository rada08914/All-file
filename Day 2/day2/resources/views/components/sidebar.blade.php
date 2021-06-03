<div class="col-3">
    <div style="height:90vh " class="bg-dark d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4 text-white">PAYROLL</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item"> 
            <a href="/department" class="nav-link @if($active == 'department')active @endif text-white" aria-current="page">
              <i class="fa fa-building"></i>
              Department
            </a>
          </li>
          <li>
            <a href="/employees" class="nav-link @if($active == 'employees')active @endif link-dark text-white ">
              <i class="fa fa-users"></i>
              Employees
            </a>
          </li>
          <li>
            <a href="/loans" class="nav-link @if($active == 'loans')active @endif link-dark text-white">
              <i class="fa fa-money"></i>
              Loans
            </a>
          </li>
          <li>
            <a href="/leaves" class="nav-link @if($active == 'leaves')active @endif link-dark text-white">
              <i class="fa fa-calendar"></i>
              Leaves
            </a>
          </li>
          <li>
            <a href="/deduction" class="nav-link @if($active == 'deduction')active @endif link-dark text-white">
              <i class="fa fa-minus"></i>
              Deduction
            </a>
          </li>
          <li>
            <a href="/timekeeping" class="nav-link @if($active == 'timekeeping')active @endif link-dark text-white">
              <i class="fa fa-hourglass-half"></i>
              TimeKeeping
            </a>
          </li>
          <li>
            <a href="/payslips" class="nav-link @if($active == 'payslips')active @endif link-dark text-white">
              <i class="fa fa-file-text-o u-mr-xsmall"></i>
              Payslips
            </a>
          </li>
          <li>
            <a href="/settings" class="nav-link @if($active == 'settings')active @endif link-dark text-white">
              <i class="fa fa-cogs"></i>
              Settings
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