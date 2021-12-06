<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = House::all();
        return view('admin.house', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.house_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new House;
        $data->title = $request ->input('title');
        $data->keywords = $request ->input('keywords');
        $data->description = $request ->input('description');
        $data->slug = $request ->input('slug');
        $data->status = $request ->input('status');
        $data->category_id= $request ->input('category_id');
        $data->user_id= Auth::id();
        $data->price= $request ->input('price');
        $data->address= $request ->input('address');
        $data->detail= $request ->input('detail');
        $data->save();
        return redirect()->route('admin_house');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house, $id)
    {
        $data=House::find($id);
        $datalist = Category::all();

        return view('admin.house_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house, $id)
    {
        $data = House::find($id);
        $data->title = $request ->input('title');
        $data->keywords = $request ->input('keywords');
        $data->description = $request ->input('description');
        $data->slug = $request ->input('slug');
        $data->status = $request ->input('status');
        $data->category_id= $request ->input('category_id');
        $data->user_id= Auth::id();
        $data->price= $request ->input('price');
        $data->address= $request ->input('address');
        $data->detail= $request ->input('detail');
        $data->save();
        return redirect()->route('admin_house');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house,$id)
    {
        $data = House::find($id);
        $data->delete();

        return redirect()->route('admin_house');
    }
}
