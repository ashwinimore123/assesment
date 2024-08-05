<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
protected $table = "categories";
public $primaryKey = "category_id";
protected $fillable = ['business_id','category_name','color','priority','restaurant_id','branch_id','is_active'];
public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
public function business(){
return $this->belongsTo('App\Business','business_id','business_id');
}

}
