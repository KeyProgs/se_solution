<?php

namespace App\Models;

use App\Http\Controllers\PaletteController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    use HasFactory;

    public function insertPacket($qrCode)
    {
        $cats = Categorie::select('id','categorie')->get();
//        dd($cats);
        foreach ($cats as $cat)
//            dd($cat->categorie,str_contains($qrCode, $cat->categorie));

            if (str_contains($qrCode, $cat->categorie)) {
                $this->categorie_id = $cat->id;
                echo $cat;
                break;
            }
        if($this->categorie_id == null ) return 'Categorie Code Introuvable dans  QR scanne';


        $categorie = Categorie::where('id', $this->categorie_id)->get()[0];
        $palette = $categorie->lastPalette();


//        dd($palette->id,);
        if ($palette !=null AND  $palette->getPackets()->count() < $categorie->size) {
            $this->palette_id = $palette->id;

        } else {
            $newPalette = new Palette();
            $newPalette->categorie_id = $this->categorie_id;
            $newPalette->qr = $this->categorie_id . '**********';
            $newPalette->save();
            $this->palette_id = $newPalette->id;

        }

        $this->qr = $qrCode;
        $this->save();


    }

    public function getQrImage()
    {
        return ('https://api.qrserver.com/v1/create-qr-code/?size=50x50&data=' . $this->qr);
    }

}
