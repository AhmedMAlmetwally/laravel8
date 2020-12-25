<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'products';
    protected $guarded = [];
    public $translatable = ['title'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function cover()
    {
        return $this->images()->where('type', 'cover');
    }

    public function price()
    {
        return $this->hasOne(ProductPrice::class)->where('region', session()->get('region'));
    }

    public function stock()
    {
        return $this->hasMany(ProductStock::class)->where('region', session()->get('region'));
    }
}
