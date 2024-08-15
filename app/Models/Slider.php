<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        'title',
        'description',
        'image',
        'link_url',
        'button'
    ];
    public $translatable = ["title", "description", "button"];
}
