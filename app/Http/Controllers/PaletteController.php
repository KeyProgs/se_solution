<?php

namespace App\Http\Controllers;

use App\Models\Palette;
use Illuminate\Http\Request;

class PaletteController extends Controller
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
    public function create()
    {
        //
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
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function show(Palette $palette)
    {
//        dd('ok');
        return view('palettes.palettes',['palettes' => Palette::paginate(5)]);


    }

    public function palette($id){

        return view('palettes.palette',['palette' => Palette::find($id)->get()]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function edit(Palette $palette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Palette $palette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Palette  $palette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Palette $palette)
    {
        //
    }
}
