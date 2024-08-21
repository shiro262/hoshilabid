<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    // Each report belongs to one user
    public function user(){
        return $this->belongsTo(User::class, foreignKey:'user_id', ownerKey:'id');
    }
    //Each report belongs to one post
    public function report(){
        return $this->belongsTo(PostHsr::class, foreignKey:'post_hsr_id', ownerKey:'id');
    }
}
