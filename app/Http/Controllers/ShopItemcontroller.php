<?php

namespace App\Http\Controllers;

use App\ShopItem;
use Illuminate\Http\Request;

class ShopItemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=ShopItem::all();
        return view('admin/shopitems/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/shopitems/create');
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
        ]);
        $item=new ShopItem();
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->save();
        return redirect('admin/items')->with('success','تم اضافه البيانات بنجاح');
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
        $item=ShopItem::find($id);
        return view('admin/shopitems/edit',compact('item'));
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
        $item=ShopItem::find($id);
        $this->validate(request(),[
            'titleAr'=>'required|min:2',
            'titleEn'=>'required|min:2',
        ]);
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->save();
        return redirect('admin/items')->with('success','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=ShopItem::find($id);
        $item->delete();
        return redirect('admin/items')->with('success','تم حذف البيانات بنجاح');

    }
}
