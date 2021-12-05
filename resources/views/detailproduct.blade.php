@extends('layouts.main')

@section('container')
{{-- detail produk (/detail). css di custom.style.css --}}
<style>
    <?php include "css/custom.style.css" ?>
    <?php include "css/zay/bootstrap.min.css" ?>
</style>

<div class="header-product">
    <div class="img-product">
        <img src="{{ asset('storage/'. $product->image) }}" alt="">
    </div>
    <div class="info-product">
        <h3>{{ $product->name }}</h3>
        <div class="konten">
            <label>Price</label>
            <div>{{ $product->price }}</div>
        </div>
        <div class="konten">
            <label>Color</label>
            <div>Black</div>
        </div>
        <div class="konten">
            <label>Stock</label>
            <div>20</div>
        </div>
        <div class="konten">
            <label>Est.Weight</label>
            <div>4Kg</div>
        </div>
        <div class="konten">
            <label>Warranty</label>
            <div>1 Year Distributor Warranty</div>
        </div>
        <div class="konten-quantity">
            <div class="konten-quantity-size">
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="konten-beli">
            <input type="submit" name="beli" class="btn btn-primary" value="Beli">
        </div>
    </div>
    <div class="desc-product">
        <label>Deskripsi</label>
        <div>
            <ul>
                <li>Processor Quad-Core 10th Gen Intel® Core™ i7-1065G7 Processor with Hyper Threading 1.3 GHz / 3.9 GHz (Base/Turbo)</li>
                <li>OS Windows® 10 Home (64-bit)</li>
                <li>Graphics NVIDIA® GeForce® GTX 1650 4GB GDDR5 VRAM with Max-Q Design</li>
                <li>Storage 512GB PCIe M.2</li>
                <li>Memory 16GB LPDDR4 3733MHz dual-channel onboard memory (Fixed)</li>
                <li>Battery 53.1Wh</li>
                <li>Keyboard with Razer Chroma™ single-zone full key backlighting and anti-ghosting technology</li>
                <li>Touchpad</li>
                <li>Glass touchpad (Microsoft Precision)</li>
                <li>Wi-Fi 6 - Intel® Wireless-AX 201 (IEEE 802.11a/b/g/n/ac), Bluetooth® 5.0 connectivity</li>
                <li>Thunderbolt™ 3 (USB-C™), power port, 4 lanes of PCI Express</li>
                <li>USB-C 3.1 Gen 2, power port</li>
                <li>2x Type-A USB 3.1</li>
                <li>Web Camera : HD 720p, Windows Hello compliant infrared camera</li>
            </ul>
        </div>
    </div>
</div>


@endsection
