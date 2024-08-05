<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ProductCategory extends Model
{
protected $table = "product_categories";
public $primaryKey = "product_category_id";
public function product(){
return $this->belongsTo('App\Product','product_id','product_id');
}
public function category(){
return $this->belongsTo('App\Category','category_id','category_id');
}
}
