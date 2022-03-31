<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function photo () {
        return $this->belongsTo(Photo::class);
    }

    public function role () {
        return $this->belongsTo(Role::class);
    }

    public function club () {
        return $this->belongsTo(Club::class);
    }

}
