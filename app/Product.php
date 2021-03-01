<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function variantHead()
    {
        return $this->belongsTo(VariantHead::class, 'id', 'product_id')->with('variants');
    }
    public function addonsHead()
    {
        return $this->hasMany(AddonHead::class)->with('addons');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function media() {
        return $this->hasMany(Media::class, 'item_id', 'id')->where('item_type', 'product');
    }
}
