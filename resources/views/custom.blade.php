@extends('layouts.main')
@section('container')
<h1 class="judul">Custom <span style="color:#0b5ed7">PC</span></h1>
<hr class="line">
<div class="selection">
    <div class="product">
        <div class="category">
            <label for="motherboard">Motherboard:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select onchange="viewHarga()" id="inputangkat"class="form-select ">
                    <option selected>--Pilih Motherboard--</option>
                    <option value="1" >One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <p id="quantity" class="banyak" type="number"></p>
                <div>
                    <input type="button" value="quantityUp" onclick="addUp()">
                    <input type="button" value="quantityDown" onclick="addDown()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <input class="banyak" type="number" min="1">
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="harga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
            </div>
        </div>
    </div>
    <div class="selection">
        <div class="total">
            <label>Total:</label>
            <p class="borderHarga" >Rp  <span id="hargaTotal" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
            <input type="submit" name="beli" class="btn btn-primary" value="Beli">
        </div>
    </div>
</div>

<script>
    function viewHarga(){
        var hargaClick = document.getElementById("inputangkat").value;
        var hargaProduct = 0;
        var quantityBarang = 1
        if (hargaClick == 1){
            hargaProduct = 10000;
        }
        document.getElementById("harga").innerHTML = hargaProduct;
        document.getElementById("quantity").innerHTML = quantityBarang;
        document.getElementById("quantity").value = quantityBarang;
	}

    function addUp(){
        var updateQuantity = document.getElementById("quantity").value;
        var updateHarga = document.getElementById("harga").value;
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateHarga;
        }
        document.getElementById("quantity").innerHTML = updateQuantity;
        document.getElementById("quantity").value = updateQuantity;
        document.getElementById("harga").innerHTML = updateQuantity;
    }

    function addDown(){
        var updateQuantity = document.getElementById("quantity").value;
        var updateHarga = document.getElementById("harga").value;
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;
            updateHarga = updateHarga - updateHarga;
        }
        document.getElementById("quantity").innerHTML = updateQuantity;
        document.getElementById("quantity").value = updateQuantity;
        document.getElementById("harga").innerHTML = updateQuantity;
    }

</script>
  @endsection
