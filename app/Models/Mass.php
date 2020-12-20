<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mass extends Model
{
    use HasFactory;

    public function parishioners(){
        return $this->hasMany(User::class);
    }
}
