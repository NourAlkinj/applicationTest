<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        return view('product');
    }


    public function create()
    {

    }


    public function store(StoreProductRequest $request)
    {
        $id = $this->generateModelID(Product::class);
        Product::create($request->all());
//        $parameters = ['request' => $request, 'id' => $id];
//        $this->callActivityMethod('products', 'store', $parameters);
        return redirect()->route('product.index')->with(
            ['message' => __('common.store'), 'type' => 'Success']);
    }


    public function show( $id)
    {
//        $parameters = ['id' => $id];
          $product = Product::find($id);
//          $this->callActivityMethod('products', 'show', $parameters);
          return $product;

    }


    public function edit(Product $product)
    {
        //
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function delete( $id)
    {
//        $parameters = ['id' => $id];
        $product = Product::find($id);
        $product->delete();
//        $this->callActivityMethod('products', 'delete', $parameters);
        return redirect()->route('product.index')->with(['message' => __('common.delete'), 'type' => 'Success',]);

    }
}
