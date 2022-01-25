<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratRekomendasi extends Model
{
    use HasFactory;
    protected $table = "tb_suratrekomendasi";
    protected $fillable = ['nama','alamat','no_telp','alamat_usaha','jenis_reklame','nama_toko','ukuran','periode','alamat_toko']; 
    protected $dates = ['created_at','updated_at'];
}
