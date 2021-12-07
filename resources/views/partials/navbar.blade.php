<div class="sticky-nav">
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="border-bottom: 3px solid #0F52BA;">
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
                                <a class="nav-link" href="custom">CUSTOM PC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($title === "About") ? 'active' : ''  }}" href="about">ABOUT</a>
                            </li>
                        </ul>
                        <div class="cari">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    @if (Session::get('id') != '')
                        <div class="member">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Session::get('name') }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    @if (Session::get('user') == 'admin')
                                        <li><a class="dropdown-item" href="/addproducts">Add Product</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    <li><a class="dropdown-item" href="/cart">Cart</a></li>
                                    <li><a class="dropdown-item" href="/signout">Logout</a></li>
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