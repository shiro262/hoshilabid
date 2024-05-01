<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterHsr extends Model
{
    use HasFactory;
    //Signature Lightcone
    public function signlightcone(){
        return $this->belongsTo(Lightcone::class, foreignKey:'lightcone_sign_id', ownerKey:'id');
    }
    //Alternative Option 1 Lightcone
    public function alt1lightcone(){
        return $this->belongsTo(Lightcone::class, foreignKey:'lightcone_alt1_id', ownerKey:'id');
    }
    //Alternative Option 2 Lightcone
    public function alt2lightcone(){
        return $this->belongsTo(Lightcone::class, foreignKey:'lightcone_alt2_id', ownerKey:'id');
    }

    //Relic Option 1
    public function relicoption1(){
        return $this->belongsTo(Relic::class, foreignKey:'relic_opt1_id', ownerKey:'id');
    }
    //Relic Option 2
    public function relicoption2(){
        return $this->belongsTo(Relic::class, foreignKey:'relic_opt2_id', ownerKey:'id');
    }
    //Planar Option 1
    public function planaroption1(){
        return $this->belongsTo(Planar::class, foreignKey:'planar_opt1_id', ownerKey:'id');
    }
    //Planar Option 2
    public function planaroption2(){
        return $this->belongsTo(Planar::class, foreignKey:'planar_opt2_id', ownerKey:'id');
    }
}
