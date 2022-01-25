<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $table = "tb_suratkeluar";
    protected $fillable = ['no_surat','bidang','tgl_surat','perihal','tgl_masuk','file_surat'];
    protected $dates = ['created_at','updated_at']; 
}
