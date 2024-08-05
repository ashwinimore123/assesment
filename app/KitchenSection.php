<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class KitchenSection extends Model
{
protected $table = "kitchen_sections";
public $primaryKey = "kitchen_section_id";
public function business(){
return $this->belongsTo('App\Business','business_id','business_id');
}
public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
public function printer(){
return $this->belongsTo('App\Printer','printer_id','printer_id');
}
}
