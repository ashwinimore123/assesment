<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class CartModifier extends Model
{
    public $primaryKey="cart_modifier_addon_id";
    public function modifier()
  {
    return $this->belongsTo('App\ModifierCategory','modifier_category_id','modifier_category_id');
  }


public function cart()

{
  return $this->belongsTo('App\Cart','cart_id','cart_id');
}

}
