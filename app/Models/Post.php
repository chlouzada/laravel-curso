<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function tags()
    {
        // return $this->belongsToMany('App\Models\Tag', 'posts_tags');
        return $this->belongsToMany(Tag::class, 'posts_tags');
    }

    public function getTagListAtribute()
    {
        $tags = $this->tags()->lists('name')->all();

        return implode(', ', $tags);
    }
}
