<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('brand', [
            'title' => 'Brand',
            'brand' => Brand::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createbrand', [
            'title' => 'Add a new brand'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            Brand::create([
                'name' => $request->brand_name,
                'state' => $request->brand_state,
                'brand_id' => $request->brand_id
        ]);
        return redirect(route('brand.index'));

    
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
        return view('showbrand',[
            'title'=>'Brand Details',
            'brand'=>Brand::where('brand_id', $id)->first()
            //sesuaikan id dr model brand dengan yang di parameter
        ]);
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
        return view('editbrand', [
            'title'=>'Edit Brand',
            'brand'=>Brand::findOrFail($id)
        ]);
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
        $brand = Brand::findOrFail($id);
        $brand->update([
            'name' => $request->brand_name,
            'state' => $request->brand_state,
            'brand_id' => $request->brand_id
        ]);
        return redirect(route('brand.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return redirect(route('brand.index'));
    }
}
