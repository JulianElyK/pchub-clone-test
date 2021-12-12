<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    {{-- css --}}
    <link rel="stylesheet" href="/css/bootstrap5.css">
    <link rel="stylesheet" href="/css/signin.style.css">
    <link rel="stylesheet" href="/css/custom.style.css">
	<link rel="stylesheet" href="/css/zay/bootstrap.min.css">
	<link rel="stylesheet" href="/css/zay/custom.css">
	<link rel="stylesheet" href="/css/zay/fontawesome.css">
	<link rel="stylesheet" href="/css/zay/fontawesome.min.css">
	<link rel="stylesheet" href="/css/zay/slick.min.css">
    @yield('style')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{-- js --}}
    <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.scrollUp.min.js"></script>
	<script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/templatemo.js"></script>
    <script src="/js/templatemo.min.js"></script>


</head>

    @if($title == "PCHub" || $title == "About")
        <body style="background-color: #000">
    @else
        <body style="background-color: #fff">
    @endif

    @include('partials.navbar')
    
    <div class="container-main-content">
        @yield('container')
    </div>
    
    @include('partials.footer')
    
</body>
</html>
