<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Permissions extends Model
{
public $primaryKey="permission_id";
protected $table = 'permissions';
protected $fillable = [
'permission_id',
'permission_name', 
'is_active',
'created_at',
'updated_at',
];
public function rolepermissions(){
return $this->belongsTo('App\Rolepermissions','permission_id','permission_id');
}
}
