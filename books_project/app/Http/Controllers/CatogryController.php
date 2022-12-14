<?php

namespace App\Http\Controllers;

use App\Models\Catogry;
use Illuminate\Http\Request;

class CatogryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                $data = Catogry::all();
        return response()->view('cat.index' , ['catogry' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cat.create' );
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
            'Catogry'=>'required|integer',
        ]);


        $catogry= new Catogry();
        $catogry->Catogry=$request->input('Catogry'); 
        $save = $catogry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catogry  $catogry
     * @return \Illuminate\Http\Response
     */
    public function show(Catogry $catogry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catogry  $catogry
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
     $catogry=Catogry::find($id);
    return response()->view('cat.edit',['catogry'=>$catogry]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catogry  $catogry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $request->validate([
           
            'Catogry'=>'required|integer ',
            
        ]);

        $catogry =Catogry::findOrFail($id);
       
        $catogry->Catogry = $request->input('Catogry');
       
      
   
        $save = $catogry->save();
        return redirect()->route('cat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catogry  $catogry
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $catogry=Catogry::findOrFail(   $id);
        $deleted=$catogry->delete();
        if($deleted){
            return redirect()->back();
        }
    }
}
