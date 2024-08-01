<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('backend.pages.product.add');
    }

    public function storeProduct(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'price'=>'required',
            'image'=>'required | image | mimes:png',
        ]);

        $date = date('d-m-y H-i-s');
        $imageName = $date.'.'.$request->image->extension();
        $request->image->move('products/',$imageName);
        $request->image=$imageName;
        Product::create([
            'title'=>$request->title,
            'category'=>$request->category,
            'price'=>$request->price,
            'image'=>$imageName
        ]);


        session()->flash('success','product has been uploads');
        return redirect()->back();
    }

    public function manageProduct(){
        $products = Product::Paginate(4);
        return view('backend.pages.product.manage', compact('products'));
    }

    public function editProduct($id){
        $product = Product::find($id);
        return view('backend.pages.product.edit',compact('product'));
    }
    public function updateProduct(Request $request, $id){

        $this->validate($request,[
            'title'=>'required',
            'category'=>'required',
            'price'=>'required',
            'image'=>'required | image | mimes:png',
        ]);

        $product = Product::find($id);
      if ($request->hasFile('image')) {
            if( $request->image && file_exists(public_path('images/'.$product->image))){
                unlink(public_path('images/'.$product->image));
            }

            else{
                $date = date('d-m-y H-i-s');
                $imageName = $date.'.'.$request->image->extension();
                $request->image->move('products/',$imageName);
            }
            $product->image = $imageName;
        }

        $product->update([
            'title '=> $request->title,
            'category'=> $request->category,
            'price'=> $request->price
        ]);

        return redirect()->back();
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        session()->flash('success','product has been Delete');
        return redirect()->back();
    }

}
