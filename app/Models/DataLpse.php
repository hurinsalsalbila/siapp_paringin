<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLpse extends Model
{
    use HasFactory;
    protected $table = "lpse";
    protected $fillable = ['id_lpse','nama','alamat','tanggal','nama_perusahaan','no_telp','keperluan']; 
}
