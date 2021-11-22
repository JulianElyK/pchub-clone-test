@extends('layouts.main')

@section('container')

<section id="slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/Cooler Master MasterBox 540.png" class="girl img-responsive" alt="" />
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/GIGABYTE GEFORCE RTX 3060 8GB.jpg" class="girl img-responsive" alt="" />
                                
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOPPER</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="img/HYPERX FURY RGB DDR4 2X8GB.jpg" class="girl img-responsive" alt="" />
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->

<section id="slider" style="background-color:white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel-2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel-2" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel-2" data-slide-to="1"></li>
                    </ol>
                    
                    <h1>Our Products</h1>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <img src="img/Cooler Master MasterBox 540.png" class="girl img-responsive" alt="" />
                                <img src="img/GIGABYTE GEFORCE RTX 3060 8GB.jpg" class="girl img-responsive" alt="" />
                                <img src="img/HYPERX FURY RGB DDR4 2X8GB.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="col-sm-6">
                                <img src="img/MASTERLIQUID ML240L.jpg" class="girl img-responsive" alt="" />
                                <img src="img/RAZER BLADE 15.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                    </div>
                    
                    <a href="#slider-carousel-2" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel-2" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section><!--/slider-->

@endsection