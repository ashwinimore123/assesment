<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class State extends Model
{
protected $table = "states";
public $primaryKey = "state_id";
protected $fillable = ['state_name','is_active'];
public function country(){
return $this->belongsTo('App\Country','country_id','country_id');
}
}
