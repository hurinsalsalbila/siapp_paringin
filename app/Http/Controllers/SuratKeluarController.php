<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\Bidang;
use DB;
use carbon\Carbon;
use PDF;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tanggal = Carbon::now()->format('Y-m-d');
        $id = SuratKeluar::all();
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cek =  SuratKeluar::count();
        if($cek == 0){
            $urut = 1000001;
            $nomer = 'NO' . $thnBulan . $urut;
            dd($nomer); 
        }else{
            $ambil = SuratKeluar::all()->last();
            $urut = (int)substr($ambil->no_surat, -8) + 1;
            $nomer = 'No' . $thnBulan . $urut;
        }
        // N
        return view('admin.suratkeluar.index', compact('id', 'tanggal', 'nomer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   

        // $this->validate($request,[
        //     'no_surat' => 'required|min:5',
        //     'tgl_surat' => 'required',
        //     'bidang' => 'required',
        //     'perihal' => 'required',
        //     'file_surat' => 'required',
        //     'tgl_masuk' => 'required',
        // ]);
        $bidang = Bidang::all();
        $tanggal = Carbon::now()->format('Y-m-d');
        $id = SuratKeluar::all();
        $now = Carbon::now();
        $thnBulan = $now->month . $now->year;
        $cek =  SuratKeluar::count(); 
       
        if($cek == 0){
            $urut = 01;
            $nomer = 'NO' . $thnBulan . $urut;
            dd($nomer); 
        }else{
            $ambil = SuratKeluar::all()->last();
            $urut = (int)substr($ambil->no_surat, -1) + 1;
            
            $nomer = 'NO/' . $urut . '/' . '$' . '/' .$thnBulan;
        } 
        return view('admin.suratkeluar.create', compact('id', 'tanggal', 'nomer', 'bidang')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
		$this->validate($request,[
			'no_surat' => 'required',
			'bidang' => 'required', 
			'tgl_surat' => 'required',
            'perihal' => 'required',
            'tgl_masuk' => 'required',
            'file_surat' => 'required', 
		]); 
        $suratkeluar = new \App\Models\SuratKeluar; 
        $suratkeluar->no_surat = $request->get('no_surat'); 
        $suratkeluar->bidang = $request->get('bidang');
        $suratkeluar->tgl_surat = $request->get('tgl_surat');
        $suratkeluar->perihal = $request->get('perihal'); 
        // $suratkeluar->file_surat = $request->get('file_surat');
        $suratkeluar->tgl_masuk = $request->get('tgl_masuk');
        
        if($request->file('file_surat')){
            $file = $request->file('file_surat')->getClientOriginalName();
            $file = $request->file('file_surat')->store('file_surats', 'public');
            $suratkeluar->file_surat = $file;
        } 
        $suratkeluar->save();

        // dd($request->all());
		return redirect()->route('admin.suratkeluar.create')->with('status','Data Berhasil Di submit!'); 
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
        return view('admin.suratkeluar.edit');
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
        SuratKeluar::find($id)->delete();
        return redirect()->route('admin.suratkeluar.index')->with('status','USer Deleted Successfully!');
    }
    
    public function download(Request $request, $file)
    {
       return response()->download(public_path('storage/file_surats'.$file));
    }

    public function cetakpdf(Type $var = null)
    {
        $suratkeluar = SuratKeluar::all();
 
    	$pdf = PDF::loadview('admin.suratkeluar.suratkeluar_pdf',['suratkeluar'=>$suratkeluar]);
    	return $pdf->download('laporan-suratkeluar-pdf');
    }
}
