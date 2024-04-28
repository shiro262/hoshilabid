<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterGenshin extends Model
{
    use HasFactory;

    //Signature Weapon
    public function signweapon(){
        return $this->belongsTo(WeaponGenshin::class, foreignKey:'weapon_sign_genshin_id', ownerKey:'id');
    }
    //Alternative Option 1 Weapon
    public function alt1weapon(){
        return $this->belongsTo(WeaponGenshin::class, foreignKey:'weapon_alt1_genshin_id', ownerKey:'id');
    }
    //Alternative Option 2 Weapon
    public function alt2weapon(){
        return $this->belongsTo(WeaponGenshin::class, foreignKey:'weapon_alt2_genshin_id', ownerKey:'id');
    }

    //Artifact Option 1
    public function artifactoption1(){
        return $this->belongsTo(Artifact::class, foreignKey:'artifact_opt1_id', ownerKey:'id');
    }
    //Artifact Option 2
    public function artifactoption2(){
        return $this->belongsTo(Artifact::class, foreignKey:'artifact_opt2_id', ownerKey:'id');
    }
}
