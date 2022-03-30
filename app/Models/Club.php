<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Club extends Model
{
    use HasFactory;

    public function continent()
    {
        return $this->BelongsTo(Continent::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
