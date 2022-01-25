<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispensasiNikah extends Model
{
    use HasFactory;
    protected $table = "tb_dispensasinikah";
    protected $fillable = ['no_surat','tanggal','perihal','nama','ttl','agama','pekerjaan','alamat','status']; 
    protected $dates = ['created_at','updated_at'];
}
