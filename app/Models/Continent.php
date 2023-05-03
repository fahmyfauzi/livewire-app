<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    // relasi ke country
    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
