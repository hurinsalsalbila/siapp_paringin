<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMagang extends Model
{
    use HasFactory;
    protected $table = "data_magang";
    protected $fillable = ['tanggal','nama','sekolah','no_telp','keperluan','bidang']; 
}
