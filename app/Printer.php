<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Printer extends Model
{
protected $table = "printers";
public $primaryKey = "printer_id";
public $fillable = ['printer_ip','business_id','branch_id','is_active'];
public function business(){
return $this->belongsTo('App\Business','business_id','business_id');
}
public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
}
