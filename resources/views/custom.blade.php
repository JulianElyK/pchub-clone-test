@extends('layouts.main')
@section('container')
<h1 class="judul">Custom <span style="color:#0b5ed7">PC</span></h1>
<hr class="line">
<script>
    var hargaProduct = 0;
    var hargaTotal = 0;
</script>
<div class="selection">
    <div class="product">
        <div class="category">
            <label for="motherboard">Motherboard:</label>
        </div>
        <div class="item">
            <div class="item-size">
                <select onchange="viewHargaMotherboard(this.value)" id="insertMotherboard"class="form-select ">
                <option selected>--Pilih Motherboard--</option>
                @foreach ($product as $item)
                    @if ($item->category == "Motherboard")
                            <option id="motherboard" value="{{ $item->price }}">{{ $item->name }}</option>
                    @endif
                @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <b id="quantityMotherboard" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpMotherboard()">
                    <input type="button" value="quantityDown" onclick="addDownMotherboard()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaMotherboard" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <select onchange="viewHargaProcessor(this.value)" id="insertProcessor"class="form-select ">
                    <option selected>--Pilih Processor--</option>
                    @foreach ($product as $item)
                        @if ($item->category == "Processor")
                            <option value="{{ $loop->iteration }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <b id="quantityProcessor" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpProcessor()">
                    <input type="button" value="quantityDown" onclick="addDownProcessor()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaProcessor" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <select onchange="viewHargaRam(this.value)" id="insertRam" class="form-select">
                    <option selected>--Pilih RAM--</option>
                    @foreach ($product as $item)
                    @if ($item->category == "RAM")
                        <option id="ram" value="{{ $item->price }}">{{ $item->name }}</option>
                    @endif
                @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <b id="quantityRam" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpRam()">
                    <input type="button" value="quantityDown" onclick="addDownRam()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaRam" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <select onchange="viewHargaVga(this.value)" id="insertVga"class="form-select ">
                    <option selected>--Pilih VGA--</option>
                    @foreach ($product as $item)
                        @if ($item->category == "VGA")
                            <option id="vga" value="{{ $item->price }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
            <b id="quantityVga" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpVga()">
                    <input type="button" value="quantityDown" onclick="addDownVga()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaVga" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
            <select onchange="viewHargaSsd(this.value)" id="insertSsd"class="form-select ">
                    <option selected>--Pilih SSD--</option>
                    @foreach ($product as $item)
                        @if ($item->category == "SSD")
                            <option id="ssd" value="{{ $item->price }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
            <b id="quantitySsd" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpSsd()">
                    <input type="button" value="quantityDown" onclick="addDownSsd()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaSsd" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <select onchange="viewHargaHarddisk(this.value)" id="insertHarddisk"class="form-select ">
                    <option selected>--Pilih Hard Disk--</option>
                    @foreach ($product as $item)
                        @if ($item->category == "Hard Disk")
                            <option id="harddisk" value="{{ $item->price }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <b id="quantityHarddisk" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpHarddisk()">
                    <input type="button" value="quantityDown" onclick="addDownHarddisk()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaHarddisk" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <select onchange="viewHargaKeyboard(this.value)" id="insertKeyboard"class="form-select ">
                    <option selected>--Pilih Keyboard--</option>
                    @foreach ($product as $item)
                        @if ($item->category == "Keyboard")
                            <option id="Keyboard" value="{{ $item->price }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
                <b id="quantityKeyboard" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpKeyboard()">
                    <input type="button" value="quantityDown" onclick="addDownKeyboard()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaKeyboard" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
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
                <select onchange="viewHargaCase(this.value)" id="insertCase"class="form-select ">
                    <option selected>--Pilih Case--</option>
                    @foreach ($product as $item)
                        @if ($item->category == "Case")
                            <option id="Case" value="{{ $item->price }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="quantity">
            <div class="quantity-size">
            <b id="quantityCase" class="banyak" type="number" style="color:white"></b>
                <div>
                    <input type="button" value="quantityUp" onclick="addUpCase()">
                    <input type="button" value="quantityDown" onclick="addDownCase()">
                </div>
            </div>
        </div>
        <div class="price">
            <div class="price-size">
                <p class="borderHarga" >Rp  <span id="hargaCase" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
            </div>
        </div>
    </div>
    <div class="selection">
        <div class="total">
            <label>Total:</label>
            <p class="borderHarga" >Rp  <span id="hargaTotal" class="harga borderHarga" type="number" style="border-right-style: hidden;"></span></p>
            <input type="submit" name="beli" class="btn btn-primary" value="Beli">
        </div>
        <div class="clear"></div>
    </div>
