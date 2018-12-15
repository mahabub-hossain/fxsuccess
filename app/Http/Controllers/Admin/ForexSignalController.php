<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Signalcat;
use App\Fxsignal;
use App\Currency;
use Illuminate\Support\Facades\Redirect;

class ForexSignalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $Signalcats = Signalcat::orderBy('id', 'DESC')->get();
        $Currencise = Currency::orderBy('id', 'DESC')->get();
        return view('Admin.Fxsignal.create_signal',compact('Signalcats','Currencise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // exit;
        $signalimage = $request->file('image');
        $name = time().'.'.$signalimage->getClientOriginalExtension();
        $final_image = 'signalimages/'.$name;
        $image_name =$signalimage->move(public_path().'/signalimages/', $name);
        $fxsignal = new Fxsignal();
        $fxsignal->cat_id = $request->category;
        $fxsignal->currency_id = $request->category;
        $fxsignal->signal_type = $request->signal_type;
        $fxsignal->sig_time = $request->start_time;
        $fxsignal->sig_valid = $request->till;
        $fxsignal->take_profit = $request->take_profit;
        $fxsignal->at_type = $request->buy_sell_at;
        $fxsignal->stop_loss = $request->stop_loss;
        $fxsignal->image = $final_image;
        $fxsignal->save();
        return Redirect::to('fxsignal')->with('message','Article Updated Susseccfully');


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
        //
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
        //
    }
}
