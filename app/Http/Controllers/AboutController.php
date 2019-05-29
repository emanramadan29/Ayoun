<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index')->with('abouts', $abouts) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $image = request('img');
        $imagee = time() . '.' .$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
//        $image_resize->resize(500, 300);
        $image_resize->save(public_path('imgs/' .$imagee));

        $about=new About();
        $about->img=$imagee;
        $about->bodyAr=request('bodyAr');
        $about->bodyEn=request('bodyEn');
        $about->save();
        return redirect('/admin/abouts')->with('success','تم اضافه البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $about = About::find($about->id);
        return view('admin.about.show')->with('about', $about);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $about = About::find($about->id);
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about = About::find($about->id);

        if (request()->hasFile('img'))
        {
            $this->validate($request , [
                'img' => 'image|max:5000',
            ]);
            $image = request('img');
            $imagee = time() . '.' .$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
//            $image_resize->resize(570, 400);
            $image_resize->save(public_path('imgs/' .$imagee));
            $about->img = $imagee;
            $about->save();
            return redirect('/admin/abouts')->with('success','تم تعديل البيانات بنجاح');
        }

        $about->bodyAr=request('bodyAr');
        $about->bodyEn=request('bodyEn');
        $about->save();

        return redirect('/admin/abouts')->with('success', 'Abouts Us has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $abouts = About::find($about->id);
        $abouts->delete();
        return redirect('/admin/abouts')->with('success','Abouts Us has been  deleted');
    }
}
