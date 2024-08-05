<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class SKU extends Model
{
protected $table = "skus";
public $primaryKey = "sku_id";
public function product(){
return $this->belongsTo('App\Product','product_id','product_id');
}
public function parent_product_variant(){
return $this->belongsTo('App\ProductVariant','parent_product_variant_id','product_variant_id');
}
public function child_product_variant(){
return $this->belongsTo('App\ProductVariant','child_product_variant_id','product_variant_id');
}
public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
}
