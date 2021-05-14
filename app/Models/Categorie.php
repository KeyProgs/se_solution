<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function getPalletes(){
        return $this->hasMany('App\Models\Palette');
    }
    public function lastPalette(){
        return $this->hasMany('App\Models\Palette')->orderBy('id', 'DESC')->first();
    }
}
