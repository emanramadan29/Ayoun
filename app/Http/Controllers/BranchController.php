<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::orderBy('created_at', 'desc')->get();
        return view('admin.branches.index')->with('branches', $branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $branches = new Branch;
        $branches->name = request('name');
        $branches->address = request('address');
        $branches->tel = request('tel');
        $branches->fax = request('fax');
        $branches->email = request('email');
        $branches->lat = request('lat');
        $branches->lng = request('lng');
        $branches->save();


        return redirect('/admin/branches')->with('success', 'Branch has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        $branch = Branch::find($branch->id);
        return view('admin.branches.show')->with('branch', $branch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
         $branch = Branch::find($branch->id);
        return view('admin.branches.edit',compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {


        $branches = Branch::find($branch->id);
         
        $branches->name = request('name');
        $branches->address = request('address');
        $branches->tel = request('tel');
        $branches->fax = request('fax');
        $branches->email = request('email');
        $branches->lat = request('lat');
        $branches->lng = request('lng');
        $branches->save();
        return redirect('/admin/branches')->with('success', 'Branch has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch = Branch::find($branch->id);
        $branch->delete();
        return redirect('/admin/branches')->with('success','Branch has been  deleted');
    }
}
