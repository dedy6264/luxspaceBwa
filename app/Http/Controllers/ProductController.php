<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $query=Product::query();
            return Datatables::of($query)
            ->addColumn('action', function($item){
                return '<a href="'.route('dashboard.product.edit',$item->id).'"> 
                Edit 
                </a>
                <form action="'.route('dashboard.product.destroy',$item->id).'" method="post"> 
                '.csrf_field() .method_field('delete').' 
                <button type="submit" value="submit">Hapus</button> 
                </form> <a href="'.route('dashboard.product.gallery.index',$item->id).'"> 
                Gallery 
                </a>';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('dashboard.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        Product::create($request->all()+[
            'slug'=>$request->name.$request->price
        ]);
        return redirect(route('dashboard.product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // $query=Product::query($product);
        // dd($product);
        return view('dashboard.product.update',compact('product'));
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
        $product->update($request->all());
        return redirect()->route('dashboard.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // dd($product);
        $product->delete();
        return redirect()->route('dashboard.product.index');
    }
}
