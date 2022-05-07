<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductGallery;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
$products=Product::join('product_galleries','products.id','=','product_galleries.product_id')->distinct('product_galleries.product_id')->select('products.*','product_galleries.url')->get();
// dd($query->url);

        return view('layouts.page.home',compact('products'));
    }
    public function detail(Request $request,$id){
        $other=Product::join('product_galleries','products.id','=','product_galleries.product_id')
        ->distinct('product_galleries.product_id')
        ->where('products.id','!=',$id)
        ->select('products.*','product_galleries.url')
        ->get();

        $product=Product::where('id',$id)->select('*')->first();
        $products=ProductGallery::join('products','product_galleries.product_id','=','products.id')
        ->where('product_galleries.product_id',$id)
        ->select('product_galleries.*','products.name','products.price','products.description')
        ->get();
        // dd($id);
        return view('layouts.page.detail',compact('products','product','other'));
    }
    public function cartAdd(Request $request, $id){
        Cart::create([
            'user_id'=>Auth::user()->id,
            'product_id'=>$id,
        ]);
        return redirect()->route('cart');
    }
    public function cart(){
        
        $carts=Cart::join('products','carts.product_id','=','products.id')
        ->join('product_galleries','product_galleries.product_id','=','products.id')
        ->where('carts.user_id',Auth::user()->id)
        ->select('carts.*','products.name','products.price','products.description','product_galleries.url')
        ->distinct('product_galleries.product_id')
        ->get();
// dd($carts);
        return view('layouts.page.cart',compact('carts'));
    }
    public function cartDestroy($id){
        // dd($id);
        $cart=Cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('cart');
    }
}
