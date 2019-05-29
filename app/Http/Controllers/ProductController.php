<?php

namespace App\Http\Controllers;

use App\Productname;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Productname::all();

        return view('admin/product/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/product/create');
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
        $item=new Productname();
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->save();
        return redirect('admin/product')->with('success','تم اضافه البيانات بنجاح');
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
        $item=Productname::find($id);
        return view('admin/product/edit',compact('item'));
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
        $item=Productname::find($id);
        $this->validate(request(),[
            'titleAr'=>'required|min:2',
            'titleEn'=>'required|min:2',
        ]);
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->save();
        return redirect('admin/product')->with('success','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Productname::find($id);
        $item->delete();
        return redirect('admin/product')->with('success','تم حذف البيانات بنجاح');

    }
}
