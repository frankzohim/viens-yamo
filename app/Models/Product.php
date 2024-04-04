<?php

namespace App\Models;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the images for the current product.
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
