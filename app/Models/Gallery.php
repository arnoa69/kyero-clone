<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;

class Gallery extends Model
{
    use HasFactory;
    
    protected $fillable = ['album_id','image','size','type','link'];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
