<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        return response()->view('cmc.index' , ['student' => $data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cmc.create' );
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
            'name'=> 'required|string|min:3|max::20',
            'Dob'=>'required|date',
            'Avg'=>'required|integer',
            'CardId'=>'required|integer',
            'StdYear'=>'required|date',
            
           
            

        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->Dob = $request->input('Dob'); 
        $student->Avg = $request->input('Avg'); 
        $student->CardId = $request->input('CardId'); 
        $student->StdYear = $request->input('StdYear'); 
   
        $save = $student->save();
        return redirect()->back();
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
        $student=Student::find($id);
        return response()->view('cmc.edit',['student'=>$student]);
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
        $request->validate([
            'name'=> 'required|string|min:3|max::20',
            'Dob'=>'required|date',
            'Avg'=>'required|integer',
            'CardId'=>'required|integer',
            'StdYear'=>'required|date',
        ]);

        $student =Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->Dob = $request->input('Dob'); 
        $student->Avg = $request->input('Avg'); 
        $student->CardId = $request->input('CardId'); 
        $student->StdYear = $request->input('StdYear'); 
   
        $save = $student->save();
        return redirect()->route('cmc.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $student=Student::findOrFail($id);
        $deleted=$student->delete();
        if($deleted){
            return redirect()->back();
        }

        //
        // $countOfDeletedRows=Student::destroy($id);    // طريقة ثانية 
        // if($countOfDeletedRows==1){
        //     return redirect()->back();
        // }
       

    }
}
