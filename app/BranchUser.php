<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class BranchUser extends Model
{
//
protected $table = "branch_users";
public $primaryKey = "branch_user_id";


public function user(){
return $this->belongsTo('App\User','user_id','id');
}

public function branch(){
return $this->belongsTo('App\Branch','branch_id','branch_id');
}
}
