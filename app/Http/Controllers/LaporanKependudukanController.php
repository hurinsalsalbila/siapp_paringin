<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaporanKependudukan;

class LaporanKependudukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = LaporanKependudukan::all();
        return view('admin.laporankependudukan.index', compact('id')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laporankependudukan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'kelurahan' => 'required',
        //     'laki_laki' => 'required',
        //     'perempuan' => 'required',
        //     'jml_kk' => 'required', 
        //     'jml_anggota' => 'required',
        //     'lahir' => 'required',
        //     'datang' => 'required',
        //     'meninggal' => 'required',
        //     'pindah' => 'required',
        //     'jml_pendudukakhirbulan' => 'required',
        //     'ket' => 'required',
        //   ]);
        
          $lapkependudukan = new \App\Models\LaporanKependudukan; 
         
          $lapkependudukan->kelurahan = $request->get('kelurahan'); 
          $lapkependudukan->laki_laki = $request->get('laki_laki'); 
          $lapkependudukan->perempuan = $request->get('perempuan'); 
          $lapkependudukan->jml_kk = $request->get('jml_kk'); 
          $lapkependudukan->jml_anggota = $request->get('jml_anggota');
          $lapkependudukan->jml_jiwa = $request->get('jml_jiwa'); 
          $lapkependudukan->lahir = $request->get('lahir'); 
          $lapkependudukan->datang = $request->get('datang'); 
          $lapkependudukan->meninggal = $request->get('meninggal'); 
          $lapkependudukan->pindah = $request->get('pindah'); 
          $lapkependudukan->jml_pendudukakhirbulan = $request->get('jml_pendudukakhirbulan'); 
          $lapkependudukan->ket = $request->get('ket');  
          // } 
          $lapkependudukan->save();
  
        //   dd($request->all());
          return redirect()->route('admin.lapkependudukan')->with('status','Data Berhasil Di submit!'); 
         
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
        return view('admin.lapkependudukan.edit');
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
        $data = LaporanKependudukan::findOrFail($id);
        $data->delete();
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.lapkependudukan')->with(['status' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.lapkependudukan')->with(['error' => 'Data Gagal Dihapus!']);
         }  
    }

    public function laporan()
    { 
            return view('admin.laporankependudukan.laporan');
    }

    public function cetaklapkependudukanPertanggal($tglawal, $tglakhir)
    {
        $cetaklaporan = LaporanKependudukan::orderBy('id')->whereBetween('created_at',[$tglawal, $tglakhir])->get();
        return view('admin.laporankependudukan.cetak_lap_per_tanggal', compact('cetaklaporan'));  
    }
}
