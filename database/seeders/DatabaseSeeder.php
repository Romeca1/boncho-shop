<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Category::create([
        	"name" => "headphones",
        ]);
        \App\Models\Category::create([
        	"name" => "phones",
        ]);
        \App\Models\Category::create([
        	"name" => "laptops",
        ]);
        \App\Models\Category::create([
        	"name" => "speakers",
        ]);
        \App\Models\Category::create([
        	"name" => "cameras",
        ]);
        \App\Models\Category::create([
        	"name" => "watches",
        ]);
        \App\Models\Product::factory(30)->create();
        for ($i=1; $i <=30 ; $i++) { 
        	
        	\App\Models\ImageAlbum::create([
        		"name" => "album" . $i,
        		"product_id" => $i,
        	]);
        	\App\Models\Image::create([
        		"url" => "product-". rand(1,8) .".jpg", 
        		"image_album_id" => $i,
        	]);	

        }
        
    }
}
