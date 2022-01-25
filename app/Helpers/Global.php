<?php 
namespace App\Helpers;
use App\Models\UsulanData;
use App\Models\SuratRekomendasi;
use App\Models\DispensasiNikah;
use App\Models\SuratMasuk;
use App\Models\LaporanKependudukan;

 
// class Helper{
    function totalSuratMasuk()
    {
        return SuratMasuk::count();
    }
    function totalUsulanData()
    {
        return UsulanData::count();
    }
    function totalSuratRekomendasi()
    {
        return SuratRekomendasi::count();
    }
    function totalLaporanKependudukan()
    {
        return LaporanKependudukan::count();
    }
    function totalDispensasiNikah()
    {
        return DispensasiNikah::count();
    }
// }


