<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valkryie extends Model
{
    use HasFactory;

    //Valkryie Sign Weapon
    public function signweapon(){
        return $this->belongsTo(WeaponHonkai::class, foreignKey:'weapon_sign_hi3_id', ownerKey:'id');
    }
    //Valkryie Alternative Option 1 Weapon
    public function alt1weapon(){
        return $this->belongsTo(WeaponHonkai::class, foreignKey:'weapon_alt1_hi3_id', ownerKey:'id');
    }
    //Valkryie Alternative Option 2 Weapon
    public function alt2weapon(){
        return $this->belongsTo(WeaponHonkai::class, foreignKey:'weapon_alt2_hi3_id', ownerKey:'id');
    }

    //Valkryie Sign Stigmata
    public function signstigmata(){
        return $this->belongsTo(Stigmata::class, foreignKey:'stigmata_sign_id', ownerKey:'id');
    }
    //Valkryie Alternative Stigmata
    public function altstigmata(){
        return $this->belongsTo(Stigmata::class, foreignKey:'stigmata_alt_id', ownerKey:'id');
    }
}
