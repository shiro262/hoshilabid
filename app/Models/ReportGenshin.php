<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportGenshin extends Model
{
    use HasFactory;
    // Each report belongs to one user
    public function user(){
        return $this->belongsTo(User::class, foreignKey:'user_id', ownerKey:'id');
    }
    //Each report belongs to one post
    public function post_id(){
        return $this->belongsTo(PostGenshin::class, foreignKey:'post_genshin_id', ownerKey:'id');
    }
}
