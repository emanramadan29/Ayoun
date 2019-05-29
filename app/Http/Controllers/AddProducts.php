<?php

namespace App\Http\Controllers;

use App\Addcompany;
use App\AddProduct;
use App\color;
use App\Productname;
use App\ProductImages;
use App\ShopItem;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AddProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=AddProduct::all();
        return view('admin/addproduct/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Addcompany::all();
        $depts=ShopItem::all();
        $products=Productname::all();
        $colors=color::all();
        return view('admin/addproduct/create',compact('brands','depts','products','colors'));

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
            'brandEn'=>'required',
            'brandAr'=>'required',
            'deptEn'=>'required',
            'deptAr'=>'required',
            'proEn'=>'required',
            'proAr'=>'required',
            'stock'=>'required',
            'amount'=>'required',
            'colorAr'=>'required',
            'colorEn'=>'required',
            'textAr'=>'required',
            'priceB'=>'required',
            'priceA'=>'required',
            'img'=>'required|image|',
            'startAt'=>'required',
            'endAt'=>'required',
        ]);


        $product =new AddProduct();

        $image = request('img');
        $imagee = time() . '.' .$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(360, 280);
        $image_resize->save(public_path('imgs/products/' .$imagee));


        $product->brandEn=request('brandEn');
        $product->brandAr=request('brandAr');
        $product->deptEn=request('deptEn');
        $product->deptAr=request('deptAr');
        $product->proEn=request('proEn');
        $product->proAr=request('proAr');
        $product->stock=request('stock');
        $product->amount=request('amount');
        $product->colorAr=request('colorAr');
        $product->colorEn=request('colorEn');
        $product->textAr=request('textAr');
        $product->priceB=request('priceB');
        $product->priceA=request('priceA');
        $product->img=$imagee;
        $product->startAt=request('startAt');
        $product->endAt=request('endAt');
        $product->save();
        return redirect('admin/addproduct')->with('success','تم اضافه البيانات بنجاح');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=AddProduct::where('deptEn',$id)->get();
        return view('products',compact('products'));

    }
    public function find($id)
    {
        $prodinfos=AddProduct::where('id',$id)->get();
        return view('prodinfo',compact('prodinfos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=AddProduct::find($id);
        return view('admin/addproduct/edit',compact('product'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=AddProduct::find($id);
        $product->delete();
        return redirect('admin/addproduct')->with('success','تم حذف البيانات بنجاح');


    }
}
