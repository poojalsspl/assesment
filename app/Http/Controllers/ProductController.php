<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        
        return view('products.index',compact('products'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        request()->validate([
            'pro_name' => 'required',
            'pro_price' => 'required|numeric',
            'pro_desc' => 'required',
            'catg_code' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $data = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/';
            $productImage = date('Y').$data['pro_name'] . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $data['image'] = $destinationPath.$productImage;
        }
    
        Product::create($data);
    
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    { 

        request()->validate([
            'pro_name' => 'required',
            'pro_price' => 'required|numeric',
            'pro_desc' => 'required',
            'catg_code' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2000'
        ]);

        $data = $request->all();

        if ($image = $request->file('image')) {
            $old_img = Product::where('id',$product->id)->first();
            $old_file_path = storage_path().'/'.$old_img['image'];
            if(Storage::exists($old_file_path)) {
               unlink($old_file_path); 
               
            }
            $destinationPath = 'uploads/';
            $productImage = date('Y').$data['pro_name'] . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $data['image'] = $destinationPath.$productImage;
        }else{
            unset($data['image']);
        }
          
        $product->update($data);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
