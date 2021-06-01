<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'comments';

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }
}
