<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    public $table = 'product_category';
    protected $primaryKey = 'category_id';
    
}
