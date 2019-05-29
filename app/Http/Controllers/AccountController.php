<?php

namespace App\Http\Controllers;

use App\account;
use App\City;
use App\Country;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $acnts =Account::all();

        return view('admin/account/index',compact('acnts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   $cities=City::all();
        $countries=Country::all();
        return view('admin/account/create',compact('countries','cities'));
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
            'nameAr'=>'required',
            'nameEn'=>'required',
            'gender'=>'required',
            'countryAr'=>'required',
            'countryEn'=>'required',
            'cityAr'=>'required',
            'cityEn'=>'required',
            'phone'=>'required',
           'email'=>'required',

        ]);
        $acnt=new Account();
        $acnt->nameAr=request('nameAr');
        $acnt->nameEn=request('nameEn');
        $acnt->gender=request('gender');
        $acnt->countryAr=request('countryAr');
        $acnt->countryEn=request('countryEn');
        $acnt->cityAr=request('cityAr');
        $acnt->cityEn=request('cityEn');
        $acnt->phone=request('phone');
        $acnt->email=request('email');
        $acnt->save();
        return redirect('admin/account')->with('success','تم اضافه البيانات بنجاح');

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
    {    $cities=City::all();
        $countries=Country::all();
        $acnt=Account::find($id);
        return view('admin/account/edit',compact('acnt','cities','countries'));
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
        $acnt=Account::find($id);

        $acnt->nameAr=request('nameAr');
        $acnt->nameEn=request('nameEn');
        $acnt->gender=request('gender');
        $acnt->countryAr=request('countryAr');
        $acnt->countryEn=request('countryEn');
        $acnt->cityAr=request('cityAr');
        $acnt->cityEn=request('cityEn');
        $acnt->phone=request('phone');
        $acnt->email=request('email');

        $acnt->save();


        return redirect('admin/account')->with('success','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acnt=Account::find($id);
        $acnt->delete();
        return back()->with('success','تم حذف البيانات بنجاح');

    }
}
