<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    protected $fillable = ['name','slug','image'];


    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
