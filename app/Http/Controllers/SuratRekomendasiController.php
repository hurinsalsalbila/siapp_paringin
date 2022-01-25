<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratRekomendasi;

class SuratRekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = SuratRekomendasi::all();
        return view('admin.suratrekomendasi.index', compact('id')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suratrekomendasi.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suratrekomendasi = new \App\Models\SuratRekomendasi; 
        
        // $suratmasuk->no_urut = $request->get('no_urut'); 
        $suratrekomendasi->nama = $request->get('nama'); 
        $suratrekomendasi->alamat = $request->get('alamat'); 
        $suratrekomendasi->no_telp = $request->get('no_telp'); 
        $suratrekomendasi->alamat_usaha = $request->get('alamat_usaha'); 
        $suratrekomendasi->jenis_reklame = $request->get('jenis_reklame'); 
        $suratrekomendasi->nama_toko = $request->get('nama_toko'); 
        $suratrekomendasi->ukuran = $request->get('ukuran'); 
        $suratrekomendasi->periode = $request->get('periode'); 
        $suratrekomendasi->alamat_toko = $request->get('alamat_toko'); 
        // $suratmasuk->alamat_pengirim = $request->get('alamat_pengirim'); 
        // $suratmasuk->no_surat = $request->get('no_surat'); 
        // $suratmasuk->bidang = $request->get('bidang');
        // $suratmasuk->tgl_surat = $request->get('tgl_surat');
        // $suratmasuk->perihal = $request->get('perihal'); 
        // $suratmasuk->file_surat = $request->get('file_surat');
        // $suratmasuk->tgl_masuk = $request->get('tgl_masuk');
        
        // if($request->file('file_surat')){
        //     $file = $request->file('file_surat')->store('file_surats', 'public');
        //     $suratmasuk->file_surat = $file;
        // } 
        $suratrekomendasi->save();

        // dd($request->all());
		return redirect()->route('admin.suratrekomendasi.store')->with('status','Data Berhasil Di submit!'); 
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
        return view('admin.suratrekomendasi.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SuratRekomendasi::findOrFail($id);
        $data->delete();
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.suratrekomendasi')->with(['status' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.suratrekomendasi')->with(['error' => 'Data Gagal Dihapus!']);
         }  
    }

    public function laporan()
    { 
        return view('admin.suratrekomendasi.laporan');
    }

    public function cetaksuratrekomendasiPertanggal($tglawal, $tglakhir)
    {
        $cetaklaporan = SuratRekomendasi::orderBy('id')->whereBetween('periode',[$tglawal, $tglakhir])->get();
        return view('admin.suratrekomendasi.cetak_lap_per_tanggal', compact('cetaklaporan'));
    }
}
