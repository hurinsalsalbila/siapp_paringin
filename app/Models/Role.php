<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
}
class User extends Authenticatable {

    public function roles() {
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
