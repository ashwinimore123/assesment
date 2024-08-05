<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Roles extends Model
{
public $primaryKey="role_id";
protected $table = 'roles';
protected $fillable = [
'role_id',
'role_name', 
'is_active',
'created_at',
'updated_at',
];
}
