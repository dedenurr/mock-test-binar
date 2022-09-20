<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get Products
       //return ProductResource::collection(Product::paginate(5));
        //get product
        $product = Product::when(request()->q, function($product) {
            $product = $product->where('name', 'like', '%'. request()->q . '%');
        })->latest()->paginate(5);
        
        //return with Api Resource
        return new ProductResource(true, 'List Data Product', $product);
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=> 'required',
            'price'=> 'required',
            'image_url'=> 'required|image|mimes:jpeg,jpg,png|max:2000',
        ]);

        if($validator->fails()){
            return response()->json($validator->erros,422);
        }

        // upload image
        $image_url = $request->file('image_url');
        $image_url->storeAs('public/products',$image_url->hashName());

        // create Product
        $product = Product::create([
            'name'=> $request->name,
            'price' => $request->price,
            'image_url'=> $image_url->hashName(),    
        ]);

        if($product){
            //return succes with api resource
            return new ProductResource(true,'Data Product Berhasil Disimpan!', $product);
        }

        //return failed with Api Resource
        return new ProductResource(false,'data Product gagal disimpan!',null);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::whereId($id)->first();

        if($product){
            //return succes with api resource
            return new ProductResource(true,'Data Product detail!', $product);
        }

        //return failed with Api Resource
        return new ProductResource(false,'data Product detail tidak ditemukan!',null);
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
        $validator = Validator::make(request()->all(),[
            'name'=> 'required',
            'price'=> 'required',
            'image_url'=> 'required|image|mimes:jpeg,jpg,png|max:2000',
            ]);
    
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }
    
            // Check image Update
            if($request->file('image_url')){
                // removed old image
                Storage::disk('local')->delete('public/products/'.basename($product->image_url));
                
                //upload new image
                $image_url = $request->file('image_url');
                $image_url->storeAs('public/products',$image_url->hashName());
    
                // update product with new image
                $product->update([
                    'name'=> $request->name,
                    'price' => $request->price,
                    'image_url'=> $image_url->hashName(),    
                ]);
            }
    
            // update product withot image
            $product->update([
                'name'=> $request->name,
                'price' => $request->price,
            ]);
            
            if($product){
                //return succes with api resource
                return new ProductResource(true,'Update product!',$product);
            }
                //return failed with Api Resource
                return new ProductResource(false,'data product gagal diupdated!',null);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         // remove image
         Storage::disk('local')->delete('public/products/'.basename($product->image_url));

         if($product->delete()){
             // return succes with api resource
             return new ProductResource(true,'product berhasil dihapus',null);
         }
             // return succes with api resource
             return new ProductResource(false,'product gagal dihapus',null);
    }
}
