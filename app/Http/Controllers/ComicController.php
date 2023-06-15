<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varComics = Comic::All();
        return view('pages.index',compact('varComics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datiForm = $request->all();
        // dd($datiForm);
         $newFumetti = new Comic();
        // $newFumetti -> title = $datiForm['title'];
        // $newFumetti -> description = $datiForm['description'];
        // $newFumetti -> thumb = $datiForm['thumb'];
        // $newFumetti -> price = $datiForm['price'];
        // $newFumetti -> series = $datiForm['series'];
        // $newFumetti -> sale_date = $datiForm['sale_date'];
        // $newFumetti -> type = $datiForm['type'];
        
        $newFumetti->fill($datiForm);
        $newFumetti ->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleComic = Comic::find($id);
        return view('pages.show',compact('singleComic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
   
    public function edit(Comic $comic)
    {
        return view('pages.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $mario = $request->all();
     
        $comic->update($mario);
         return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}