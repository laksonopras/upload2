<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view('product', $data);
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
        $request->validate([
            'product_name' => ['string', 'max:255'],
            'product_pict' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(12 * 1024)],
            'category_id'  => ['numeric'],
            'stock'        => ['numeric'],
            'price'        => ['numeric'],
            'discount'     => ['numeric'],
        ]);

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_pict' => Storage::putFile('product_pict', $request->file('product_pict')),
            'category_id' => $request->category_id,
            'stock' => $request->stock,
            'price' => $request->price,
            'discount' => $request->discount
        ]);
        
        $category = Category::find($request->category_id);
        $category->update(['product_count' => $category->product_count + 1]);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['products'] = Product::all();
        $data['categories'] = Category::all();
        return view('homepage', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => ['string', 'max:255'],
            'product_pict' => [File::types(['jpg', 'jpeg', 'png', 'gif'])->max(12 * 1024)],
            'category_id'  => ['numeric'],
            'stock'        => ['numeric'],
            'price'        => ['numeric'],
            'discount'     => ['numeric'],
        ]);

        $product = Product::find($id);
        if($request->product_name){
            $product->product_name = $request->product_name;
        }
        if($request->category_id){
            $product->category_id = $request->category_id;
        }
        if($request->stock){
            $product->stock = $request->stock;
        }
        if($request->price){
            $product->price = $request->price;
        }
        if($request->discount){
            $product->discount = $request->discount;
        }
        if($request->file("product_pict")){
            if($product->product_pict && Storage::exists($product->product_pict)){
                Storage::delete($product->product_pict);
            }
            $product->product_pict = Storage::putFile('product_pict', $request->file('product_pict'));

        }
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/product');
    }
}
