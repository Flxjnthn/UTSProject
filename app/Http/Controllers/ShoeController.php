<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('shoe', [
            'title' => 'Shoe',
            'shoe' => Shoe::all()
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
        return view('createshoe', [
            'title' => 'Add a new shoe'
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
            Shoe::create([
                'name' => $request->shoe_name,
                'size' => $request->shoe_size,
                'color' => $request->shoe_color,
                'type' => $request->shoe_type,
                'pro_id' => $request->pro_id
        ]);
        return redirect(route('shoe.index'));

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
        return view('showshoe',[
            'title'=>'Shoe Details',
            'shoe'=>Shoe::where('id', $id)->first()
            //sesuaikan id dr model Shoe dengan yang di parameter
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
        return view('editshoe', [
            'title'=>'Edit Shoe',
            'shoe'=>Shoe::findOrFail($id)
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
        $shoe = Shoe::findOrFail($id);
        $shoe->update([
            'name' => $request->shoe_name,
            'size' => $request->shoe_size,
            'color' => $request->shoe_color,
            'type' => $request->shoe_type,
            'pro_id' => $request->pro_id
        ]);
        return redirect(route('shoe.index'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
        //
        $shoe->delete();
        return redirect(route('shoe.index'));
    }
}