<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function tags()
    {
        // return $this->belongsToMany('App\Models\Post', 'posts_tags');
        return $this->belongsToMany(Post::class, 'posts_tags');
    }
}
