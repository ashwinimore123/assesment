<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Tax extends Model
{
protected $table = "taxes";
public $primaryKey = "tax_id";
protected $fillable = ['tax_name','tax_percentage','is_active'];
}
