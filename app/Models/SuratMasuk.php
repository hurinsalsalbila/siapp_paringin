<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = "tb_suratmasuk";
    protected $fillable = ['no_berkas','alamat_pengirim','no_surat','tgl_surat','perihal']; 
    protected $dates = ['created_at','updated_at'];

    // public static function getId()
    // {
    //    return $getId = DB::table('tb_suratmasuk')->orderBy('id')->take(1)->get();
    // }
}
