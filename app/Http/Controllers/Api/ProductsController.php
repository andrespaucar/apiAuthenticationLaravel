<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function save(Request $req){
       $product = new Product;
       $product -> name = $req->name;
       $product -> category = $req->category;
       $product -> price = $req->price;
       if($product -> save()){
            return request()->json(['Result' => "PRoducts ha been register"]);
       }
    }

    public function update(Request $req){
        $product = Product::find($req -> id);
        $product->category = $req->category;
        if($product->save()){
            return ['result'=>'success',"msg"=> "Data id Update"];
        }
    }
}
