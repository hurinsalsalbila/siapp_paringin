<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanData;

class UsulanDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = UsulanData::all();
        return view('admin.usulandata.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usulandata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usulandata = new \App\Models\UsulanData; 
        $usulandata->no_surat = $request->get('no_surat'); 
        $usulandata->tgl_surat = $request->get('tgl_surat'); 
        $usulandata->perihal = $request->get('perihal');  
        $usulandata->save();
        return redirect()->route('admin.usulandata.store')->with('status','Data Berhasil Di submit!'); 
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
        return view('admin.usulandata.edit');
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
        $data = UsulanData::findOrFail($id);
        $data->delete();
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.usulandata')->with(['status' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.usulandata')->with(['error' => 'Data Gagal Dihapus!']);
         }  
    }

    public function laporan()
    {
        {
            return view('admin.usulandata.laporan');
        }
    }

    public function cetaksuratrekomendasiPertanggal($tglawal, $tglakhir)
    {
        $cetaklaporan = UsulanData::orderBy('id')->whereBetween('tgl_surat',[$tglawal, $tglakhir])->get();
        return view('admin.usulandata.cetak_lap_per_tanggal', compact('cetaklaporan'));
    }
}
