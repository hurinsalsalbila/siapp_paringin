<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispensasiNikah;

class DispensasiNikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = DispensasiNikah::all();
        return view('admin.dispensasinikah.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dispensasinikah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dispensasinikah = new \App\Models\DispensasiNikah;  
        $dispensasinikah->no_surat = $request->get('no_surat'); 
        $dispensasinikah->tanggal = $request->get('tanggal'); 
        $dispensasinikah->perihal = $request->get('perihal'); 
        $dispensasinikah->nama = $request->get('nama'); 
        $dispensasinikah->ttl = $request->get('ttl');
        $dispensasinikah->agama = $request->get('agama'); 
        $dispensasinikah->pekerjaan = $request->get('pekerjaan'); 
        $dispensasinikah->alamat = $request->get('alamat'); 
        $dispensasinikah->status = $request->get('status');  
        $dispensasinikah->save(); 
        // dd($request->all());
        return redirect()->route('admin.dispensasinikah')->with('status','Data Berhasil Di submit!'); 
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
        return view('admin.dispensasinikah.edit');
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
        $data = DispensasiNikah::findOrFail($id);
        $data->delete();
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.dispensasinikah')->with(['status' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.dispensasinikah')->with(['error' => 'Data Gagal Dihapus!']);
         }  
    }

    public function laporan()
    {
            return view('admin.dispensasinikah.laporan');
      
    }

    public function cetakdispensasinikahPertanggal($tglawal, $tglakhir)
    {
        $cetaklaporan = DispensasiNikah::orderBy('id')->whereBetween('ttl',[$tglawal, $tglakhir])->get();
        return view('admin.dispensasinikah.cetak_lap_per_tanggal', compact('cetaklaporan'));
    }
}
