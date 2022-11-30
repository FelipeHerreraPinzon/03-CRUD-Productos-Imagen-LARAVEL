<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product -> nombre = $request -> nombre;
        $product -> precio = $request -> precio;
        
        
        if($request->hasfile('imagen'))
        {
            $file = $request->file('imagen');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $product->imagen = $filename;
        }
        $product -> save();
        
        //return redirect()->back()->with('status','Student Image Added Successfully');
        return redirect() -> route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
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
        $product -> nombre = $request -> nombre;
        $product -> precio = $request -> precio;

        if($request->hasfile('imagen'))
        {

            $destination = 'uploads/'.$product->imagen;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('imagen');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $product->imagen = $filename;
        }

        //$student->update();
        //return redirect()->back()->with('status','Student Image Updated Successfully');
    
        $product -> save();
        return redirect() -> route('products.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        
        $destination = 'uploads/'.$product->imagen;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        
        //return redirect()->back()->with('status','Student Image Deleted Successfully');
   
        $product -> delete();
        return redirect() -> route('products.index');
    }
}
