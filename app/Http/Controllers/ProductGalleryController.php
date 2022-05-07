<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductGalleryRequest;
use App\Models\ProductGallery;
use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;


class ProductGalleryController extends Controller
{
   
    public function index(Product $product)
    {
        if(request()->ajax()){
            $query=ProductGallery::where('product_id',$product->id);
            return Datatables::of($query)
            ->addColumn('action', function($item){
                return '<form action="'.route('dashboard.gallery.destroy',$item->id).'" method="post"> '.csrf_field() .method_field('delete').' <button type="submit" value="submit">Hapus</button> </form>';
            })
            ->addColumn('url',function($item){
                return '<img src="'.Storage::url($item->url).'"/>';
            })
            ->addColumn('is_featured',function($item){
                return $item->is_feature ?'YES':'NO';
            })
            
            ->rawColumns(['action','url','is_featured'])
            ->make();
        }
        return view('dashboard.gallery.index',compact('product'));
    }

    public function create(Product $product)
    {
        return view('dashboard.gallery.create',compact('product'));
        
    }

   
    public function store(ProductGalleryRequest $request, Product $product)
    {
                                    // DB::enableQueryLog();

        // dump($product->id);
        // dd($request->all());
        $files=$request->file('files');
        if($request->hasFile('files')){
            foreach($files as $file){
                $path=$file->store('public/gallery');
                ProductGallery::create([
                    'product_id'=>$product->id,
                    'url'=>$path,
                ]);
            }
        }
                                    //    dd(DB::getQueryLog());
        return redirect()->route('dashboard.product.gallery.index',$product->id);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(ProductGallery $gallery)
    {

        $gallery->delete();
        return redirect()->route('dashboard.product.gallery.index',$gallery->product_id);
    }
}
