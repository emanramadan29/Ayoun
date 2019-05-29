<?php

namespace App\Http\Controllers;

use App\photo2;
use App\photo2oto;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class Photo2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos2 = photo2::all();
        return view('admin.photo2.index',compact('photos2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo2.create');

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
        $image_resize->resize(500, 300);
        $image_resize->save(public_path('imgs/' .$imagee));

        $photo2=new photo2();
        $photo2->img=$imagee;
        $photo2->save();
        request('img')->move(public_path('imgs/'),$image);
        return redirect('/admin/photo2')->with('success','تم اضافه البيانات بنجاح');
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
        $photo2=photo2::find($id);
        return view('admin/photo2/edit',compact('photo2'));
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
        $photo2=photo2::find($id);
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
            $photo2->img = $imagee;
            $photo2->save();
            return redirect('/admin/photo2')->with('success','تم تعديل البيانات بنجاح');
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
        $photo2=photo2::find($id);
        $photo2->delete();
        return redirect('/admin/photo2')->with('success','تم حذف البيانات بنجاح');
    }

}
