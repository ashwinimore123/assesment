<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Country extends Model
{
protected $table = "countries";
public $primaryKey = "country_id";
protected $fillable = ['country_name','is_active'];
}
