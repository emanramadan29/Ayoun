<?php

namespace App\Http\Controllers;

use App\color;
use App\ShopItem;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=color::all();
        return view('admin/color/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/color/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'titleAr'=>'required|min:2',
            'titleEn'=>'required|min:2',
            'color'=>'required|min:2',

        ]);
        $item=new color();
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->color=request('color');

        $item->save();
        return redirect('admin/color')->with('success','تم اضافه البيانات بنجاح');
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
    public function edit($id)
    {
        $item=color::find($id);
        return view('admin/color/edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item=color::find($id);
        $this->validate(request(),[
            'titleAr'=>'required|min:2',
            'titleEn'=>'required|min:2',
            'color'=>'required|min:2',

        ]);
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->color=request('color');
        $item->save();
        return redirect('admin/color')->with('success','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=color::find($id);
        $item->delete();
        return redirect('admin/color')->with('success','تم حذف البيانات بنجاح');

    }
}
