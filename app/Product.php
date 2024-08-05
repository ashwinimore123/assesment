<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
protected $table = "products";
public $primaryKey = "product_id";
public function kitchen_section(){
return $this->belongsTo('App\KitchenSection','kitchen_section_id','kitchen_section_id');
}
public function tax(){
return $this->belongsTo('App\Tax','tax_id','tax_id');
}
public function business(){
return $this->belongsTo('App\Business','business_id','business_id');
}
public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
public function parent_variant(){
return $this->belongsTo('App\Variant','parent_variant_id','variant_id');
}


public function child_variant(){
return $this->belongsTo('App\Variant','child_variant_id','variant_id');
}

 public function modifier_categories()
         {  
              return $this->belongsTo('App\ModifierCategory','product_id', 'product_id');
         }


}
