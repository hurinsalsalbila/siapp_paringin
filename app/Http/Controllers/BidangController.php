<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $bidang = Bidang::all(); 
        
        return view('admin.bidang.index', ['bidang' => $bidang]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.bidang.create');
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
            'nama_bidang' => 'required', 
          ]);
        
          $input = $request->all();
        
          $bidang =  Bidang::create($input);
         
        
        // dd($request->all());
		return redirect()->route('admin.bidang.create')->with('status','Data Berhasil Di submit!'); 
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
        //
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
        Bidang::find($id)->delete();
        return redirect()->route('admin.bidang.index')->with('status','USer Deleted Successfully!');
    }

    public function laporan()
    {
        return view('admin.bidang.laporan');
    }

    public function cetakBidangPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetaklaporan = Bidang::with('id')->whereBetween('created_at',[$tglawal, $tglakhir])->get();
        return view('admin.bidang.cetak_lap_per_tanggal', compact('cetaklaporan'));
    }


}
