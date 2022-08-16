<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImageGallery extends Model
{
    use HasFactory;
    
    protected $fillable = ['property_id', 'name', 'size'];

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}


