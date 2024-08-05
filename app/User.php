<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
use Notifiable;
protected $fillable = [
'name', 'email', 'password','pin','contact_number','business_id','role_id'
];
protected $hidden = [
'password', 'remember_token',
];
protected $table = "users";
public function business(){
return $this->belongsTo('App\Business','business_id','business_id');
}
public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
public function role(){
return $this->belongsTo('App\Role','role_id','role_id');
}
}