</div>

<script>

    function viewHargaMotherboard(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaMotherboard").innerHTML = hargaProduct;
        document.getElementById("hargaMotherboard").value = hargaProduct;
        document.getElementById("quantityMotherboard").innerHTML = quantityBarang;
        document.getElementById("quantityMotherboard").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaProcessor(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaProcessor").innerHTML = hargaProduct;
        document.getElementById("hargaProcessor").value = hargaProduct;
        document.getElementById("quantityProcessor").innerHTML = quantityBarang;
        document.getElementById("quantityProcessor").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaRam(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaRam").innerHTML = hargaProduct;
        document.getElementById("hargaRam").value = hargaProduct;
        document.getElementById("quantityRam").innerHTML = quantityBarang;
        document.getElementById("quantityRam").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaVga(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaVga").innerHTML = hargaProduct;
        document.getElementById("hargaVga").value = hargaProduct;
        document.getElementById("quantityVga").innerHTML = quantityBarang;
        document.getElementById("quantityVga").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaSsd(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaSsd").innerHTML = hargaProduct;
        document.getElementById("hargaSsd").value = hargaProduct;
        document.getElementById("quantitySsd").innerHTML = quantityBarang;
        document.getElementById("quantitySsd").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaHarddisk(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaHarddisk").innerHTML = hargaProduct;
        document.getElementById("hargaHarddisk").value = hargaProduct;
        document.getElementById("quantityHarddisk").innerHTML = quantityBarang;
        document.getElementById("quantityHarddisk").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaKeyboard(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaKeyboard").innerHTML = hargaProduct;
        document.getElementById("hargaKeyboard").value = hargaProduct;
        document.getElementById("quantityKeyboard").innerHTML = quantityBarang;
        document.getElementById("quantityKeyboard").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    function viewHargaCase(hargaProduct){
        hargaProduct = parseInt(hargaProduct);
        var quantityBarang = 1    
        document.getElementById("hargaCase").innerHTML = hargaProduct;
        document.getElementById("hargaCase").value = hargaProduct;
        document.getElementById("quantityCase").innerHTML = quantityBarang;
        document.getElementById("quantityCase").value = quantityBarang;
        document.getElementById("hargaTotal").innerHTML += hargaProduct;
        document.getElementById("hargaTotal").value += hargaProduct;
	}
    


    function addUpMotherboard(){
        var updateQuantity = document.getElementById("quantityMotherboard").value;
        var updateHarga = document.getElementById("hargaMotherboard").value;
        var updateStatusHarga = document.getElementById("insertMotherboard").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        hargaTotal = parseInt(hargaTotal);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
            document.getElementById("hargaTotal").innerHTML = (hargaTotal+updateHarga);
            document.getElementById("hargaTotal").value = (hargaTotal+updateHarga);
        }
        document.getElementById("quantityMotherboard").innerHTML = updateQuantity;
        document.getElementById("quantityMotherboard").value = updateQuantity;
        document.getElementById("hargaMotherboard").innerHTML = updateHarga;
        document.getElementById("hargaMotherboard").value = updateHarga;
    }
    function addDownMotherboard(){
        var updateQuantity = document.getElementById("quantityMotherboard").value;
        var updateHarga = document.getElementById("hargaMotherboard").value;
        var updateStatusHarga = document.getElementById("insertMotherboard").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
            document.getElementById("hargaTotal").innerHTML -= updateStatusHarga;
            document.getElementById("hargaTotal").value -= updateStatusHarga;
        }
        document.getElementById("quantityMotherboard").innerHTML = updateQuantity;
        document.getElementById("quantityMotherboard").value = updateQuantity;
        document.getElementById("hargaMotherboard").innerHTML = updateHarga;
        document.getElementById("hargaMotherboard").value = updateHarga;
    }


    function addUpProcessor(){
        var updateQuantity = document.getElementById("quantityProcessor").value;
        var updateHarga = document.getElementById("hargaProcessor").value;
        var updateStatusHarga = document.getElementById("insertProcessor").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
            document.getElementById("hargaTotal").innerHTML = (hargaTotal+updateHarga);
            document.getElementById("hargaTotal").value = (hargaTotal+updateHarga);
        }
        document.getElementById("quantityProcessor").innerHTML = updateQuantity;
        document.getElementById("quantityProcessor").value = updateQuantity;
        document.getElementById("hargaProcessor").innerHTML = updateHarga;
        document.getElementById("hargaProcessor").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownProcessor(){
        var updateQuantity = document.getElementById("quantityProcessor").value;
        var updateHarga = document.getElementById("hargaProcessor").value;
        var updateStatusHarga = document.getElementById("insertProcessor").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
            document.getElementById("hargaTotal").innerHTML -= updateStatusHarga;
            document.getElementById("hargaTotal").value -= updateStatusHarga;
        }
        document.getElementById("quantityProcessor").innerHTML = updateQuantity;
        document.getElementById("quantityProcessor").value = updateQuantity;
        document.getElementById("hargaProcessor").innerHTML = updateHarga;
        document.getElementById("hargaProcessor").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }



    function addUpRam(){
        var updateQuantity = document.getElementById("quantityRam").value;
        var updateHarga = document.getElementById("hargaRam").value;
        var updateStatusHarga = document.getElementById("insertRam").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
            document.getElementById("hargaTotal").innerHTML = (hargaTotal+updateHarga);
            document.getElementById("hargaTotal").value = (hargaTotal+updateHarga);
            document.getElementById("hargaTotal").innerHTML -= updateStatusHarga;
            document.getElementById("hargaTotal").value -= updateStatusHarga;
        }
        document.getElementById("quantityRam").innerHTML = updateQuantity;
        document.getElementById("quantityRam").value = updateQuantity;
        document.getElementById("hargaRam").innerHTML = updateHarga;
        document.getElementById("hargaRam").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownRam(){
        var updateQuantity = document.getElementById("quantityRam").value;
        var updateHarga = document.getElementById("hargaRam").value;
        var updateStatusHarga = document.getElementById("insertRam").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
        }
        document.getElementById("quantityRam").innerHTML = updateQuantity;
        document.getElementById("quantityRam").value = updateQuantity;
        document.getElementById("hargaRam").innerHTML = updateHarga;
        document.getElementById("hargaRam").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }


    function addUpVga(){
        var updateQuantity = document.getElementById("quantityVga").value;
        var updateHarga = document.getElementById("hargaVga").value;
        var updateStatusHarga = document.getElementById("insertVga").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
        }
        document.getElementById("quantityVga").innerHTML = updateQuantity;
        document.getElementById("quantityVga").value = updateQuantity;
        document.getElementById("hargaVga").innerHTML = updateHarga;
        document.getElementById("hargaVga").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownVga(){
        var updateQuantity = document.getElementById("quantityVga").value;
        var updateHarga = document.getElementById("hargaVga").value;
        var updateStatusHarga = document.getElementById("insertVga").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
        }
        document.getElementById("quantityVga").innerHTML = updateQuantity;
        document.getElementById("quantityVga").value = updateQuantity;
        document.getElementById("hargaVga").innerHTML = updateHarga;
        document.getElementById("hargaVga").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }


    function addUpSsd(){
        var updateQuantity = document.getElementById("quantitySsd").value;
        var updateHarga = document.getElementById("hargaSsd").value;
        var updateStatusHarga = document.getElementById("insertSsd").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
        }
        document.getElementById("quantitySsd").innerHTML = updateQuantity;
        document.getElementById("quantitySsd").value = updateQuantity;
        document.getElementById("hargaSsd").innerHTML = updateHarga;
        document.getElementById("hargaSsd").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownSsd(){
        var updateQuantity = document.getElementById("quantitySsd").value;
        var updateHarga = document.getElementById("hargaSsd").value;
        var updateStatusHarga = document.getElementById("insertSsd").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
        }
        document.getElementById("quantitySsd").innerHTML = updateQuantity;
        document.getElementById("quantitySsd").value = updateQuantity;
        document.getElementById("hargaSsd").innerHTML = updateHarga;
        document.getElementById("hargaSsd").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }


    function addUpHarddisk(){
        var updateQuantity = document.getElementById("quantityHarddisk").value;
        var updateHarga = document.getElementById("hargaHarddisk").value;
        var updateStatusHarga = document.getElementById("insertHarddisk").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
        }
        document.getElementById("quantityHarddisk").innerHTML = updateQuantity;
        document.getElementById("quantityHarddisk").value = updateQuantity;
        document.getElementById("hargaHarddisk").innerHTML = updateHarga;
        document.getElementById("hargaHarddisk").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownHarddisk(){
        var updateQuantity = document.getElementById("quantityHarddisk").value;
        var updateHarga = document.getElementById("hargaHarddisk").value;
        var updateStatusHarga = document.getElementById("insertHarddisk").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
        }
        document.getElementById("quantityHarddisk").innerHTML = updateQuantity;
        document.getElementById("quantityHarddisk").value = updateQuantity;
        document.getElementById("hargaHarddisk").innerHTML = updateHarga;
        document.getElementById("hargaHarddisk").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }


    function addUpKeyboard(){
        var updateQuantity = document.getElementById("quantityKeyboard").value;
        var updateHarga = document.getElementById("hargaKeyboard").value;
        var updateStatusHarga = document.getElementById("insertKeyboard").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
        }
        document.getElementById("quantityKeyboard").innerHTML = updateQuantity;
        document.getElementById("quantityKeyboard").value = updateQuantity;
        document.getElementById("hargaKeyboard").innerHTML = updateHarga;
        document.getElementById("hargaKeyboard").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownKeyboard(){
        var updateQuantity = document.getElementById("quantityKeyboard").value;
        var updateHarga = document.getElementById("hargaKeyboard").value;
        var updateStatusHarga = document.getElementById("insertKeyboard").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
        }
        document.getElementById("quantityKeyboard").innerHTML = updateQuantity;
        document.getElementById("quantityKeyboard").value = updateQuantity;
        document.getElementById("hargaKeyboard").innerHTML = updateHarga;
        document.getElementById("hargaKeyboard").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }


    function addUpCase(){
        var updateQuantity = document.getElementById("quantityCase").value;
        var updateHarga = document.getElementById("hargaCase").value;
        var updateStatusHarga = document.getElementById("insertCase").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity != null ){
            updateQuantity = updateQuantity + 1;
            updateHarga = updateHarga + updateStatusHarga;
        }
        document.getElementById("quantityCase").innerHTML = updateQuantity;
        document.getElementById("quantityCase").value = updateQuantity;
        document.getElementById("hargaCase").innerHTML = updateHarga;
        document.getElementById("hargaCase").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML += updateHarga;
        document.getElementById("hargaTotal").value += updateHarga;
    }
    function addDownCase(){
        var updateQuantity = document.getElementById("quantityCase").value;
        var updateHarga = document.getElementById("hargaCase").value;
        var updateStatusHarga = document.getElementById("insertCase").value;
        var updateTotalHarga = document.getElementById("hargaTotal").value;
        hargaTotal = parseInt(hargaTotal);
        updateHarga = parseInt(updateHarga);
        updateStatusHarga = parseInt(updateStatusHarga);
        if (updateQuantity > 1 ){
            updateQuantity = updateQuantity - 1;          
            updateHarga = updateHarga - updateStatusHarga;
        }
        document.getElementById("quantityCase").innerHTML = updateQuantity;
        document.getElementById("quantityCase").value = updateQuantity;
        document.getElementById("hargaCase").innerHTML = updateHarga;
        document.getElementById("hargaCase").value = updateHarga;
        document.getElementById("hargaTotal").innerHTML -= updateHarga;
        document.getElementById("hargaTotal").value -= updateHarga;
    }
</script>
@endsection
