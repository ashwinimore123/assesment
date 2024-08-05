<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ProductVariant extends Model
{
protected $table = "product_variants";
public $primaryKey = "product_variant_id";
public function variant(){
return $this->belongsTo("App\Variant",'variant_id','variant_id');
}
}
