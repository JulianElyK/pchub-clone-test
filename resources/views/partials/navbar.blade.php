<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="border-bottom: 3px solid #0F52BA;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">PCHub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Product" ) ? 'active' : '' }}" href="product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="custom">Custom PC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "About") ? 'active' : ''  }}" href="about">About</a>
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
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Cart</a></li>
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
