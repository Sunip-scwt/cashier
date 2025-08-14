<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::get();
         return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       
        $validator=Validator::make($request->all(),[
            'name'=>'required',
          
        ]);
        if($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                Product::create([
                    "name"=>$request->name,
                  
                ]);
                return redirect()->route("products.index")->with('success','product created');
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product=Product::where('id',$id)
            ->first();
        
         return view('products.edit', compact('product'));
    }

/**
 * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $validator=Validator::make($request->all(),[
            'name'=>'required',
           
        ]);
         if($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $update['name']=$request->name;
                
                $query=Product::where('id',$id)
                    ->update($update);
                return redirect()->route("products.index")->with('success','product updated');
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
