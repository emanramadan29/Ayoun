<?php

namespace App\Http\Controllers;

use App\phpoto;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phots = phpoto::all();
        return view('admin.photos.index',compact('phots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'img' => 'required|image|max:5000',
        ]);

        $image = request('img');
        $imagee = time() . '.' .$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(570, 400);
        $image_resize->save(public_path('imgs/' .$imagee));
        $photo=new phpoto();
        $photo->img=$imagee;
        $photo->save();
        return redirect('/admin/photos')->with('success','تم اضافه البيانات بنجاح');
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
        $photo=phpoto::find($id);
        return view('admin/photos/edit',compact('photo'));
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
        $photo=phpoto::find($id);
        if (request()->hasFile('img'))
        {
            $this->validate($request , [
                'img' => 'required|image|max:5000',
            ]);
            $image = request('img');
            $imagee = time() . '.' .$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(570, 400);
            $image_resize->save(public_path('imgs/' .$imagee));
            $photo->img = $imagee;
            $photo->save();
            return redirect('/admin/photos')->with('success','تم تعديل البيانات بنجاح');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo=phpoto::find($id);
        $photo->delete();
        return redirect('/admin/photos')->with('success','تم حذف البيانات بنجاح');
    }
}
