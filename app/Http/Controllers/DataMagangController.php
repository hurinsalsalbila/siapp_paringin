<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMagang;
use PDF;

class DataMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamagang = DataMagang::all();
        return view('admin.datamagang.index', compact('datamagang'));
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
        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'sekolah' => 'required', 
            'no_telp' => 'required', 
            'keperluan' => 'required', 
            'bidang' => 'required',
          ]);
        
          $input = $request->all();
        
          $datamagang =  DataMagang::create($input);
        
        // dd($request->all());
		return redirect()->route('admin.datamagang')->with('status','Data Berhasil Di submit!'); 
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
        $datamagang = DataMagang::all();
        return view('admin.datamagang.edit', compact('datamagang  '));
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
        //
    }
}
