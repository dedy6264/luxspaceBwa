<?php

namespace App\Http\Controllers;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $query=User::query();
            return Datatables::of($query)
            ->addColumn('action', function($item){
                return '<a href="'.route('dashboard.user.edit',$item->id).'"> 
                Edit 
                </a>
                <form action="'.route('dashboard.user.destroy',$item->id).'" method="post"> 
                '.csrf_field() .method_field('delete').' 
                <button type="submit" value="submit">Hapus</button> 
                </form>';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('dashboard.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('dashboard.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // dd($user);
        return view('dashboard.user.update',[
            'item'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request,User $user)
    {
        $user->update($request->all());
        return redirect()->route('dashboard.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.user.index');
    }
}
