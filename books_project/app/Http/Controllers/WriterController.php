<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Writer::all();
        return response()->view('Writer.indexwriter' , ['writer' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('Writer.createwriter' );
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
        $request->validate([
            'Writer'=>'required|string',
        ]);


        $writer= new Writer();
        $writer->Writer=$request->input('Writer'); 
        $save = $writer->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function show(Writer $writer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $writer=Writer::find($id);
        return response()->view('writer.edit',['writer'=>$writer]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $request->validate([
           
            'Writer'=>'required|string ',
            
        ]);

        $writer =Writer::findOrFail($id);
       
        $writer->Writer = $request->input('Writer');
       
      
   
        $save = $writer->save();
        return redirect()->route('writer.indexwriter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Writer  $writer
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $writer=Writer::findOrFail(   $id);
        $deleted=$writer->delete();
        if($deleted){
            return redirect()->back();
        }
    }
}
