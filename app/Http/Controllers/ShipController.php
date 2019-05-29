<?php

namespace App\Http\Controllers;

use App\color;
use App\Shipment;
use Illuminate\Http\Request;

class ShipController extends Controller
{

    public function index()
    {
        $shipments =Shipment::all();

        return view('admin/shipments/index',compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $items=color::all();
        return view('admin/shipments/create',compact('items'));
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
            'Ship_num'=>'required',
            'client'=>'required',
            'phone'=>'required',
            'product_num'=>'required',
            'amount'=>'required',
            'color'=>'required',
            'confirm'=>'required',
            'shipping'=>'required',
            'eval'=>'required',


        ]);
        $ship=new Shipment();
        $ship->Ship_num=request('Ship_num');
        $ship->client=request('client');
        $ship->phone=request('phone');
        $ship->product_num=request('product_num');
        $ship->amount=request('amount');
        $ship->color=request('color');
        $ship->confirm=request('confirm');
        $ship->shipping=request('shipping');
        $ship->notes=request('notes');
        $ship->eval=request('eval');



        $ship->save();
        return redirect('admin/shipments')->with('success','تم اضافه البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colors=color::all();
        $ship=Shipment::find($id);
        return view('admin/shipments/edit',compact('ship','colors'));
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
        $ship=Shipment::find($id);
        $this->validate(request(),[
            'Ship_num'=>'required',
            'client'=>'required',
            'phone'=>'required',
            'product_num'=>'required',
            'amount'=>'required',
            'color'=>'required',
            'confirm'=>'required',
            'shipping'=>'required',
            'eval'=>'required',
        ]);
        $ship->Ship_num=request('Ship_num');
        $ship->client=request('client');
        $ship->phone=request('phone');
        $ship->product_num=request('product_num');
        $ship->amount=request('amount');
        $ship->color=request('color');
        $ship->confirm=request('confirm');
        $ship->shipping=request('shipping');
        $ship->notes=request('notes');
        $ship->notes=request('eval');

        $ship->save();
        return redirect('admin/shipments')->with('success','تم تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ship=Shipment::find($id);
        $ship->delete();
        return back()->with('success','تم حذف البيانات بنجاح');

    }


}
