<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Rolepermissions extends Model
{
public $primaryKey="rolepermission_id";
public function role(){
return $this->belongsTo('App\Rolepermissions','role_id','role_id');
}
public function permissions(){
return $this->belongsTo('App\Rolepermissions','permission_id','permission_id');
}
}