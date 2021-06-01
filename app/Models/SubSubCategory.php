<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $table = 'sub_sub_categories';
    protected $guarded = [];



    public function subcategory(){
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function products(){
        return $this->hasMany(Product::class, 'subsubcategory_id');
    }
}
