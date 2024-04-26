<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valkryie extends Model
{
    use HasFactory;

    //Weapon Foreign Key
    public function bestweapon(){
        return $this->belongsTo(WeaponHonkai::class, foreignKey:'weaponhi3_id', ownerKey:'id');
    }

    //Stigmata Foreign Key
    public function beststigmata(){
        return $this->belongsTo(Stigmata::class, foreignKey:'stigmata_id', ownerKey:'id');
    }
}
