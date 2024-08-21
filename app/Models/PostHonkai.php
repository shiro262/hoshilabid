<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostHonkai extends Model
{
    use HasFactory;
    // Each post belongs to one user
    public function post(){
        return $this->belongsTo(User::class, foreignKey:'user_id', ownerKey:'id');
    }

    public function comment(){
        return $this->hasMany(CommentHonkai::class);
    }

    public function report(){
        return $this->hasMany(ReportHonkai::class);
    }
}
