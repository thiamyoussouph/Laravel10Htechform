<?php

namespace App\Http\Controllers;

use App\Models\Vouture;
use Illuminate\Http\Request;

class VoutureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $voitures = Vouture::all();
        return view('voiture.index', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voiture.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $voiture = new Vouture();
        $voiture->matricule = $request->matricule;
        $voiture->kilometrage = $request->kilometrage;
        $voiture->destination = $request->destination ;
        $voiture->motif = $request->motif;
        $voiture->save();
        return redirect()->route('voitures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vouture $vouture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vouture $vouture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vouture $vouture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vouture $vouture)
    {
        //
    }
}
