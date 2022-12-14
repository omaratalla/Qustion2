<?php

namespace App\Http\Controllers;

use App\Models\Publlisher;
use Illuminate\Http\Request;

class PubllisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
                $data = Publlisher::all();
        return response()->view('pcp.index' , ['publlisher' => $data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return response()->view('pcp.create' );

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
            'Publlisher'=>'required|string',
        ]);


        $publlisher= new Publlisher();
        $publlisher->Publlisher=$request->input('Publlisher'); 
        $save = $publlisher->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publlisher  $publlisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publlisher $publlisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publlisher  $publlisher
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
                $publlisher=Publlisher::find($id);
        return response()->view('pcp.edit',['publlisher'=>$publlisher]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publlisher  $publlisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
                $request->validate([
           
            'Publlisher'=>'required|string ',
            
        ]);

        $publlisher =Publlisher::findOrFail($id);
       
        $publlisher->Publlisher = $request->input('Publlisher');
       
      
   
        $save = $publlisher->save();
        return redirect()->route('pcp.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publlisher  $publlisher
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $publlisher=Publlisher::findOrFail(   $id);
        $deleted=$publlisher->delete();
        if($deleted){
            return redirect()->back();
        }

    }
}
