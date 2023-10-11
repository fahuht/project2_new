<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //lay dl tu bang products
        $products = Product::with('category')->get();
        //tra lai view
        return view('Product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //lay brand truyen theo
        $categories = Category::all();
        // goi view tra ve form them
        return view('Product.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *  * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $image_name = $request->file('image')-> getClientOriginalName();
        if(!Storage::exists('public/Admin/'.$image_name)){
            Storage::putFileAs('public/Admin/', $request->file('image'), $image_name);
        }
//        dd($request->all());
        $array = [];
        $array =Arr::add($array, 'name', $request->name);
        $array =Arr::add($array, 'price', $request->price);
        $array = Arr::add($array, 'cate_id', $request->cate_id);
        $array = Arr::add($array, 'image', $image_name);
//        dd($array);
        //lay dl tu form va luu len db
        Product::create($array);
        //quay lai danh sach
        return Redirect::route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //lay tat ca cac brand
        $categories = Category::all();
        //goi den viw dẻ sua
        return view('Product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     * * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {

        //lấy tên ảnh đang đc chọn
        if($request -> file('image') != null){
            $image_name = $request->file('image')->getClientOriginalName();
        }else{
            $image_name = $product->image;
        }
        $image_name = $request->file('image')-> getClientOriginalName();
        if(!Storage::exists('public/Admin/'.$image_name)){
            Storage::putFileAs('public/Admin/', $request->file('image'), $image_name);
        }
//        dd($request->all());
        $array = [];
        $array =Arr::add($array, 'name', $request->name);
        $array =Arr::add($array, 'price', $request->price);
        $array = Arr::add($array, 'cate_id', $request->cate_id);
        $array = Arr::add($array, 'image', $image_name);
//        dd($array);
        //lay dl tu form va luu len db
        $product->update($array);
        //quay lai danh sach
        return Redirect::route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     * * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //xoa ban ghi dc chon
        $product->delete();
        //quay ve danh sach
        return Redirect::route('products.index');
    }
}
