<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\SuratRekomendasi;
use App\Models\SuratMasuk;
use App\Models\LaporanKependudukan;
use App\Models\DispensasiNikah;
use App\Models\UsulanData;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = SuratRekomendasi::count();
        $data1 = DispensasiNikah::count();
        $data2 = LaporanKependudukan::count();
        $data3 = SuratMasuk::count();
        $data4 = UsulanData::count();
        // $data = [
        //     Helper::totalSuratMasuk(),
        //     Helper::totalUsulanData(),
        //     Helper::totalSuratRekomendasi(),
        //     Helper::totalLaporanKependudukan(),
        //     Helper::totalDispensasiNikah()
        // ];
        return view('home', compact('data','data1','data2','data3','data4'));
    }

    public function adminHome()
    {
        $data = SuratRekomendasi::count();
        $data1 = DispensasiNikah::count();
        $data2 = LaporanKependudukan::count();
        $data3 = SuratMasuk::count();
        $data4 = UsulanData::count();
        // $data = [
            // Helper::totalSuratMasuk();
            // Helper::totalUsulanData();
            // Helper::totalSuratRekomendasi();
            // Helper::totalLaporanKependudukan();
            // Helper::totalDispensasiNikah();
        // ];
        return view('admin-home', compact('data','data1','data2','data3','data4'));
    }
}
