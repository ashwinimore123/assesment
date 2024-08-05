<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Cart extends Model
{
public $primaryKey="cart_id";
protected $table ='carts';
public $timestamps = false;

public function product()
{  
return $this->belongsTo('App\Product','product_id', 'product_id');
}

public function business()
{  
return $this->belongsTo('App\Business ','business_id', 'business_id');
}

public function branch()
{  
return $this->belongsTo('App\Branch ','branch_id', 'branch_id');
}

public function users()
{  
return $this->belongsTo('App\Users','id','id');
}

public function user()
{   
return $this->belongsTo('App\Users ','created_by','id');
}


public function customer()
{   
return $this->belongsTo('App\User','user_id','id');
}

public function cartmodifier()
  {
    return $this->hasMany('App\CartModifier','cart_id','cart_id')->with('modifier');
  }

  public function globalorder()
   {   
     return $this->belongsTo('App\GlobalOrder','global_order_id','global_order_id');
   }

}


