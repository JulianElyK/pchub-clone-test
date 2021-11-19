@extends('layouts.main')
@section('container')
<h1>Custom PC</h1>
<hr class="line">
<div class="selection">
    <div class="product">
        <div class="category">
            <label for="motherboard">Motherboard:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih Motherboard--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="processor">Processor:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih Processor--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="ram">RAM:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih RAM--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="vga">VGA:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih VGA--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="SSD">SSD:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih SSD--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="hard-disk">Hard Disk:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih Hard Disk--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="keyboard">Keyboard:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih Keyboard--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
</div>

<div class="selection">
    <div class="product">
        <div class="category">
            <label for="case">Case:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select class="form-select">
                    <option selected>--Pilih Case--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <input class="banyak" type=number>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <input class="harga" type=number>
            </div>
        </div>
    </div>
    <div class="selection">
        <div class="total">
            <label>Total:</label>
            <input type="submit" name="beli" class="btn btn-primary" value="Beli">
        </div>
    </div>
</div>

  @endsection