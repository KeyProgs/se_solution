<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CategorieController extends Controller
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
    public function create(Request $request)
    {
//        dd($request);
        $categorie=new Categorie();
        $categorie->categorie=$request->input('cat');
        $categorie->ref=$request->input('ref');
        $categorie->size=$request->input('size');
        $categorie->save();
        return redirect('/categories');


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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        return view('categories.categories', [
            'categories' =>Categorie::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {

    }
    public function updateAll(Request $request, Categorie $categorie)
    {
//        dd('ok');

        $columns = Schema::getColumnListing('voitures');
        $categories=Categorie::all();
       foreach ($categories as $key => $categorie ){
           $categorie->categorie=$request->input('cat'.$categorie->id);
           $categorie->ref=$request->input('ref'.$categorie->id);
           $categorie->size=$request->input('size'.$categorie->id);
           $categorie->save();
       }
        return redirect('/categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
    }

    public function palettes($id){

        return view('palettes.palettes',['palettes' => Palette::where('categorie_id',$id)->paginate(5)]);

    }
}
