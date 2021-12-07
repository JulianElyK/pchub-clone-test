@extends('layouts.main')

@section('container')

<div class="container  mt-3 home">
    <div class="mx-3">   
        <!-- Start Banner Hero -->
        @if (session()->has('lowStock'))
                    <div class="alret alert-danger" role="alert">
                        {{ session('lowStock') }}
                    </div>
        @endif
        @if (session()->has('addCartSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session('addCartSuccess') }}
                    </div>
        @endif
        <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="img/Cooler Master MasterBox 540.png" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <div class="deskripsi">
                                        <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                                        <h3 class="h2">Tiny and Perfect eCommerce Template</h3>
                                        <p>
                                            Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1).
                                            This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website.
                                            Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                            <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                            <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="img/GIGABYTE GEFORCE RTX 3060 8GB.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <div class="deskripsi">
                                        <h1 class="h1">Proident occaecat</h1>
                                        <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                        <p>
                                            You are permitted to use this Zay CSS template for your commercial websites.
                                            You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row p-5">
                            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                                <img class="img-fluid" src="img/HYPERX FURY RGB DDR4 2X8GB.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <div class="deskripsi">
                                        <h1 class="h1">Repr in voluptate</h1>
                                        <h3 class="h2">Ullamco laboris nisi ut </h3>
                                        <p>
                                            We bring you 100% free CSS templates for your websites.
                                            If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <!-- End Banner Hero -->
    </div>
</div>
<div class="main-product">
    <div class="main-prod-content">
        <h2> Our Products</h2>
        <div class="product1">
            <a href="#"><img src="img/RAZER BLADE 15.jpg" alt="" width="80%"/></a>
            <h4>Laptop</h4>
        </div>
        <div class="product1">
            <a href="#"><img src="img/ROG Strix XG35VQ.jpg" alt="" width="80%"/></a>
            <h4>Monitor</h4>
        </div>
        <div class="product1">
            <a href="#"><img src="img/Cooler Master MasterBox 540.png" alt="" width="80%"/></a>
            <h4>&nbsp CPU</h4>
        </div>
        <div class="product1">
            <a href="/custom"><img src="img/rakit_pc.jpg" alt="" width="80%"/></a>
            <h4>&nbsp Build PC</h4>
        </div>
        <div class="product1">
            <a href="#"><img src="img/ROG Centurion.jpg" alt="" width="100%"/></a>
            <h4>Accessories</h4>
        </div>
        <div class="clear"></div>
    </div>
</div>

@endsection
