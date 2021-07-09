<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    use HasFactory;


    public function getPackets(){
        return $this->hasMany('App\Models\Packet')->get();
    }

    public function getSize(){
        return $this->size;
    }
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie')->get()[0];
    }

    public function user(){
        return $this->belongsTo('App\Models\User')->get()[0];
    }
    public function getQrImage(){
        return ('https://api.qrserver.com/v1/create-qr-code/?size=50x50&data='.$this->qr);
    }

    public function packets(){
        return $this->hasMany('App\Models\Packet')->get();
    }
    public function packets_count(){
         $packets_count= $this->hasMany('App\Models\Packet')->get();
         return count($packets_count);
    }

}
