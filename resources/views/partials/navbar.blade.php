<div class="sticky-nav">
    <div class="container-header">
        <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="border-bottom: 1px solid #0F52BA;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><img src="img/pchub_logo.png" width="120" alt="PCHub Logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ ($title === "Product" ) ? 'active' : '' }}" href="product">PRODUCT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($title === "Custom Your PC" ) ? 'active' : '' }}" href="custom">CUSTOM PC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($title === "About") ? 'active' : ''  }}" href="about">ABOUT</a>
                            </li>
                        </ul>
                        <div class="cari">
                            <form class="d-flex" action="/search" method="POST">
                                @csrf
                                {{-- <input id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" > --}}
                                <input type="search" class="form-control me-2" placeholder ="Search" id="search" name="search">
                                <button class="btn btn-outline-success" type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    @if (Session::get('id') != '')
                        <div class="member">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Session::get('name') }}
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-custom" aria-labelledby="dropdownMenu2">

                                    @if (Session::get('user') == 'admin')
                                        <li><a class="dropdown-item" href="/addproducts"><i class="fal fa-plus-circle"></i> <span class="li-words">Add Product</span></a></li>
                                        <li><a class="dropdown-item" href="/showproducts"><i class="fal fa-eye"></i> <span class="li-words">Show Product</span></a></li>
                                        <li><a class="dropdown-item" href="/shipment"><i class="fal fa-shipping-timed"></i> Shipment</a></li>
                                        <li><a class="dropdown-item" href="/searchID"><i class="fal fa-edit"></i> <span class="li-words">Edit & Restock Product</span></a></li>
                                    @else
                                        <li><a class="dropdown-item" href="/cart"><i class="fal fa-shopping-cart"></i> Cart</a></li>
                                        <li><a class="dropdown-item" href="/pesanan"><i class="fal fa-desktop"></i> Order</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="/profile"><i class="fal fa-user-circle"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="/signout"><i class="fal fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="register">
                            <a href="signin"><button class="btn btn-primary">Sign In</button></a>
                        </div>
                    @endif
                    </div>
                </div>
            </nav>
        </header>
    </div>
</div>
