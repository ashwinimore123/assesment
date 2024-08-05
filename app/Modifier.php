<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Modifier extends Model
{
    
     public $primaryKey='modifier_id';
     protected $table ='modifiers';

     public function product()
         {  
             return $this->belongsTo('App\Product','product_id','product_id');
         }
     
      public function modifier_categories()
         {  
             return $this->belongsTo('App\ModifierCategory','modifier_category_id', 'modifier_category_id');
         }

         
}
