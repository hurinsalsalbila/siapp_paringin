<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKependudukan extends Model
{
    use HasFactory;
    protected $table = "tb_lapkependudukan";
    protected $fillable = ['kelurahan','laki_laki','perempuan','jml_kk','jml_anggota','jml_jiwa','lahir','datang','meninggal','pindah','jml_pendudukakhirbulan','ket']; 
    protected $dates = ['created_at','updated_at'];
}
