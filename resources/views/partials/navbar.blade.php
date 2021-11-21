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
                            <a class="nav-link {{ ($title === "Home" ) ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="custom">Custom PC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($title === "Custome") ? 'active' : ''  }}" href="#">Custome PC</a>
                        </li>
                    </ul>
                    <div class="cari">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    @if (Session::get('id') != '')
                        <div class="dropdown">
                            <a class="btn btn-secondary btn-sml dropdown-toggle" href="/signout" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Session::get('name') }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                            <li><a class="dropdown-item" href="#">My Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
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
