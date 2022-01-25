<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    use HasFactory;
    protected $table = "tb_skpd";
    protected $fillable = ['skpd_id','skpd_nama'];
    protected $dates = ['created_at','updated_at']; 
}
