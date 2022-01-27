<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sma;

class DataSmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sman = sma::all();
        return view ('datasma', ['sma' => $sman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahsma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CARA PERTAMA
        // $sma = new sma;
        // $sma->nama = $request->nama;
        // $sma->alamat = $request->alamat;
        // $sma->keterangan = $request->zona;
        // $sma->foto = $request->foto;
        // $sma->website = $request->website;
        // $sma->lat = $request->latitude;
        // $sma->lng = $request->longitude;
        
        // $sma->save();

        //CARA KEDUA (PAKE MODEL FILLABLE / GUARDED)
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        sma::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'keterangan' => $request->zona,
            'foto' => $request->foto,
            'website' => $request->website,
            'lat' => $request->latitude,
            'lng' => $request->longitude,
        ]);

        //CARA KETIGA (CARA KEDUA TAPI DISINGKAT KARENA UDAH PAKAI FILLABLE)
        // sma::create($request->all());
        return redirect('/datasma')->with('tambah', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(sma $sma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sma)
    {
        $sma = sma::find($sma);
        return view ('editsma', compact('sma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sma)
    {
        $sma = sma::find($sma);
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        sma::where('id', $sma->id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'keterangan' => $request->zona,
                'website' => $request->website,
                'lat' => $request->latitude,
                'lng' => $request->longitude,
                'foto' => $request->foto
            ]);

        return redirect('/datasma')->with('ubah', 'Data Berhasil diubah!');         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sma)
    {
        sma::find($sma)->delete();
        return redirect('/datasma')->with('hapus', 'Data Berhasil dihapus!');
    }
}
