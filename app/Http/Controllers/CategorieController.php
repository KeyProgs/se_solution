<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Palette;
use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

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
        $categorie->categorie=$request->input("cat");
        $categorie->ref=$request->input("ref");
        $categorie->size=$request->input("size");
        $categorie->save();
        return redirect("/categories");


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
        return view("categories.categories", [
            "categories" =>Categorie::get(),
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
//        dd("ok");

        $columns = Schema::getColumnListing("voitures");
        $categories=Categorie::all();
       foreach ($categories as $key => $categorie ){
           $categorie->categorie=$request->input("cat".$categorie->id);
           $categorie->ref=$request->input("ref".$categorie->id);
           $categorie->size=$request->input("size".$categorie->id);
           $categorie->save();
       }
        return redirect("/categories");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorbie $categorie)
    {
        //
    }

    public function palettes($id){

        return view("palettes.palettes",["palettes" => Palette::where("categorie_id",$id)->paginate(5)]);

    }

    public function download($id=1){
//        dd(Categorie::find($id));
        $file="ID;Categorie;Palette;QR Packet; \n\r";
        foreach (Packet::all() as $key => $packet){
            $file.=$packet->id .";". Categorie::find($packet->categorie_id)->categorie .";".Palette::find($packet->palette_id)->id.";".$packet->qr ."; \n\r ";
        }

        return (new Response($file, 200))
            ->header("Content-Type", "text/csv");

    }

    public function addForm(){
        return view("categories/addForm");
    }
}
