<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Tag;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active',1)->get();
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_active',1)->get();
        $tags = Tag::where('is_active',1)->get();
        return view('admin.product.add',compact('categories','tags'));
    }
    public function store(StoreProductRequest $request)
    {
        $title=$request->input('title');
        $description=$request->input('description');
        $price=$request->input('price');
        $category_id=$request->input('category_id');
        $tag_id=$request->input('tags');

        $product = Product::create([
            'title'=>$title,
            'description'=>$description,
            'price'=>$price,
            'category_id'=>$category_id,
        ]);
        $product->tags()->attach($tag_id);
        if($product){
            return to_route('products.index');
        }else{
            return to_route('product.create');
        }
    }
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
