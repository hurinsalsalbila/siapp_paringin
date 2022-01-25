<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\SuratMasuk;
// use DB;
use DB;
use carbon\Carbon;
use PDF;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = SuratMasuk::all();
        return view('admin.suratmasuk.index', compact('id')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tanggal = Carbon::now()->format('Y-m-d');
        $id = SuratMasuk::all();
        $now = Carbon::now();
        $thnBulan = $now->month . $now->year;
        $cek =  SuratMasuk::count();
        if($cek == 0){
            $urut = 01;
            $nomer = 'NO' . $thnBulan . $urut;
            dd($nomer); 
        }else{
            $ambil = SuratMasuk::all()->last();
            $urut = (int)substr($ambil->no_surat, -1) + 1;
            $nomer = 'NO/' . $urut . '/' . 'DATA' .$thnBulan . '/';
        }
        // N
        return view('admin.suratmasuk.create', compact('id', 'tanggal', 'nomer'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suratmasuk = new \App\Models\SuratMasuk; 
        
        // $suratmasuk->no_urut = $request->get('no_urut'); 
        $suratmasuk->no_berkas = $request->get('no_berkas'); 
        $suratmasuk->alamat_pengirim = $request->get('alamat_pengirim'); 
        $suratmasuk->no_surat = $request->get('no_surat'); 
        // $suratmasuk->bidang = $request->get('bidang');
        $suratmasuk->tgl_surat = $request->get('tgl_surat');
        $suratmasuk->perihal = $request->get('perihal'); 
        // $suratmasuk->file_surat = $request->get('file_surat');
        // $suratmasuk->tgl_masuk = $request->get('tgl_masuk');
        
        // if($request->file('file_surat')){
        //     $file = $request->file('file_surat')->store('file_surats', 'public');
        //     $suratmasuk->file_surat = $file;
        // } 
        $suratmasuk->save();

        // dd($request->all());
		return redirect()->route('admin.suratmasuk')->with('status','Data Berhasil Di submit!');  
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
        return view('admin.suratmasuk.edit');   
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
        $data = SuratMasuk::findOrFail($id);
        $data->delete();
        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('admin.suratmasuk')->with(['status' => 'Data Berhasil Dihapus!']);
         }else{
           //redirect dengan pesan error
           return redirect()->route('admin.suratmasuk')->with(['error' => 'Data Gagal Dihapus!']);
         }  
    }

    public function cetakpdf(Type $var = null)
    {
        $suratmasuk = suratmasuk::all();
 
    	$pdf = PDF::loadview('admin.suratmasuk.suratmasuk_pdf',['suratmasuk'=>$suratmasuk]);
    	return $pdf->download('laporan-suratmasuk-pdf');
    }

    public function laporan()
    {
        return view('admin.suratmasuk.laporan');
    }

    public function cetaksuratmasukPertanggal($tglawal, $tglakhir)
    {
        $cetaklaporan = SuratMasuk::orderBy('id')->whereBetween('tgl_surat',[$tglawal, $tglakhir])->get();
        return view('admin.suratmasuk.cetak_lap_per_tanggal', compact('cetaklaporan'));   
    }
}
