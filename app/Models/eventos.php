<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    use HasFactory;
    public function noticias()
    {
        return $this->hasMany(Noticias::class, 'eventos_id');
    }
}
