<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTamu extends Model
{
    use HasFactory;
    protected $table = "data_tamu";
    protected $fillable = ['id_tamu','tanggal','nama','alamat','no_telp','keperluan','keterangan'];
}
