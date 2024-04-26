<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Each post belongs to one user
    public function post(){
        return $this->belongsTo(User::class, foreignKey:'user_id', ownerKey:'id');
    }
}
