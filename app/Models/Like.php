<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tweet(){
        return $this->belongsTo(Tweet::class);
    }

    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
