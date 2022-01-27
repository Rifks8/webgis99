<?php

namespace App\Http\Controllers;

use App\Models\mapsmk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapSmkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $smkn = smk::all();
        $mapsmk = DB::table('mapsmk')->get();
        //dump($mapsmk);
        return view('mapsmk', ['mapsmk' => $mapsmk]);
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
     * @param  \App\Models\mapsmk  $mapsmk
     * @return \Illuminate\Http\Response
     */
    public function show(mapsmk $mapsmk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mapsmk  $mapsmk
     * @return \Illuminate\Http\Response
     */
    public function edit(mapsmk $mapsmk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mapsmk  $mapsmk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mapsmk $mapsmk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mapsmk  $mapsmk
     * @return \Illuminate\Http\Response
     */
    public function destroy(mapsmk $mapsmk)
    {
        //
    }
}
