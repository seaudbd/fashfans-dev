<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'shops';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function followers() {
        return $this->hasMany(Follower::class);
    }
}
