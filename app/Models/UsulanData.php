<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanData extends Model
{
    use HasFactory;
    protected $table = "tb_usulandata";
    protected $fillable = ['no_surat','tgl_surat','perihal']; 
    protected $dates = ['created_at','updated_at'];
}
