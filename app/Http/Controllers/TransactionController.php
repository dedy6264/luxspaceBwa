<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionItem;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $query=Transaction::query();
            // dd($query);
            return Datatables::of($query)
            ->addColumn('action', function($item){
                return '<a href="'.route('dashboard.transaction.show',$item->id).'">Show</a>
                        <a href="'.route('dashboard.transaction.edit',$item->id).'">Edit</a>';
            })
            ->editColumn('total_price',function($item){
                return number_format($item->total_price);
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('dashboard.transaction.index');
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Transaction $transaction)
    {
        // dd($transaction);
        // $transastion=Transaction::find($transaction);
        if(request()->ajax()){
            $query=TransactionItem::join('users','transaction_items.user_id','=','users.id')
            ->join('products','transaction_items.product_id','=','products.id')
            ->join('transactions','transaction_items.transactions_id','=','transactions.id')
            ->where('transaction_items.transactions_id',$transaction->id)
            ->select('products.name','products.price','transaction_items.id')
            ->get();
            return Datatables::of($query)
            // ->addColumn('action', function($item){
            //     return '<a hreff="'.route('dasboard.transaction.show',$item->id).'">Show</a>
            //             <a hreff="'.route('dasboard.transaction.edit',$item->id).'">Edit</a>';
            // })
            ->editColumn('total_price',function($item){
                return number_format($item->total_price);
            })
            // ->rawColumns(['action'])
            ->make();
        }
        return view('dashboard.transaction.show',compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        return view('dashboard.transaction.edit',[
            'item'=>$transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());
        return redirect()->route('dashboard.transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
