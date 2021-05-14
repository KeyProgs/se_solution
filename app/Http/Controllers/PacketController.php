<?php

namespace App\Http\Controllers;

use App\Models\Packet;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class PacketController extends Controller
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
    public function scanner(Request $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $packet = new Packet();
        $insertedPacket=$packet->insertPacket($request->name);
        return redirect('/')->withErrors($insertedPacket);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Packet $packet
     * @return \Illuminate\Http\Response
     */
    public function show(Packet $packet)
    {
        return view('packets.packets', []);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Packet $packet
     * @return \Illuminate\Http\Response
     */
    public function edit(Packet $packet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Packet $packet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Packet $packet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Packet $packet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packet $packet = null, $id)
    {

        Packet::findOrFail($id)->delete();
        return redirect('/');
    }
}
