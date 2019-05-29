<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::orderBy('created_at', 'desc')->get();
        return view('admin.socials.index')->with('socials', $socials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/socials.create');
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
            'name'=>'max:100',
            'link'=>'max:150',
        ]);
        $socials =new Social();

        $socials->name = request('name');
        $socials->link = request('link');
        $socials->save();
        return redirect('/admin/socials')->with('success', 'Social Media has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        $socials = Social::find($social->id);
        return view('admin.socials.show')->with('socials', $socials);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        $socials = Social::find($social->id);
        return view('admin.socials.edit',compact('socials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $this->validate($request , [
            'name'=>'max:100',
            'link'=>'max:150',
        ]);
        $socials = Social::find($social->id);
        
        $socials->name = request('name');
        $socials->link = request('link');
        $socials->save();
        return redirect('/admin/socials')->with('success', 'Social Media has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        $socials = Social::find($social->id);
        $socials->delete();
        return redirect('/admin/socials')->with('success','Social Media has been  deleted');
    }
}
