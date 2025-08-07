<div class=" gray">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 hide-ipad">
            </div>

        </div>
    </div>
</div> 
@section('css')
        <style>
     /* Hover dropdown */
.dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 0;
}

/* Transparent dropdown background */
.dropdown-menu {
  background-color: transparent;
  border: none;
  box-shadow: none;
}

/* Transparent dropdown item */
.dropdown-item {
  background-color: transparent !important;
  color: #000;
}
.dropdown-item:hover {
  background-color: rgba(0, 0, 0, 0.05);
}

/* Transparent toggle button */
.dropdown-toggle.btn {
  background-color: transparent !important;
  border: none !important;
  color: white;
  box-shadow: none !important;
  font-size: 1.1rem;
  font-weight: 500;
}


/* Optional button style */
.btn-outline-light {
  color: skyblue;
  border-color: skyblue;
}



        </style>
@endsection

<div class="nav-menus-wrapper d-flex justify-content-between align-items-center px-5"
     style="background-color: midnightblue; height: 100px;">

    <!-- Left-aligned Logo -->
    <a class="navbar-brand" href="{{ route('web.home') }}">
        <img src="{{ asset('logo.png') }}" alt="Logo" class="img-fluid"
             style="height: 60px; width: auto; margin-right: 20px;">
    </a>

    <!-- Centered Nav Menu -->
    <ul class="nav-menu d-flex gap-4 list-unstyled mb-0 align-items-center mx-auto">

        <!-- Service Dropdown -->
        <li class="nav-item dropdown">
            <button class="btn btn-sm text-white dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" 
                    style="background: transparent; border: none; font-size: 1.5rem;">
                Service
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </li>

        <!-- Industry Dropdown -->
        <li class="nav-item dropdown">
            <button class="btn btn-sm text-white dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="background: transparent; border: none; font-size: 1.5rem;">
                Industry
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </li>

        <!-- Products Dropdown -->
        <li class="nav-item dropdown">
            <button class="btn btn-sm text-white dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="background: transparent; border: none; font-size: 1.5rem;">
                Products
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </li>

        <!-- Resources Dropdown -->
        <li class="nav-item dropdown">
            <button class="btn btn-sm text-white dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="background: transparent; border: none; font-size: 1.5rem;">
                Resources
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </li>

        <!-- Global Offices Dropdown -->
        <li class="nav-item dropdown">
            <button class="btn btn-sm text-white dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="background: transparent; border: none; font-size: 1.5rem;">
                Global Offices
            </button>
            <ul class="dropdown-menu">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </li>
    </ul>

    <!-- Right-aligned Button -->
    <button class="btn px-4 py-3"
        style="font-size: 1rem; border-radius: 25px; background-color: skyblue; color: white; border: none;">
        Schedule a call
    </button>
</div>

<!-- Offcanvas for mobile view -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mainOffcanvas" aria-labelledby="mainOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mainOffcanvasLabel">Navigation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column nav-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web.home') }}">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-address-card"></i> About Us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-address-book"></i> Contact
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End Navigation -->
<div class="clearfix"></div>