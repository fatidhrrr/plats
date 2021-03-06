<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plat;
use App\Saveur;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plats = Plat::all();
        return view('plat', compact('plats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saveur = Saveur::all();
        return view('add', compact('saveur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plats=new Plat();
        $plats->plat=$request->input("plat");
        $plats->saveur_id=$request->input("saveur");
        $plats->save();
        return redirect()->route("plat");
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
        $plats=Plats::find($id);
        $plats->plat=$request->input("plat");
        $plats->saveur=$request->input("saveur");
        $plats->save();         
        return redirect()->route("plat");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plats = Plat::find($id);
        $plats->delete();
        return redirect()->route('plat');
    }
}