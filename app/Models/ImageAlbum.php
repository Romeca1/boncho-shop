<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageAlbum extends Model
{
    use HasFactory;
    protected $table = "images_albums";

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function images()
    {
    	return $this->hasMany(Image::class);
    }
}
