<?php

namespace App\Http\Controllers;

use App\Addcompany;
use App\AddProduct;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class CompanyController extends Controller
{






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Addcompany::all();
        return view('admin/company/index',compact('items'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/company/create');
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
            'img' => 'required|image|max:5000',

        ]);
        $image = request('img');
        $imagee = time() . '.' .$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
//        $image_resize->resize(570, 400);
        $image_resize->save(public_path('imgs/' .$imagee));
        $item=new Addcompany();
        $item->img=$imagee;
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->save();
        return redirect('admin/company')->with('success','تم اضافه البيانات بنجاح');
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
        $item=Addcompany::find($id);
        return view('admin/company/edit',compact('item'));
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
        $item=Addcompany::find($id);

        if (request()->hasFile('img'))
        {
            $this->validate($request , [
                'img' => 'required|image|max:5000',
            ]);
            $image = request('img');
            $imagee = time() . '.' .$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
//            $image_resize->resize(570, 400);
            $image_resize->save(public_path('imgs/' .$imagee));
            $item->img=$imagee;
            $item->save();
            return redirect('/admin/company')->with('success','تم تعديل البيانات بنجاح');
        }

        $this->validate(request(),[
            'titleAr'=>'required|min:2',
            'titleEn'=>'required|min:2',
        ]);
        $item->titleAr=request('titleAr');
        $item->titleEn=request('titleEn');
        $item->save();
        return redirect('admin/company')->with('success','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Addcompany::find($id);
        $item->delete();
        return redirect('admin/company')->with('success','تم حذف البيانات بنجاح');

    }


}
