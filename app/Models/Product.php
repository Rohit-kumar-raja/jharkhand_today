<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function feature()
    {
        return $this->hasMany(ProductFeature::class);
    }
    public function categories()
    {
        return $this->belongsTo(ProductCategory::class, 'category');
    }
}
