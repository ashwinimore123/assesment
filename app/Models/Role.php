<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
protected $table = 'roles';
public $primaryKey="role_id";
protected $fillable = [
'role_name', 
'is_active',
'created_at',
'updated_at',
];
}
