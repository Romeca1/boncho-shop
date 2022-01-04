<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    
    public function album()
    {
    	return $this->hasOne(ImageAlbum::class);
    }
    public function images()
    {
    	return $this->hasManyThrough(Image::class, ImageAlbum::class);
    }
    
}
