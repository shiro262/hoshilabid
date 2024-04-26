<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterGenshin extends Model
{
    use HasFactory;

    //Weapon Foreign Key
    public function bestweapon(){
        return $this->belongsTo(WeaponGenshin::class, foreignKey:'weaponhgenshin_id', ownerKey:'id');
    }

    //Artifact Foreign Key
    public function bestartifact(){
        return $this->belongsTo(Artifact::class, foreignKey:'artifact_id', ownerKey:'id');
    }
}
