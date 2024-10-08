<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        'name',
        'image',
        'slug'
    ];
    public $translatable = ['name','slug'];

    public function product(){
        return $this->hasMany(Product::class,'category_id');
    }
}
