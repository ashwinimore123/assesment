<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
public $primaryKey="branch_id";
protected $table ='branches';

public function branch()
{   //foriegn key restaurant_id
return $this->belongsTo('App\Business ','business_id ', 'business_id');
}
}

