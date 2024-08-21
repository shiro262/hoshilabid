<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportHonkai extends Model
{
    use HasFactory;
    // Each report belongs to one user
    public function user(){
        return $this->belongsTo(User::class, foreignKey:'user_id', ownerKey:'id');
    }
    //Each report belongs to one post
    public function post_id(){
        return $this->belongsTo(PostHonkai::class, foreignKey:'post_honkai_id', ownerKey:'id');
    }
}
