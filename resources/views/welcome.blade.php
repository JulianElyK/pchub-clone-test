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
        @if (session()->has('paymentSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session('paymentSuccess') }}
                    </div>
        @endif
        @if (session()->has('EditProductSuccess'))
                    <div class="alert alert-success" role="alert">
                        {{ session('EditProductSuccess') }}
                    </div>
        @endif
        @if (session()->has('EditProductError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('EditProductError') }}
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
                                <div class="img-container">
                                    <img class="img-fluid" src="img/Cooler Master MasterBox 540.png" alt="MasterBox 540">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left align-self-center">
                                    <div class="deskripsi">
                                        <h1 class="h1">NEW RELEASE</h1>
                                        <h1 style="font-size:2.5rem;">Cooler Master MasterBox 540</h1>
                                        <p>A vivid, iridescent design spans the entire front panel of the MasterBox 540. Customizable ARGB strips radiate behind the transparent facade for a stunning display of light.<br>
                                        The ARGB strips can be set to match the colour scheme of the system inside with an included controller, and will also sync to the motherboard for a limitless potential for customization.
                                        </p>
                                        <a href="/product/4" class="btn btn-primary" style="float:right;">Shop Now</a>
                                        <div class="clear"></div>
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
                                <div class="img-container">
                                    <img class="img-fluid" src="img/GIGABYTE GEFORCE RTX 3060 8GB.png" alt="RTX 3060">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <div class="deskripsi">
                                        <h1 class="h1">NEW RELEASE</h1>
                                        <h1 style="font-size:2.5rem;">GIGABYTE GEFORCE RTX 3060 8GB</h1>
                                        <p>
                                        The RTX 3060 lets you play the latest games using the power of Ampere, NVIDIAs 2nd generation RTX architecture.
                                        The WINDFORCE 3X cooling system features 3x 80mm unique blade fans, alternate spinning, 3 composite copper heat pipes direct touch GPU, 3D active fan and Screen cooling, which together provide high efficiency heat dissipation.
                                        </p>
                                        <a href="/product/3" class="btn btn-primary" style="float:right;">Shop Now</a>
                                        <div class="clear"></div>
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
                                <div class="img-container">
                                    <img class="img-fluid" src="img/HYPERX FURY RGB DDR4 2X8GB.png" alt="HyperX Fury">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-0 d-flex align-items-center">
                                <div class="text-align-left">
                                    <div class="deskripsi">
                                        <h1 class="h1">NEW RELEASE</h1>
                                        <h1 style="font-size:2.5rem;">HYPERX FURY RGB DDR4 2X8GB</h1>
                                        <p>
                                        HyperX Fury Beast KF432C16BBAK2/16 is a kit of two 1G x 64-bit (8GB) DDR4-3200 CL16 SDRAM (Synchronous DRAM) 1Rx8.
                                        HyperX FURY DDR4 RGB memberikan peningkatan kinerja dan gaya dengan kecepatan hingga 3466MHz, gaya agresif, dan pencahayaan RGB yang menjalankan modul untuk efek pencahayaan yang halus dan menakjubkan.
                                        </p>
                                        <a href="/product/5" class="btn btn-primary" style="float:right;">Shop Now</a>
                                        <div class="clear"></div>
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
            <a href="/search/{{ 'laptop' }}"><img src="img/RAZER BLADE 15.jpg" alt="Razer Blade 15" width="80%"/></a>
            <h4>Laptop</h4>
        </div>
        <div class="product1">
            <a href="/search/{{ 'monitor' }}"><img src="img/ROG Strix XG35VQ.jpg" alt="ROG Strix XG35VQ" width="80%"/></a>
            <h4>Monitor</h4>
        </div>
        <div class="product1">
            <a href="/search/{{ 'case' }}"><img src="img/Cooler Master MasterBox 540.png" alt="MasterBox 540" width="80%"/></a>
            <h4>&nbsp Case</h4>
        </div>
        <div class="product1">
            <a href="/custom"><img src="img/rakit_pc.jpg" alt="Rakit PC" width="80%"/></a>
            <h4>&nbsp Build PC</h4>
        </div>
        <div class="product1">
            <a href="/search/{{ 'accessories' }}"><img src="img/ROG Centurion.jpg" alt="ROG Centurion" width="107%"/></a>
            <h4>Accessories</h4>
        </div>
        <div class="clear"></div>
    </div>
</div>

@endsection
