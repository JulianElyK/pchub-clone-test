<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product', ['product' => $product, 'title' => 'Product']);
    }

    public function getAll()
    {
        $product = Product::all();
        return view('custom', ['product' => $product, 'title' => 'Custom Your PC']);
    }

    public function getAllForShow()
    {
        $product = Product::all();
        return view('showproducts', ['product' => $product, 'title' => 'Available Product Stock']);
    }

    public function getByID(Request $request)
    {
        $product = Product::query()->where('id', $request->id)->get();
        return view('editproducts', ['product' => $product, 'title' => 'Search For '.$request->id]);
    }

    public function search(Request $request)
    {
        $product = Product::query()->where('name', 'like', "%{$request->search}%")->get();
        return view('product', ['product' => $product, 'title' => 'Search For '.$request->search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->session()->get('user');
        if($model === "admin"){
            $validateData = $request->validate([
                'name' => 'required',
                'compability' => 'required',
                'price' => 'required',
                'vendor' => 'required',
                'image' => 'image|file|max:3072',
                'category' => 'required',
                'description' => 'required',
                'stock' => 'required'
            ]);
    
            $validateData['image'] = $request->file('image')->store('product-images');
            
            Product::create($validateData);
            
            return redirect()->intended('/')->with('addSuccess', 'Add Product Has Succesfully');
        }
        return redirect()->intended('/')->with('addSuccess', 'Add prdoucts was Error');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!is_numeric($id)){
            return redirect()->intended("/". $id);
        }
        $product = Product::where('id', $id)->first();

        return view('detailproduct', ["title" =>  $product->name , 'product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
