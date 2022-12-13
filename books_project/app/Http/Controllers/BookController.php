<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Book::all();
        return response()->view('cmc.index' , ['book' => $data]);
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
            'NameBook'=> 'required|string|min:3|max::20',
            'Writer'=>'required|string',
            'Publlisher'=>'required|string',
            'Category'=>'required|string',
            'VersionNumber'=>'required|integer',
            
           
            

        ]);

        $book = new Book();
        $book->NameBook = $request->input('NameBook');
        $book->Writer = $request->input('Writer'); 
        $book->Publlisher = $request->input('Publlisher'); 
        $book->Category = $request->input('Category'); 
        $book->VersionNumber = $request->input('VersionNumber'); 
   
        $save = $book->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $book=Book::find($id);
        return response()->view('cmc.edit',['book'=>$book]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $request->validate([
            'NameBook'=> 'required|string|min:3|max::20',
            'Writer'=>'required|string ',
            'Publlisher'=>'required|string',
            'Category'=>'required|string',
            'VersionNumber'=>'required|integer',
        ]);

        $book =Book::findOrFail($id);
        $book->NameBook = $request->input('NameBook');
        $book->Writer = $request->input('Writer');
        $book->Publlisher = $request->input('Publlisher'); 
        $book->Category = $request->input('Category'); 
        $book->VersionNumber = $request->input('VersionNumber'); 
      
   
        $save = $book->save();
        return redirect()->route('cmc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book=Book::findOrFail(   $id);
        $deleted=$book->delete();
        if($deleted){
            return redirect()->back();
    }
 }
}
