<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Table extends Model
{
public $primaryKey='table_id';
protected $table ='tables';

public function business()
{  
return $this->belongsTo('App\Business ','business_id', 'business_id');
}

public function branch()
{  
return $this->belongsTo('App\Branch ','branch_id', 'branch_id');
}

public function section()
{  
return $this->belongsTo('App\Section','section_id', 'section_id');
}

}
