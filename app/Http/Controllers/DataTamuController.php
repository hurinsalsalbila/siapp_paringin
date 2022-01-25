<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTamu;
use PDF;

class DataTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatamu = DataTamu::all();
        return view('admin.datatamu.index', compact('datatamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.datatamu.create');    
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
            'tanggal' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required', 
            'keperluan' => 'required',
            'keterangan' => 'required',
          ]);
        
          $input = $request->all();
        
          $datatamu =  DataTamu::create($input);
        
        // dd($request->all());
		return redirect()->route('admin.datatamu')->with('status','Data Berhasil Di submit!'); 
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
        return view('admin.datatamu.edit');
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
    public function hapus($id)
    {
        DataTamu::find($id)->delete();
        return redirect()->route('admin.datatamu.index')->with('status','Data Berhasil Dihapus');
    }

    public function cetakpdf(Type $var = null)
    {
        $datatamu = DataTamu::all();
 
    	$pdf = PDF::loadview('admin.datatamu.datatamu_pdf',['datatamu'=>$datatamu]);
    	return $pdf->download('laporan-datatamu-pdf');
    }
}
