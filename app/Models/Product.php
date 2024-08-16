<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory,HasTranslations;
    
    protected $fillable = [
        'name',
        'description',
        'view_count',
        'price',
        'discount_percent',
        'stock',
        'current_stock',
        'slug',
        'category_id',
        'image'
    ];

    public $translatable = ["name", "description", "slug"];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
