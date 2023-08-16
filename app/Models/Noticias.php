<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;
    public function eventos()
    {
        return $this->belongsTo(eventos::class);
    }
}
