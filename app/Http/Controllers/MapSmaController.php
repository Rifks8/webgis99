<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mapsma;

class MapSmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sman = sma::all();
        // dump($mapsma);
        $mapsma = DB::table('mapsma')->get();
        return view('mapsma', ['mapsma' => $mapsma]);
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
     * @param  \App\Models\mapsma  $mapsma
     * @return \Illuminate\Http\Response
     */
    public function show(mapsma $mapsma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mapsma  $mapsma
     * @return \Illuminate\Http\Response
     */
    public function edit(mapsma $mapsma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mapsma  $mapsma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mapsma $mapsma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mapsma  $mapsma
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapsma $mapsma)
    {
        //
    }
}
