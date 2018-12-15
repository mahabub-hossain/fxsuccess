<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Currency;
use Illuminate\Support\Facades\Redirect;
class CurrencypairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $allcurrencies = Currency::orderBy('id', 'DESC')->get();
        return view('Admin.Currency.manage_currency',compact('allcurrencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        
        $currencyimage = $request->file('imagename');
         
        $name = time().'.'.$currencyimage->getClientOriginalExtension();
        $final_image = 'currencyimages/'.$name;
        $image_name = $currencyimage->move(public_path().'/currencyimages/', $name);
        $currency = new Currency();
        $currency->title = $request->title;
        $currency->image = $final_image;
        $currency->save();
        // dd( $Image);
        //  exit();
        // $extension = explode('.',$name);
        // $name = time().'.'.$extension[1];
        
        // $image_name = $currencyimage->move(public_path().'/currencyimages/', $name);
        // $currency = new Currency();
        // $currency->title = $title;
        // $currency->image = $name;
        // $currency->save();
       
       return response()->json($currency);
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
    public function itemUpdate(Request $request){

        $currencyimage = $request->file('myimage');
        // dd($currencyimage);
        // exit;

        if(!empty($currencyimage)) {
            $name = time().'.'.$currencyimage->getClientOriginalExtension();
            $final_image = 'currencyimages/'.$name;
            $image_name = $currencyimage->move(public_path().'/currencyimages/', $name);
            $currency = Currency::find($request->id);
            $currency->title = $request->title;
            $currency->image = $final_image;
            $currency->save();
            return Redirect::to('currency')->with('message','Currency Updated Susseccfully');
        } else{
            $currency = Currency::find($request->id);
            $currency->title = $request->title;
           // $currency->image = $final_image;
            $currency->save();
             return Redirect::to('currency')->with('message','Currency Updated Susseccfully'); 
        }
        // $title = $request->title;
         //return response()->json($currencyimage);
    }
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
    public function destroy(Request $request)
    {
         $currency = Currency::find($request->id);
            // $currency->delete();
             $unlinkimage = $currency->image;
            unlink($unlinkimage);
            $currency->delete();
        //  dd();
        //  exit;
       
        //$currency->delete ();
        //return Redirect::to('currency')->with('message','Currency Deleted Susseccfully');
        return response ()->json();
    }
}
