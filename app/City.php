<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class City extends Model
{
protected $table = "cities";
public $primaryKey = "city_id";
protected $fillable = ['city_name','is_active'];
public function state(){
return $this->belongsTo('App\State','state_id','state_id');
}
}
