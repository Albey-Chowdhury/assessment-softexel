<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function addCategory(){
        return view('backend.pages.category.add');
    }

    public function storeCategory(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);

        Category::create([
            'name' =>$request->name
        ]);


        session()->flash('success','product has been uploads');
        return redirect()->back();
    }
}

