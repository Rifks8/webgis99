<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smk;

class DataSmkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smkn = smk::all();
        return view ('datasmk', ['smk' => $smkn]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahsmk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        
        smk::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'keterangan' => $request->zona,
            'foto' => $request->foto,
            'website' => $request->website,
            'lat' => $request->latitude,
            'lng' => $request->longitude,
        ]);

        return redirect('/datasmk')->with('tambah', 'Data berhasil ditambah!');;
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
    public function edit($smk)
    {
        $smk = smk::find($smk);
        return view ('editsmk', compact('smk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $smk)
    {
        $smk = smk::find($smk);
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        smk::where('id', $smk->id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'keterangan' => $request->zona,
                'website' => $request->website,
                'lat' => $request->latitude,
                'lng' => $request->longitude,
                'foto' => $request->foto
            ]);

        return redirect('/datasmk')->with('ubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($smk)
    {
        smk::find($smk)->delete();
        return redirect('/datasmk')->with('hapus', 'Data Berhasil dihapus!');
    }
}
