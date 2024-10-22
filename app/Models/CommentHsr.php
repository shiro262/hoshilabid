<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentHsr extends Model
{
    use HasFactory;
    // Each comment belongs to one user
    public function user(){
        return $this->belongsTo(User::class, foreignKey:'user_id', ownerKey:'id');
    }
    //Each comment belongs to one post
    public function post(){
        return $this->belongsTo(PostHsr::class, foreignKey:'post_hsr_id', ownerKey:'id');
    }
}
